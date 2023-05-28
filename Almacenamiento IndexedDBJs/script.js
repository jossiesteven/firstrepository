console.log("Loading JavaScript");

function processForm (event){
    //Detiene la recarga de la página cuando se hace el envío
    event.preventDefault();
    
    console.log("Envío Formulario");
    //form.reset();
    
    /*var lastname=document.getElementById("name");
    lastname=lastname.value;

    console.log("lastname=>", lastname);*/

    var nameData=document.getElementById("name").value;
    var ageData=document.getElementById("age").value;

    var idRandom= Array.from({length:5}, ()=>Math.random().toString(36).charAt(2)).join('');

    //console.log(idRandom);

    var user={
        id: idRandom,
        name: nameData,
        age: ageData,
    }
    console.log(user);

    //Crear o Abrir Base de Datos
    var dataBase=window.indexedDB.open("myDataBase",3);

    //Ejecución Correcta
    dataBase.onsuccess=(event)=>{
        
        console.log("Base de Datos Creada o Abierta Correctamente!!!");
        let db=dataBase.result; 
        console.log(db);
        var instanceTransaction=db.transaction('users','readwrite').objectStore('users');

        //Guardar Datos
        
        var saveData=instanceTransaction.add(user);
        alert("Datos Guardados");
        form.reset();

        let myP=document.getElementById("Data");
        var dataInfo=instanceTransaction.getAll();
        console.log(dataInfo);

        dataInfo.onsuccess=(event)=>{
            let data=dataInfo.result;
            console.log(data);

            var infoStructure="";
            data.map((element)=>{
                infoStructure+="Nombre: "+element.name + " ";
                infoStructure+="Edad: "+element.age + " ";
                infoStructure+="<br>";
            });

            myP.innerHTML=infoStructure;
        }
        

        /*var createObject=db.createObjectStore('users',{keyPath:id});

        var eventInstance=db.transaction(['users'], 'readwrite');
        var objectStore=eventInstance.objectStore('users')

        var addData=objectStore.add(user);
        console.log("Finalizar Ejecución!!!")*/        
    }

    //Ejecución al iniciar o crear base de datos

    dataBase.onupgradeneeded=(event)=>{
        console.log("Creación Objects");
        let db=event.target.result;
        var createObject=db.createObjectStore("users", {keyPath: 'id'});
    }
    //Ejecución Error
    dataBase.onerror=(event)=>{
        console.log("Error de Creación o Error en Abrir Base de Datos!!!");

    }

}


var form=document.getElementById("myForm");

form.addEventListener('submit', processForm);


const loadBody=(event)=>{
    var dataBase=window.indexedDB.open("myDataBase",3);

    //Ejecución Correcta
    dataBase.onsuccess=(event)=>{
        
        console.log("Base de Datos Creada o Abierta Correctamente!!!");
        let db=dataBase.result; 
        console.log(db);
        var instanceTransaction=db.transaction('users','readwrite').objectStore('users');
        
        let myP=document.getElementById("Data");
        var dataInfo=instanceTransaction.getAll();
        console.log(dataInfo);

        dataInfo.onsuccess=(event)=>{
            let data=dataInfo.result;
            console.log("Información almacenada=>", data);

            var infoStructure="";
            data.map((element)=>{
                infoStructure+="Nombre: "+element.name + " ";
                infoStructure+="Edad: "+element.age + " ";
                infoStructure+="<br>";
            });

            myP.innerHTML=infoStructure;
        }
        

        /*var createObject=db.createObjectStore('users',{keyPath:id});

        var eventInstance=db.transaction(['users'], 'readwrite');
        var objectStore=eventInstance.objectStore('users')

        var addData=objectStore.add(user);
        console.log("Finalizar Ejecución!!!")*/        
    }

    //Ejecución al iniciar o crear base de datos

    dataBase.onupgradeneeded=(event)=>{
        console.log("Creación Objects");
        let db=event.target.result;
        var createObject=db.createObjectStore("users", {keyPath: 'id'});
    }
    //Ejecución Error
    dataBase.onerror=(event)=>{
        console.log("Error de Creación o Error en Abrir Base de Datos!!!");

    }
}



/*
const processForm = (event)=>{

    event.preventDefault();
    
    console.log("Envío Formulario");
}*/


