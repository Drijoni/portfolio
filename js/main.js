function showDiscord() {
    alert("Drijon#7608");
}

/*nav*/

const toggleBtn = document.getElementById("toggleMenu");
const mySidenav = document.getElementById("mySidenav");

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


window.addEventListener('resize',() => {
    if (screen.width > 750) {
        closeNav();
        flag = true;
    }
});


/* For loader to appear */

var loader = document.getElementById('loader');

const showLoader = () => {
    setTimeout(() => {
        loader.style.display = "none";
    }, 2000);
}

