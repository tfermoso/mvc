window.onload=function(){
    let formulario=document.getElementById("registerForm");
    formulario.onsubmit=function(e){
        let pass=document.getElementById("password").value;
        let repass=document.getElementById("repassword").value;
        if (pass==repass) {
            //envio el formulario
        }else{
            e.preventDefault();
            alert("las contraseñas son distintas");
        }
    }
}