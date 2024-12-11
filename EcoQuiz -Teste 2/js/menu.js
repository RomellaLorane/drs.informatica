function toggleMenu() {
  const menu = document.getElementById('menu');
  menu.classList.toggle('active');
}

document.addEventListener('click', function(event) {
  const menu = document.getElementById('menu');
  const menuButton = document.querySelector('.menu-toggle');

  if (!menu.contains(event.target) && !menuButton.contains(event.target)) {
    menu.classList.remove('active');
  }
});