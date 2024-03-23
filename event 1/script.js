function openTab(evt, tabName) {
    var i, tabContent;
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
  
    var tabs = document.getElementsByClassName("tab");
    for (i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove("active");
    }
    evt.currentTarget.classList.add("active");
  }
  
  // Open the first tab by default
  document.getElementById("schedule").style.display = "block";
  document.getElementsByClassName("tab")[0].classList.add("active");
  