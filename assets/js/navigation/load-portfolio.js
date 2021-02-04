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