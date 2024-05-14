function setInputError(inputElement, message){
    inputElement.classList.add("form__input--error")
    inputElement.parentElement.querySelector("form__input-error-message").textContent=message;
}

function clearInputError(inputElement){
    inputElement.classList.remove("form__input--error")
    inputElement.parentElement.querySelector("form__input-error-message").textContent="";
}
document.addEventListener("DOMContentLoaded", ()=>{
 const loginForm=document.querySelector("#login");
 const createAccountForm=document.querySelector("#createAccount");

 document.querySelector("#linkCreateAccount").addEventListener("click", e =>{
     e.preventDefault();
loginForm.classList.add("form--hidden");
createAccountForm.classList.remove("form--hidden");
 });
 document.querySelector("#linkCreateAccount").addEventListener("click", e =>{
    e.preventDefault();
    loginForm.classList.remove("form--hidden");
    createAccountForm.classList.class("form--hidden");
     });

     document.querySelectorAll(".form__input").forEach(inputElement=>{
         inputElement.addEventListener("blur", e=>{
        if(e.target.id=== "username"&& e.target.value.length>0 && e.target.value.length<5){
            setInputError(inputElement, "Username must be at least 5 characters in length");
        }
        if(e.target.id=== "password"&& e.target.value.length>0 && e.target.value.length<8){
            setInputError(inputElement, "Username must be at least 8 characters in length");
        }
         });
         inputElement.addEventListener("input", e=>{
             clearInputError(inputElement);
         });
     });
});
