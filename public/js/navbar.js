const burger = document.querySelector('.burger');
const navbar = document.querySelector('.sidebar');

burger.addEventListener('click', () => {
    navbar.classList.toggle('show');
});