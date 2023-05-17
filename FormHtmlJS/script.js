console.log("Loading JavaScript");

/*let buttonForm = document.getElementById("formulario");

console.log(buttonForm);*/

function sendForm(){
    console.log("Envío formulario");

    let nameInfo = document.getElementById('nombre');
    let emailInfo = document.getElementById('correo');
    let valueDolarInfo = document.getElementById('dolar');

    nameInfo= nameInfo.value;
    emailInfo= emailInfo.value;
    valueDolarInfo = valueDolarInfo.value;

    let personalInfo = {
        name: nameInfo,
        email: emailInfo,
        valuePeso: valueDolarInfo * 4487.70

    }

    console.log(personalInfo);
    
    alert("Se guardo el nombre " + personalInfo.name +" y Correo: " + personalInfo.email);

    alert("Conversión dolar: "+valueDolarInfo+ " a precio peso colombiano: $ "+personalInfo.valuePeso);

    window.location.href = "https://google.com";

}

let buttonForm = document.getElementById('botonFormulario');
buttonForm.addEventListener('click', sendForm);

let buttonForm2 = document.getElementById('formulario');
buttonForm2.addEventListener('click', sendForm);

//alert ("Sé guardo el Nombre")