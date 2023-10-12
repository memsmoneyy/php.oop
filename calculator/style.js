function calculate(operation){
    var number1= parseFloat(document.getElementById("number1").value);


var number2= parseFloat(document.getElementById("number2").value);


var result;

switch(operation){
    case'+':
    result= number1 + number2;
    break;

    case'-':
    result = number1 - number2;
    break;

    case'*':
    result = number1 * number2;
    break;

    case'/':
    result = number1 / number2;
    break;

}
document.getElementById("result").value= "result:" + result;
}
 
