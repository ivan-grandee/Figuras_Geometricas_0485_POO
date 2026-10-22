function figulaSelec() {
    let figura = document.getElementById("figura");
    let error = document.getElementById("error-figura");

    if (figura.value === "") {
        figura.style.border = "2px solid red";
        error.textContent = "Debes seleccionar una figura para continuar";
        error.style.color="red";
        return false;
    }

    figura.style.border = "2px solid green";
    error.textContent = "";
    return true;
}

document.getElementById("formFigura").onmouseleave = figulaSelec;