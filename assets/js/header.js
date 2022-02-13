const headerMenu = document.querySelector('.header-menu');
const headerNav = document.querySelector('.p-nav');

headerMenu.addEventListener('click', function() {
	this.classList.toggle('active');
	headerNav.classList.toggle('panelactive');
})