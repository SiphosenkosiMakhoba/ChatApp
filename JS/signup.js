const form = document.querySelector(".sign-up form");
const continueButton = form.querySelector(".button input");
const errorText = form.querySelector(".error-field");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueButton.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("post","includes/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data= xhr.response;
                if(data === "success"){
                    location.href ="user.php";
                }else{
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
