const navMenu = document.getElementById('nav-menu'),
togglemenu = document.getElementById('toggle-menu'),
closemenu = document.getElementById('close-menu')

togglemenu.addEventListener('click',() =>{
    navMenu.classList.toggle('show') 
})
closemenu.addEventListener('click',() =>{
    navMenu.classList.remove('show') 
})