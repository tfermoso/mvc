window.onload = function () {
    // JS
    let form = document.getElementById("registerForm");
    form.onsubmit = function (e) {
        let passw = document.getElementById("password").value;
        let cpassw = document.getElementById("c-password").value;
        if (passw != cpassw) {
            e.preventDefault();
            document.getElementById("error").innerHTML="Password not equal";
        }
    }

    // JQuery
    /*let formulario = $("registerForm");
    formulario.submit((e) => {
        alert($("#password").val(), $("#c-password").val());
        if ($("#password").val() != $("#c-password").val()) {
            e.preventDefault();
            alert("Las contraseñas son distintas");
        }
    })*/
}