// Asignamos los eventos solo a los campos que existan en la página
if (document.getElementById("lado1")) {
    document.getElementById("lado1").onblur = validaLado1;
}
if (document.getElementById("lado2")) {
    document.getElementById("lado2").onblur = validaLado2;
}
if (document.getElementById("lado3")) {
    document.getElementById("lado3").onblur = validaLado3;
}

document.getElementById("formDatos").onsubmit = enviaFormulario;




// Cada lado: obligatorio, numérico y mayor que 0
function validaLado1(){
    let input = document.getElementById("lado1");
    let valor = input.value.trim();
    let error = document.getElementById("error-lado1");

    if(valor === ""){
        input.style.border = "2px solid red";
        error.textContent = "Este campo es obligatorio";
        error.style.color="red";
        return false;
    }else if(isNaN(valor)){
        input.style.border = "2px solid red";
        error.textContent = "Debe ser un número";
        error.style.color="red";
        return false;
    }else if(Number(valor) <= 0){
        input.style.border = "2px solid red";
        error.textContent = "Debe ser mayor que 0";
        error.style.color="red";
        return false;
    }else{
        input.style.border = "2px solid green";
        error.textContent = "";
        return true;
    }
}



function validaLado2(){
    let input = document.getElementById("lado2");
    let valor = input.value.trim();
    let error = document.getElementById("error-lado2");

    if(valor === ""){
        input.style.border = "2px solid red";
        error.textContent = "Este campo es obligatorio";
        error.style.color="red";
        return false;
    }else if(isNaN(valor)){
        input.style.border = "2px solid red";
        error.textContent = "Debe ser un número";
        error.style.color="red";
        return false;
    }else if(Number(valor) <= 0){
        input.style.border = "2px solid red";
        error.textContent = "Debe ser mayor que 0";
        error.style.color="red";
        return false;
    }else{
        input.style.border = "2px solid green";
        error.textContent = "";
        return true;
    }
}



function validaLado3(){
    let input = document.getElementById("lado3");
    let valor = input.value.trim();
    let error = document.getElementById("error-lado3");

    if(valor === ""){
        input.style.border = "2px solid red";
        error.textContent = "Este campo es obligatorio";
        error.style.color="red";
        return false;
    }else if(isNaN(valor)){
        input.style.border = "2px solid red";
        error.textContent = "Debe ser un número";
        error.style.color="red";
        return false;
    }else if(Number(valor) <= 0){
        input.style.border = "2px solid red";
        error.textContent = "Debe ser mayor que 0";
        error.style.color="red";
        return false;
    }else{
        input.style.border = "2px solid green";
        error.textContent = "";
        return true;
    }
}



// Cuadrado y círculo
function validaCuadradoCirculo(){
    return validaLado1();
}

// Rectángulo
function validaRectangulo(){
    let ok1 = validaLado1();
    let ok2 = validaLado2();
    return ok1 && ok2;
}

// Triángulo
function validaTriangulo(){
    let ok1 = validaLado1();
    let ok2 = validaLado2();
    let ok3 = validaLado3();

    if(!(ok1 && ok2 && ok3)){
        return false;
    }

    let a = Number(document.getElementById("lado1").value);
    let b = Number(document.getElementById("lado2").value);
    let c = Number(document.getElementById("lado3").value);
    let error = document.getElementById("error-lado3");

    if(a >= b + c || b >= a + c || c >= a + b){
        error.textContent = "Los lados no forman un triángulo válido";
        error.style.color="red";
        return false;
    }else{
        return true;
    }
}



// Al enviar: elegimos la validación según los campos que existan en la página
function enviaFormulario(){
    if(document.getElementById("lado3")){
        return validaTriangulo();
    }else if(document.getElementById("lado2")){
        return validaRectangulo();
    }else{
        return validaCuadradoCirculo();
    }
}