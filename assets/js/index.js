const openWindow = document.querySelectorAll('.open-window')
const menu = document.querySelector('#mobile-menu')
for (let index = 0; index < openWindow.length; index++) {
  openWindow[index].addEventListener('click', () => {
    menu.classList.toggle('xl:translate-x-full')
  })
}




// modals 


  const triggers = document.querySelectorAll('.open-window')
  const blur = document.querySelector('#modals')
  const modalForm = document.querySelector('.modal-form')

  for (let i = 0; i<triggers.length;i++) {
    triggers[i].addEventListener('click', () => {
      blur.classList.toggle('opacity-0')
      blur.classList.toggle('pointer-events-none')
      blur.classList.toggle('invisible')
      modalForm.classList.toggle('scale-75')
      console.log('test')
    })
  }
  modalForm.addEventListener('click', e => {
    e.stopPropagation()
  })

