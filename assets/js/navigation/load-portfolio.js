// function loadWeb() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("content-portfolio").innerHTML = this.responseText;
//       }
//     };
//     xhttp.open("GET", "wp-content/themes/akaleya-theme/template-parts/content/content-web.txt", true);
//     // ca marche. Trouver un moyen de charger content-web/ responseText attend du texte a retrouner
//     xhttp.send();
//   };
//   function loadPrint() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("content-portfolio").innerHTML = this.responseText;
//       }
//     };
//     xhttp.open("GET", "wp-content/themes/akaleya-theme/template-parts/content/content-web.txt", true);
//     // ca marche. Trouver un moyen de charger content-web/ responseText attend du texte a retrouner
//     xhttp.send();
//   };

//   function loadAll() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("content-portfolio").innerHTML = this.responseText;
//       }
//     };
//     xhttp.open("GET", "wp-content/themes/akaleya-theme/template-parts/content/content-web.txt", true);
//     // ca marche. Trouver un moyen de charger content-web/ responseText attend du texte a retrouner
//     xhttp.send();
//   };

let portfolio = document.getElementById("content-portfolio");
let web = document.getElementById("content-web");
let graph = document.getElementById("content-print");

function loadWeb() {
  portfolio.classList.remove("display-flex2");
  web.classList.remove("display-none");
  graph.classList.remove("display-flex2");
  portfolio.classList.add("display-none");
  web.classList.add("display-flex2");
  graph.classList.add("display-none");

};

function loadPrint() {
  portfolio.classList.add("display-none");
  portfolio.classList.remove("display-flex2");
  web.classList.add("display-none");
  graph.classList.add("display-flex2");
  web.classList.remove("display-flex2");
  graph.classList.remove("display-none");

};

function loadAll() {
  portfolio.classList.add("display-flex2");
  portfolio.classList.remove("display-none");
  web.classList.add("display-none");
  graph.classList.add("display-none");
  web.classList.remove("display-flex2");
  graph.classList.remove("display-flex2");
};