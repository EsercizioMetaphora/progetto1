<script src="/js/app.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61309f70a855ee0013f55721&product=sop" async="async"></script>

<script>
  fetch("/links.json")
    .then(function(response) {
      return response.json();
    })
    .then(function(result) {
      let linkList = document.getElementById("LinkList");
      let listHtml = (link) => {
        let html = `<li class="nav-item"><a class="nav-link" href="${link.url}">${link.name}</a></li>`;
        return html
      };
      let nuovohtml = "";
      for (waga of result.link) {
        nuovohtml += listHtml(waga);
        console.log(listHtml(waga));
      }
      linkList.innerHTML = nuovohtml;
    })
</script>