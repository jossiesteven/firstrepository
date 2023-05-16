console.log("Loading JavaScript");

const myAction = ()=>{
    alert("Fullstack 1");
    let myData=document.getElementsByTagName('p');
    myData[0].style.backgroundColor="blue";
}

const myAction1 = ()=>{
    alert("Fullstack 2");
}

const myAction2 = ()=>{
    alert("Fullstack 3");
}

const myActionP = ()=>{
    console.log("Acción Párrafo");

    let myP = document.getElementById("descripcion");
    myP.innerHTML = "Este campo describe el párrafo"; 

    let myData = document.getElementsByTagName('p');
    myData[0].style.backgroundColor = "red";
}

const changeData = ()=>{
    console.log("Acción cambio Input");
    let myInput = document.getElementById("myInputData");
    myInput.innerText = "Cambio";
    /*let myInputData = document.getElementById("myInputData");
    myInputData.innerText = "Cambio";*/

    myInput.value = "Cambio"
}

