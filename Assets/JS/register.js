window.onload=function(){
let formulario=$("#registerForm");
formulario.submit((e)=>{
        if($("#password").val()!=$($repassword).val()){
            e.preventDefault();
            alert("Las contraseñas son distintas");
        }
    })
}
    /*
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
    }*/