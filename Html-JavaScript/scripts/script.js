function actionButton(){
    console.log("My action");
    alert("Action Button");
    console.log("Post Action");
}

//alert("Loading")
console.log("Loading JavaScript");
console.log(Date());
var elementsP=document.getElementsByTagName("p");
console.log("Selector por elemento =>", elementsP);
console.log("Selector por elemento =>", elementsP[0]);
console.log("Selector por elemento =>", elementsP[1]);


var elementsDivs = document.getElementsByTagName("div");

console.log("Selector por elemento =>", elementsDivs);
console.log("Selector por elemento =>", elementsDivs[0]);

//Selector por Id

var elementForId=document.getElementById("section_1");
console.log("Selector por Id =>", elementForId );

var elementoForId = document.getElementById('div_1');
console.log("Selector por Id =>",elementForId);

var elementoForId = document.getElementById('p_1');
elementForId.innerHTML="Jossie";
console.log("Selector por Id =>",elementForId);

//Selector por clase

var elementForClass = document.getElementsByClassName("elementForId");
console.log*("Selector por class =>",elementForClass);

console.log(elementForClass[0]);
console.log(elementForClass[1]);
console.log(elementForClass[2]);

var elementForClass = document.getElementsByClassName("inputContainer");
console.log*("Selector por class =>",elementForClass);

var elementForClass = document.getElementsByClassName("section");
console.log*("Selector por class =>",elementForClass);

elementForClass[1].innerHTML="ejemplo";



//import data from './information.json';

// var data={"description":"Mi descripción","address":"Calle Falsa","date":1,}
// console.log(data);


// const a = "abc";

// if(a == "abc"){
//     var elementsP=document.getElementsByTagName('p');
//     elementsP[0].innerHTML="TEXT CHANGE"
// }

//elementsP[0].innerHTML="Change"



