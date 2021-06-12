var iniciarBoton = document.querySelector(".collapseUno");
var registrarseBoton = document.querySelector(".collapseDos")
var registrarseBotonLogin = document.querySelector(".collapseDosA")
var contactoBoton = document.querySelector(".collapseTres")
var quienesBoton = document.querySelector(".collapseCuatro")
var registroDiv = document.querySelector(".registro")
var iniciarSesionDiv = document.querySelector(".iniciar")
var quienesSomosDiv = document.querySelector(".quienesSomos")
var contactoFormDiv = document.querySelector(".contacto")



iniciarBoton.addEventListener("click",(e)=>{
    registroDiv.style.display='none';
    quienesSomosDiv.style.display='none';
    iniciarSesionDiv.style.display='block'
    contactoFormDiv.style.display='none'
});
registrarseBotonLogin.addEventListener("click",(e)=>{
    registroDiv.style.display='block';
    quienesSomosDiv.style.display='none';
    iniciarSesionDiv.style.display='none'
    contactoFormDiv.style.display='none'
});

registrarseBoton.addEventListener("click",(e)=>{
    registroDiv.style.display='block';
    quienesSomosDiv.style.display='none';
    iniciarSesionDiv.style.display='none'
    contactoFormDiv.style.display='none'
})
contactoBoton.addEventListener("click",(e)=>{
    registroDiv.style.display='none';
    quienesSomosDiv.style.display='none';
    iniciarSesionDiv.style.display='none'
    contactoFormDiv.style.display='block'
});

quienesBoton.addEventListener("click",(e)=>{
    registroDiv.style.display='none';
    quienesSomosDiv.style.display='block';
    iniciarSesionDiv.style.display='none'
    contactoFormDiv.style.display='none'
});