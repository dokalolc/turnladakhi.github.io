<!-- (A) SEARCH FORM -->
<form class="form" onsubmit="return ajsearch();">
  <input class="form-control me-2" type="search" id="search" required />
  <input type="submit" value="Search"/>
  
</form>

<!-- (B) SEARCH RESULTS -->
<div id="results"></div>

<script>
    function ajsearch () {
      // (A) GET SEARCH TERM
      var data = new FormData();
      data.append("search", document.getElementById("search").value);
      data.append("ajax", 1);
     
      // (B) AJAX SEARCH REQUEST
      fetch("2-search.php", { method:"POST", body:data })
      .then(res => res.json()).then((results) => {
        var wrapper = document.getElementById("results");
        if (results.length > 0) {
          wrapper.innerHTML = "";
          for (let res of results) {
            let line = document.createElement("div");
            line.innerHTML = `${res["word"]} - ${res["meaning"]}`;
            wrapper.appendChild(line);
          }
        } else { wrapper.innerHTML = "No results found"; }
      });
      return false;
    }
    </script>