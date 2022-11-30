
  
    function openCity(evt1, cityName1) {
        var i, tabcontent1, tablinks1;
        tabcontent1 = document.getElementsByClassName("tabcontent1");
        for (i = 0; i < tabcontent1.length; i++) {
            tabcontent1[i].style.display = "none";
        }
        tablinks1 = document.getElementsByClassName("tablinks1");
        for (i = 0; i < tablinks1.length; i++) {
            tablinks1[i].className = tablinks1[i].className.replace(" active", "");
        }
        document.getElementById(cityName1).style.display = "block";
        evt1.currentTarget.className += " active";
    }
