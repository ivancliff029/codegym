function customer(evt, action) {
    var i, tabcontent, tablinks;

    //get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].getElementsByClassName.display = "none";
    }

    // get all elements with class="tablinks" and remove the class "active"
    tablink = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }

    document.getElementById(action).style.display = "block";
    evt.currentTarget.className += "active";
}
