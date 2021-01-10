/************************ function for addition ***************************/
function addition()
{
    var v1 =parseInt(document.getElementById("num1").value);
    var v2 =parseInt(document.getElementById("num2").value);
    var answer = document.getElementById("answer");
    answer.value = v1 + v2;
}
/************************ function for showing photo **********************/
function img() {
    var number = document.getElementById("numbers").value;
	
    switch (number) {
        case "1":
            document.getElementById("div").innerHTML = '<img src="images/11.jpeg" />';
            break;
        case '2':
            document.getElementById("div").innerHTML = '<img src="images/22.jpeg" />';
            break;
        case '3':
            document.getElementById("div").innerHTML = '<img src="images/turkia.jpeg" />';
            break;
        case '4':
            document.getElementById("div").innerHTML = '<img src="images/33.jpeg" />';
            break;
        case '5':
            document.getElementById("div").innerHTML = '<img src="images/44.jpeg" />';
            break;
		case '6':
            document.getElementById("div").innerHTML = '<img src="images/55.jpeg" />';
            break;
        default: 
            document.getElementById("div").innerHTML = "not found!";
            break;
    
        }

}
