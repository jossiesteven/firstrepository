console.log("Loading JavaScript");


var firstArray = [1, "Information", Date(), "Viernes"];

console.log(firstArray);
console.log(firstArray.length);

console.log(firstArray[0]);
console.log(firstArray[1]);
console.log(firstArray[2]);
console.log(firstArray[3]);

//Recorrido Arreglo
for(let i=0; i < firstArray.length; i++){
    console.log(firstArray[i]);
}

console.log("Recorrido Arreglo =>");
firstArray.forEach((item)=>{console.log(item)})

firstArray.map((item)=>{console.log(item)})

// Object

var firstObject = {
    a:"viernes",
    information:"7:50 am",
    dolar:4550,
    currentDate: {
        dia:12,
        mes: "Mayo",
        annio:2023
    }
}

console.log(firstObject);

//Recorrido Objeto

console.log("Recorrido Objeto");

for(let item in firstObject){
    console.log("key =>",item);
    console.log("value =>", firstObject[item]);

    if(typeof firstObject[item]=="object"){
        console.log("Is object");
        console.log("Recorrido Subobjeto");
        let secondObject = firstObject[item];

        for(let subitem in secondObject){
            console.log("key =>",subitem);
            console.log("value =>", secondObject[subitem]);
        }
    }
}

//Recorrido Objeto

console.log("Recorrido Objeto 1");
Object.keys(firstObject).forEach((item)=>{
    console.log("key =>",item);
    console.log("value =>",firstObject[item]);
});

console.log("Recorrido Objeto 2");

    Object.entries(firstObject).forEach(function([key,value]){

    console.log(key, value);
});

    Object.entries(firstObject).forEach(function(item){
        console.log(item);
    })

    //Array / Object

    var firstArrayObject=[
        {
    a:"viernes",
    information:"7:50 pm",
    dolar:4550,
    currentDate:{
        dia:12,
        mes:"Mayo",
        annio:2023
        }
    },
    
    {
        name:"Juan",
        lastname:"Perez",
        id:10262525242
    }

]

    console.log("Array Object");
    console.log(firstArrayObject)
    
    console.log(firstArrayObject)

       
    
let data=1;
console.log(typeof data);

data="FullStack";
console.log(typeof data);

console.log("Recorriendo Arreglo")

firstArrayObject.map((item)=>{

    console.log(typeof item, item);
    console.log("Recorriendo Objeto");

Object.entries(item).forEach(([key,value])=>{
        console.log(key, value);
    })

})

console.log(firstArrayObject[0]);
console.log(firstArrayObject[0].dolar);
let dolar=firstArrayObject[0].dolar;
console.log(dolar+1);

console.log(firstObject);
let day = firstObject.a;
console.log(day);

