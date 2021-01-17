/*************************************** frist-function **************************************/
function sum(){
	"use strict"
	var num1=document.getElementById("input1").value,
	    num2=document.getElementById("input2").value,
		sum=document.getElementById("answer"),
	    a,
		b;
	a=Number(num1);
	b=Number(num2);
	
	if(isNaN(a) || isNaN(b)){
		alert("Focus on what you write!");
	}
	else
	{
		sum.value=a+b;
	}
};       
/*************************************** part 4 **************************************/
function makarr(ind){
    var users = new Array(),
        ones = ["one","second"];

        var arr=["one","second"];

    for (let index = 0; index < ind; index++) {
        users[index] = prompt('type element number ' + (index + 1));
    }

    for (let index = 0; index < ind; index++) {
        ones[index] = index + 1;
    }

    for (let index = 0; index < users.length; index++) {
        //document.getElementById("user").innerHTML += 
        //"<div> " + ones[index + 1] + " name is : " + users[index] + "</div>"

        document.getElementById("div6").innerHTML += ones[index] + " name is: " + users[index] + "<br>";
    }
    
}
