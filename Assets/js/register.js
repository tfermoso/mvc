window.onload=function(){
    let formulario=document.getElementById("registerform");
    formulario.onsubmit=function(e){
        
        let pass=document.getElementById("password").Value;
        let repass=document.getElementById("repassword").Value;

        if(pass=repass){

        }else{
            e.preventDefault();
            alert("las contraseñas son distintas");
        }
    }
}