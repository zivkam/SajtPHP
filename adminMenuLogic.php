<?php
class Model 
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "itehdomaci";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }


    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['vinylname']) && isset($_POST['artist']) && isset($_POST['genre']) && isset($_POST['year'])) {
                if (!empty($_POST['vinylname']) && !empty($_POST['artist']) && !empty($_POST['genre']) && !empty($_POST['year'])) {

                    $vinylname = $_POST['vinylname'];
                    $artist = $_POST['artist'];
                    $genre = $_POST['genre'];
                    $year = $_POST['year'];

                    $query = "INSERT INTO vinyl (vinyl_name,artist,genre,year) VALUES ('$vinylname','$artist','$genre','$year')";

                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('record added successfully');</script>";
                        echo "<script>window.location.href='adminMenu.php';</script>";
                    } else {
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href='adminMenu.php';</script>";
                    }
                } else {
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href='adminMenu.php';</script>";
                }
            }
        }
    }

    public function fetch()
    {
        $data = [];

        $query = "SELECT *
            FROM vinyl
            LEFT JOIN user ON vinyl.user_id=user.id;";

        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        shuffle($data);
        
        return $data;
    }


    public function delete($id)
    {
        $query = "DELETE FROM vinyl
            WHERE vinyl_id = '$id' ";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function fetch_single($id)
    {

        $data = null;

        $query = "SELECT* FROM vinyl WHERE vinyl_id='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }


    public function edit($id)
    {

        $data = null;

        $query = "SELECT* FROM vinyl WHERE vinyl_id='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {
        $query = " UPDATE vinyl SET vinyl_name='$data[vinyl_name]', artist='$data[artist]', genre='$data[genre]', year='$data[year]'
             WHERE vinyl_id='$data[vinyl_id]'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function update2($data)
    {
        $query = "UPDATE vinyl SET user_id='$data[user_id]'
            WHERE vinyl_id='$data[vinyl_id]'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function sortVinylsByTitle()
    {
        $data = null;

        $query = "SELECT * FROM vinyl ORDER BY vinyl_name;";

        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function searchVinyls($text)
    {
        $data = [];

        $query = "SELECT * FROM vinyl WHERE vinyl_name LIKE '%" . $text . "%'";

        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
