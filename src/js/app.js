const barra=document.querySelector('.mobile-menu');
const nav= document.getElementById('navegacion');
const dark_modo=document.querySelector('.dark-mode-boton');


barra.addEventListener('click',()=>{
        nav.classList.toggle('navegacion--active')
    }
)

// darl mode
dark_modo.addEventListener('click',()=>{
    // añado o quito la clase dark mode en le body
    document.body.classList.toggle('dark-mode')
})

// preferincia de modo en el sistema
const preferciaModo=window.matchMedia('(prefers-color-scheme:dark)');
if (preferciaModo.matches) {
    document.body.classList.add('dark-mode')
}else{
    document.body.classList.remove('dark-mode') 
}

// de forma Autómatica cuando cambian el modo
preferciaModo.addEventListener('change', ()=>{
    if (preferciaModo.matches) {
        document.body.classList.add('dark-mode')
    }else{
        document.body.classList.remove('dark-mode') 
    }
})




