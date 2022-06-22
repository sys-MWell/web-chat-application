const passwordField = document.querySelector(".form input[type='password']"),
password = document.getElementById("repassword"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(passwordField.type == "password")
    {
        password.type = "text"
        passwordField.type = "text";
        toggleBtn.classList.add("active");
    }
    else
    {
        password.type = "password"
        passwordField.type = "password";
        toggleBtn.classList.remove("active");
    }
}