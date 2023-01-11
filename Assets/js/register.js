/* window.onload=function(){
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
    */
    let formulario=$("#registerForm");
    formulario.submit((e)=>
    {
        if($("#password").val()!=$("#repassword").val())
    {
            e.preventDefault();
            alert("Las contraseñas son distintas");
    }
    }

