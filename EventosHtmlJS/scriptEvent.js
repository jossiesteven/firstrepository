console.log("Loading Javascript");

/*const changeData=()=>{
    console.log("Acción Evento");
}*/

let MyButton = document.getElementById("myButtonData");

MyButton.addEventListener("dblclick",()=>{
    console.log("Ejecutando evento click");
    let myP=document.getElementsByClassName("info");

    console.log(typeof myP, myP)
    Object.entries(myP).forEach(([key,value])=>{
        value.style.fontSize="15px";
        value.style.backgroundColor="blue";
        value.style.width="50%";
    })

});

    MyButton.addEventListener("click",()=>{
        console.log("Ejecutando evento click");
        let myP=document.getElementsByClassName("info");
    
        console.log(typeof myP, myP)
        Object.entries(myP).forEach(([key,value])=>{
            value.style.fontSize="15px";
            value.style.backgroundColor="red";
            value.style.width="80%";
        })
    
    //myP[0].style.fontSize="50px";

});


MyButton.addEventListener("mouseover",function(){
    console.log("Ejecutando Evento de Mouseover");
    
    //console.log(myP[0]);

    let myP=document.getElementsByClassName("info");
    //myP[0].style.backgroundColor="red";

});


//MyButton.addEventListener("click", changeData);

let myData=document.getElementById("data");

const changeData=()=>{
    alert("Acción Evento");
    console.log("Acción Evento");
}

myData.addEventListener("click",changeData);