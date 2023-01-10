window.onload = function () {
    let formulario = document.getElementById("registerform");
    formulario.onsubmit = function (e) {
        e.preventDefault();
        let pass = document.getElementById("password").value;
        let repass = document.getElementById("repassword").value;
        if (pass == repass) {
            
        } else {
            alert("Las contraseñas no coinciden");
        }
    }
}