const passwordField = document.querySelector(".form .password input[type='password']"),
repasswordField = document.querySelector(".form .repassword input[type='password']"),
toggleBtn1 = document.querySelector(".form .password i"),
toggleBtn2 = document.querySelector(".form .repassword i");

toggleBtn1.onclick = ()=>{
    if(passwordField.type == "password")
    {
        passwordField.type = "text";
        toggleBtn1.classList.add("active");
    }
    else
    {
        passwordField.type = "password";
        toggleBtn1.classList.remove("active");
    }
}

toggleBtn2.onclick = ()=>{
    if(repasswordField.type == "password")
    {
        repasswordField.type = "text";
        toggleBtn2.classList.add("active");
    }
    else
    {
        repasswordField.type = "password";
        toggleBtn2.classList.remove("active");
    }
}