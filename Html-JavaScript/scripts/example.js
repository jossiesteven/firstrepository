console.log("loading script");

function actionButton(){
    
    console.log("Ejecutando Botón");
    //Selector por elemento ID
    var myP=document.getElementsByTagName('p');
    console.log*(myP);

    
    myP[0].style["background-color"]="red";
    myP[1].innerHTML=Date();

    //Selector por elemento ID
    var myNewValue = document.getElementById('input_1');

    //Selector por elemento ID
    var myIdp = document.getElementById("p_3");

    myIdp.innerHTML = myNewValue.value;

    /*if(myIdp.style.display=="none"){
        myIdp.style.display=="block";
        myIdp.style.textAlign=="justify";

        myIdp.innerHTML = myNewValue.value;
    }
    else{
        myIdp.style.display="none";
    }*/
    
    
    var myInput = document.getElementById('input_1');
    console.log("Valor input", myInput.value);

    //Selector por elemento ID
    var myInput = document.getElementById('input_1');
    console.log(myInput);

    myInput.innerHTML = "Default Value";
    myInput.value = "Default Value";

    //Selector por elemento Class
    var mylist = document.getElementsByClassName('list');
    console.log(mylist);

    mylist[0].innerHTML = "Information Change!!!";
    mylist[1].innerHTML = "Information Change!!!";
    mylist[2].innerHTML = "Information Change!!!";
}
