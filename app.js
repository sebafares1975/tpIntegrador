 // EJEMPLO FUNCION CALLBACK
function  primero(segundo){
    setTimeout(function(){
        console.log("PRIMERO");
        segundo();
    }, 3000);
  
}

function  segundo(){
    console.log("SEGUNDO");
}

primero(segundo);
//segundo();

 //  elementos en variables 

 var cantidad = document.getElementById('cantidad')

 var categoria = document.getElementById('categoria')