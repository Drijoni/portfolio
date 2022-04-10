/* For file input*/
function changeText() {
    document.getElementById('chooseFile').innerHTML = "File uploaded"
}

const toggleBtn = document.getElementById("toggleMenu");
const mySidenav = document.getElementById("sidebar");
const openT = document.getElementById("open");
const closeT = document.getElementById("close");


var flag = true;
const flagMenu = () => {
    if (flag) {
        openNav();
    }
    else {
        closeNav();
    }
    flag = !flag;
}

function openNav() {
    mySidenav.style.width = "250px";
    closeT.style.display = "block";
    openT.style.display = "none";
}

function closeNav() {
    mySidenav.style.width = "0";
    closeT.style.display = "none";
    openT.style.display = "block";
}

toggleBtn.onclick = () => {
    flagMenu();

}

