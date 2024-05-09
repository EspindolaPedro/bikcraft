const btnMobile = document.getElementById("btn-mobile");

function toggleMenu(e) {
    if(e.type === 'touchstart')  e.preventDefault();
    const nav = document.getElementById("nav");
    nav.classList.toggle('active');
    e.currentTarget.setAttribute('aria-expanded', 'true'); 
}
btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);