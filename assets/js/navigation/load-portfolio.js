let portfolio = document.getElementById("content-portfolio");
let web = document.getElementById("content-web");
let graph = document.getElementById("content-print");
let navAll = document.getElementById("all-gallery");
let navWeb = document.getElementById("web-gallery");
let navPrint = document.getElementById("print-gallery");

function loadWeb() {
  portfolio.classList.remove("display-flex2");
  web.classList.remove("display-none");
  graph.classList.remove("display-flex2");
  portfolio.classList.add("display-none");
  web.classList.add("display-flex2");
  graph.classList.add("display-none");
  navAll.classList.remove("active2");
  navPrint.classList.remove("active2");
  navWeb.classList.add("active2");
};

function loadPrint() {
  portfolio.classList.add("display-none");
  portfolio.classList.remove("display-flex2");
  web.classList.add("display-none");
  graph.classList.add("display-flex2");
  web.classList.remove("display-flex2");
  graph.classList.remove("display-none");
  navAll.classList.remove("active2");
  navPrint.classList.add("active2");
  navWeb.classList.remove("active2");

};

function loadAll() {
  portfolio.classList.add("display-flex2");
  portfolio.classList.remove("display-none");
  web.classList.add("display-none");
  graph.classList.add("display-none");
  web.classList.remove("display-flex2");
  graph.classList.remove("display-flex2");
  navAll.classList.add("active2");
  navPrint.classList.remove("active2");
  navWeb.classList.remove("active2");

};