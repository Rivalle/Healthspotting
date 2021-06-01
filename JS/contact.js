window.onload = () => {
    let button = document.querySelector("#submit");
    button.addEventListener("click", ContactInfo);
};
function ContactInfo(){
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let subject = document.getElementById("subject").value;
  let message = document.getElementById("message").value;
  if (name == "" || email == "" || subject == "" || message == "" ){
    alert("Please fill in all fields");
  }
  else if(!validateEmail(email)){
    alert("You have entered an invalid email address!");
  }
  else {
    alert("Message sent. Thank you for coming in touch with us!")
    document.querySelector("#name").value = "";
    document.querySelector("#email").value = "";
    document.querySelector("#subject").value = "";
    document.querySelector("#message").value = "";
  }
}
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
