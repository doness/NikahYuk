$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

function openNav() {
    document.getElementById("mySidenav").style.width = "310px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}