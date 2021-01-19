function loadWeb() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("content-portfolio").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "wp-content/themes/akaleya-theme/template-parts/content/content-web.txt", true);
    // ca marche. Trouver un moyen de charger content-web/ responseText attend du texte a retrouner
    xhttp.send();
  };
  function loadPrint() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("content-portfolio").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "wp-content/themes/akaleya-theme/template-parts/content/content-web.txt", true);
    // ca marche. Trouver un moyen de charger content-web/ responseText attend du texte a retrouner
    xhttp.send();
  };

  function loadAll() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("content-portfolio").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "wp-content/themes/akaleya-theme/template-parts/content/content-web.txt", true);
    // ca marche. Trouver un moyen de charger content-web/ responseText attend du texte a retrouner
    xhttp.send();
  };