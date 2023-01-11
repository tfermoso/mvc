window.onload=function(){
    /*
    let formulario=document.getElementById("registerForm");
    
    formulario.onsubmit=function(e){
        
        let pass=document.getElementById("password").value;
        let repass=document.getElementById("repassword").value;
        if(pass==repass){
            //Envío el formulario
        }else{
            e.preventDefault();
            alert("Las contraseñas son distintas");
        }

    }*/
    let formulario=$("#registerForm");
    formulario.submit((e)=>{
        if($("#password").val()!=$("#repassword").val()){
            e.preventDefault();
            alert("Las contraseñas son distintas");
        }
    })
}