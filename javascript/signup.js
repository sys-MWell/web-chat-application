// JS for signup page - index.php
// Import class details
import {AccountDetails} from "./classes/user-class";

// Collects data from form entries - index.php
const continueBtn = form.querySelector(".button input"),
firstname = document.getElementsByName('fname'),
lastname = document.getElementsByName('lname'),
email = document.getElementsByName('email'),
dob = document.getElementsByName('dob'),
password =  document.getElementsByName('password'),
reEnterPassword = document.getElementsByName('repassword'),
errorText = form.querySelector(".error-txt");

//preventing form from submitting
form.onsubmit = (e)=>{
    e.preventDefault(); 
}

// If signup button has been clicked
continueBtn.onclick = ()=>{
  // Class declaration (https://bobbyhadz.com/blog/javascript-import-class-from-another-file)
    const account = new AccountDetails(firstname, lastname, email, dob, password, reEnterPassword, null)

    // start Ajex - client-side connectivity - retrieve data from a server asynchronously
    let xhr = new XMLHttpRequest(); // Creating XML object
    // Connect to psignup_config.php file (server)
    xhr.open("POST", "php/signup_config.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
              let data = xhr.response;
              // If data successfully submitted (to database, INSERT DATA query successful)
              if(data == "success")
              {
                // Redirect user to users.php
                location.href = "users.php";
              }
              else
              {
                // Display appropriate error message in form
                errorText.textContent = data;
                errorText.style.display = "block";
              }
            }
        }
    }
    // We have to send the form data through ajax to php
    let formData = new FormData(form); // New formData object
    xhr.send(form); // Send form data to php
}
