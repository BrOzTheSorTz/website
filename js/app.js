let btnMenu = document.querySelector('.btn-menu');
let container = document.querySelector('.lists');
let containerPulsar = document.querySelector('.list-container ul');
let menu = document.querySelector('.list-container');
let containerMenu = document.querySelector('.menu');
let activador = true;


// Menu de navegacion

btnMenu.addEventListener('click', () => {

    document.querySelector('.btn-menu i').classList.toggle('fa-times');
    if(activador){

        menu.style.left="0";
        menu.style.transition= "0.5s";

        activador=false;

    }else{
        
        menu.style.left="-100%";
        menu.style.transition= "0.5s";

        activador=true;

   
            
    }
    
        
    containerPulsar.addEventListener('click', () =>{
        
        menu.style.left="-100%";
        menu.style.transition= "0.5s";
        document.querySelector('.btn-menu i').classList.remove('fa-times');

        activador = true;

    }) 
});









// Intercalar clase con active
let enlaces = document.querySelectorAll('.lists li a');

enlaces.forEach((element) => {

    element.addEventListener('click',(evento) => {

        enlaces.forEach((link) =>{
            link.classList.remove('activo');
        });
        event.target.classList.add('activo');

    })

});


// Efectos Scroll

let prevScrollPos = window.pageYOffset;
let goTop = document.querySelector('.go-top')

window.onscroll = () => {
    let currenScrollPos = window.pageYOffset;
    //Mostrar y ocultar menu
    if(prevScrollPos > currenScrollPos){
        containerMenu.style.top = "0";
        containerMenu.style.transition= "0.5s";
    }else{
        containerMenu.style.top = "-60px";
        containerMenu.style.transition = "0.5s";
    }
    prevScrollPos = currenScrollPos

    //Mostrar y ocultar scroll Estilos

    let arriba = window.pageYOffset;
    if(arriba <= 600){
        containerMenu.style.borderBottom = "none";

        goTop.style.right = "-100%";

    }else{
        containerMenu.style.borderBottom= "2.5px solid #fa1616";

        goTop.style.right = "0px";
        goTop.style.transition = "0.5s";
    }
}

goTop.addEventListener('click', ( ) =>{

    document.body.scrollTop = 0;
    document.documentElement.scrollTop=0;

})

let verAbajo = document.querySelector('#abajo');

verAbajo.addEventListener('click', () =>{
    document.body.scrollTop= 600;
    document.documentElement.scrollTop = 600;
})