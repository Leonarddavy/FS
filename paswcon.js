function confirm(){
    
    var Password= document.getElementById("password");
    var ConfirmPassword= document.getElementById("c_password");
   // var password= Password.trim();
    //var confirmpassword= ConfirmPassword.trim();  
    
    
    if(Password.value.trim()==''||Password.value.trim()==null ||ConfirmPassword.value.trim()==''
    ||ConfirmPassword.value.trim()==null){
    alert("PlEASE ENTER THE DETAILS REQUIRED");
    return false;
    }
    else if(Password.value!==ConfirmPassword.value){
        alert("ENTER THE SAME PASSWORD");
    }
    else{
        
        return true;
    };
}