console.log("Loading JavaScript");

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

    //let dataInfo = [];

    console.log(personalInfo);

//Almacenamiento Estrategia Cookies

    /*document.cookie = "name=Steven";
    document.cookie = "id=0123456789";
    document.cookie = "email=js@gmail.com";*/

    document.cookie = "name="+personalInfo.name;
    document.cookie = "email="+personalInfo.email;
    document.cookie = "valuePeso="+personalInfo.valuePeso;
    
    let cookieData=document.cookie;
    
    console.log(cookieData);
    
    //alert("Save!!!");

//Almacenamiento Estrategia Web Storage
    

    //Sessionstorage

    sessionStorage.setItem("name", personalInfo.name);
    sessionStorage.setItem("email", personalInfo.email);
    sessionStorage.setItem("valuePeso", personalInfo.valuePeso);

    sessionStorage.setItem("personalInfo",JSON.stringify(personalInfo));
    //sessionStorage.removeItem("email")

    //Localstorage 

    let saveData=localStorage.getItem("personalInformation");
    console.log("value localstorage =>", saveData);

    //if(null) => if (false)

    if(saveData){
        console.log("Data exists");
        console.log("JSON String =>",saveData);
        let data=JSON.parse(saveData);
        console.log("JSON Object =>",data);
        let newData=[...data,personalInfo];
        //console.log([...data,personalInfo,"data",123]);
        console.log(newData);
        localStorage.setItem("personalInformation",JSON.stringify(newData));

    }else{
        console.log("Data not exists");
        let dataInfo=[];
        dataInfo.push(personalInfo);
        console.log(dataInfo);
        localStorage.setItem("personalInformation",JSON.stringify(dataInfo));
        //debugger; se usa solo en modo DevOps
    }

    
    //alert("Se guardo el nombre " + personalInfo.name +" y Correo: " + personalInfo.email);

    //alert("Conversión dolar: "+valueDolarInfo+ " a precio peso colombiano: $ "+personalInfo.valuePeso);

   
}

let buttonForm = document.getElementById('buttonForm');
buttonForm.addEventListener('click', sendForm);

const clearInfo=()=>{

    console.log("Limpiando datos");

    sessionStorage.removeItem("name");
    sessionStorage.removeItem("email");
    sessionStorage.removeItem("valuePeso");
    sessionStorage.removeItem("personalInfo");

}

let buttonClear = document.getElementById("clearData");
buttonClear.addEventListener('click', clearInfo);

const viewInfo=()=>{

    console.log("Execute view");

    let information = sessionStorage.getItem("personalInfo");
    
    let p = document.getElementById("informationData");
    p.innerHTML = information;
}

let buttonView = document.getElementById("viewData");
buttonView.addEventListener('click', viewData);

const viewInfoLocal=()=>{

    console.log("Execute view local");

    let information = localStorage.getItem("personalInformation");
    console.log(information);
    let dataJSON=JSON.parse(information);
    console.log(dataJSON);

    var viewContent= '';
    dataJSON.map((item)=>{
        console.log(item);
        viewContent +=JSON.stringify(item);
        viewContent +='<br>';
    })

    console.log(viewContent);
    
    let p = document.getElementById("informationData");
    p.innerHTML = viewContent;
}

let buttonViewLocal = document.getElementById("viewDataLocal");
buttonViewLocal.addEventListener('click', viewInfoLocal);
    


