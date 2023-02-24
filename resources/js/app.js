// import './bootstrap';

let playera = document.querySelectorAll(".shirt");
const enableShirtOption = document.getElementById('playera_sudadera');

let otrosProducto = document.querySelectorAll(".others");


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
/*
playera.addEventListener('click', ()=>{
  enableShirtOption.classList.toggle('hidden');

});

*/