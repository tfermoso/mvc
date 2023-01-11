window.onload = function () {
    let formulario = document.getElementById("registerform");
    formulario.onsubmit = function (e) {
        let pass = document.getElementById("password").value;
        let repass = document.getElementById("repassword").value;
        if (pass == repass) {
            
        } else {
            e.preventDefault();
            alert("Las contraseñas no coinciden");
        }
    }
}