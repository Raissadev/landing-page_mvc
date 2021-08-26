feather.replace();

const menuMobile = document.getElementById('menuMobile');
const menuMobileClose = document.getElementById('menuMobileClose');
const asideMenu = document.getElementById('myMenu');


 
if (window.matchMedia("(max-width: 780px)").matches) {
asideMenu.style.display = 'none';
} else {
asideMenu.style.display = 'flex';
}
menuMobile.addEventListener('click', (e)=>{
    asideMenu.style.display = 'block';
    menuMobile.style.display = 'none';
    menuMobileClose.style.display = 'block';
});

menuMobileClose.addEventListener('click', (e)=>{
    asideMenu.style.display = 'none';
    menuMobile.style.display = 'block';
    menuMobileClose.style.display = 'none';
});

