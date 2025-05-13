const navbar = document.querySelector('#navbar');
const triggerHeight = 400;

window.addEventListener('scroll', () => {
    if (window.scrollY > triggerHeight) {
        navbar.style.display = 'block';
    } else {
        navbar.style.display = 'none';
    }
});