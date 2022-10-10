function verificar(){
    papa1 = document.getElementById('papa').value;

    if(papa1< 0 || papa1 > 5){
        alert("El valor del papa es invalido");
    }
}