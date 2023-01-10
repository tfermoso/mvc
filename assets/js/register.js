window.onload = function () {
    let form = document.getElementById("registerForm");
    form.onsubmit = function (e) {
        let passw = document.getElementById("password").value;
        let cpassw = document.getElementById("c-password").value;
        if (passw == cpassw) {
            // Send Form
        } else {
            e.preventDefault();
            alert("Las contraseñas son distintas");
        }
    }
}