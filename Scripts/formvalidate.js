//const name = document.getElementById()
function formValidate(){  
    let firstPassword=document.f1.password.value;  
    let secondPassword=document.f1.retype-password.value;  
  
if(firstPassword==secondPassword){  
    return true;  
    }  
    else{  
        alert("password must be same!");  
    return false;  
    }  
}