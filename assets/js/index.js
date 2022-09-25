const openWindow = document.querySelectorAll('.open-window')
const menu = document.querySelector('#mobile-menu')
for (let index = 0; index < openWindow.length; index++) {
  openWindow[index].addEventListener('click', () => {
    menu.classList.toggle('xl:translate-x-full')
  })
}