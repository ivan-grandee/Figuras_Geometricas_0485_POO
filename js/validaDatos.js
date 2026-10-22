// Valida un campo: obligatorio, numérico y mayor que 0
function validarNumero(id) {
    let input = document.getElementById(id);
    let error = document.getElementById("error-" + id);
    let valor = input.value.trim();
    let mensaje = "";

    if (valor === "") {
        mensaje = "Este campo es obligatorio";
    } else if (isNaN(valor)) {
        mensaje = "Debe ser un número";
    } else if (Number(valor) <= 0) {
        mensaje = "Debe ser mayor que 0";
    }

    if (mensaje !== "") {
        input.style.border = "2px solid red";
        error.textContent = mensaje;
        error.style.color = "red";
        return false;
    }

    input.style.border = "2px solid green";
    error.textContent = "";
    return true;
}

// Cuadrado y círculo
function validarLado() {
    return validarNumero("lado1");
}

// Rectángulo
function validarRectangulo() {
    let ok1 = validarNumero("lado1");
    let ok2 = validarNumero("lado2");
    return ok1 && ok2;
}

// Triángulo
function validarTriangulo() {
    let ok1 = validarNumero("lado1");
    let ok2 = validarNumero("lado2");
    let ok3 = validarNumero("lado3");

    if (!(ok1 && ok2 && ok3)) {
        return false;
    }

    let a = Number(document.getElementById("lado1").value);
    let b = Number(document.getElementById("lado2").value);
    let c = Number(document.getElementById("lado3").value);

    if (a >= b + c || b >= a + c || c >= a + b) {
        let error = document.getElementById("error-lado3");
        error.textContent = "Los lados no forman un triángulo válido";
        error.style.color = "red";
        return false;
    }
    return true;
}

// Al enviar: elegimos la validación según los campos que existan en la página
document.getElementById("formDatos").onsubmit = function () {
    if (document.getElementById("lado3")) {
        return validarTriangulo();
    } else if (document.getElementById("lado2")) {
        return validarRectangulo();
    }
    return validarLado();
};