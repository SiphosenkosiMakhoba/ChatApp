const passwordField = document.getElementById("password");
const hideShowIcon = document.getElementsByClassName("fa-eye");
console.log(9);
hideShowIcon[0].onclick = ()=> {
    if(passwordField.type === "password"){
        hideShowIcon[0].classList.add("active");
        passwordField.type = "text";
        
    }else{
        hideShowIcon[0].classList.add("active");
        passwordField.type = "text";
        
    }
    
}

hideShowIcon[1].onclick = ()=> {
    if(passwordField.type === "password"){
        hideShowIcon[1].classList.add("active");
        passwordField.type = "text";
        
    }else{
        hideShowIcon[1].classList.add("active");
        passwordField.type = "text";
        
    }
    
}