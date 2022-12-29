/* ** SORT ** */

let sortBtn = document.getElementById("sort-btn");
let tbody = document.getElementById('tbody');

let searchBox = document.getElementById('search-box');

sortBtn.addEventListener('click', (event) => {
  searchBox.value = "";

  $.ajax({
    url: 'sort.php',
    type: 'POST',
    data: {
      sortType: "title",
    },
    success: (response) => {
      let vinyl = JSON.parse(response);
      let html = "";

      vinyl.forEach((x) => {
        if (x.user_id == 0) {
          html += `<tr>
                    <td>${x.vinyl_name}</td>
                    <td>${x.artist}</td>
                    <td>${x.genre}</td>
                    <td>${x.year}</td>
                    <td>
                      <form method="POST">
                        <button type="submit" class="btn" name="pick"><i class="fas"></i>Покупи</button>
                        <input type="hidden" name="vinyl_id" value="${x.vinyl_id}">
                      </form>
                    </td>
                  </tr>`;
        }

        tbody.innerHTML = html;
      });
    }
  });
});


searchBox.addEventListener('keyup', (event) => {
  let text = searchBox.value;

  $.ajax({
    url: 'search.php',
    type: 'POST',
    data: {
      search: text,
    },
    success: (response) => {
      let vinyls = JSON.parse(response);
      let html = "";

      vinyls.forEach((x) => {
        if (x.user_id == 0) {
          html += `<tr>
                    <td>${x.vinyl_name}</td>
                    <td>${x.artist}</td>
                    <td>${x.genre}</td>
                    <td>${x.year}</td>
                    <td>
                      <form method="POST">
                        <button type="submit" class="btn" name="pick"><i class="fas"></i>Покупи</button>
                        <input type="hidden" name="vinyl_id" value="${x.vinyl_id}">
                      </form>
                    </td>
                  </tr>`;
        }
      });

      tbody.innerHTML = html;
    }
  });

});


