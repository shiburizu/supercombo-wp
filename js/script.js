function openTab(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("tab-content");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tab-item");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

function copyLink(evt,link) {
  navigator.clipboard.writeText(link);
  evt.target.className += " active";
  setTimeout( function(evt) {
    console.log(evt.target)
    evt.target.classList.remove("active")
    console.log("Done")
  },1000,evt)
}

function openMenu() {
  document.getElementById('sc-modal').classList.add('active');
}

function closeMenu() {
  document.getElementById('sc-modal').classList.remove('active');
}

function openCommentsMenu() {
  document.getElementById('sc-comments-modal').classList.add('active');
}

function closeCommentsMenu() {
  document.getElementById('sc-comments-modal').classList.remove('active');
}