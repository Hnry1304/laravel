// import './bootstrap';

let menu = document.getElementById('menu');
let menuOptions = document.getElementById('menuOptions');
let hiddenOptions = document.querySelectorAll('.hidden-options');

let playera = document.querySelectorAll(".shirt");
const enableShirtOption = document.getElementById('playera_sudadera');

let otrosProducto = document.querySelectorAll(".others");

for (let i = 0; i < hiddenOptions.length; i++) {
  if(menuOptions.classList.contains('hidden')){
    hiddenOptions[i].classList.toggle('hidden-options');
  }
}

//menu interactivo
menu.addEventListener('click', ()=>{
  menuOptions.classList.toggle('hidden');
  for (let i = 0; i < hiddenOptions.length; i++) {
    if(menuOptions.classList.contains('hidden')){
      hiddenOptions[i].classList.toggle('hidden-options');
    }else{
      hiddenOptions[i].classList.add('hidden-options');
    }
  }
});


for (let i = 0; i < playera.length; i++) {
  
  if(playera[i].checked){
    if(enableShirtOption.classList.contains('hidden')){
      enableShirtOption.classList.toggle('hidden');
    }else{
      console.log('desactivado');
    }
  }
}


for(let i= 0; i < playera.length; i++){
  playera[i].addEventListener('click', () =>{
    
    if(enableShirtOption.classList.contains('hidden')){
      enableShirtOption.classList.toggle('hidden');
    }
  });
}

for(let i= 0; i < otrosProducto.length; i++){
  otrosProducto[i].addEventListener('click', () =>{
    
    if(!enableShirtOption.classList.contains('hidden')){
      enableShirtOption.classList.toggle('hidden');  
    }
  });
}
