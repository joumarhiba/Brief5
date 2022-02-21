let form = document.getElementById("frml");
let ajt = document.getElementsByClassName("submit-btn");
let erreur = document.getElementById("msg");
function formValidation() {
  let email = document.getElementById("email").value;
  let pwd = document.getElementById("pwd").value;
  
  // const nameRegex = /^[a-zA-Z-\s]+$/;
  const emailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/;
  // console.log(nom.trim(),email.trim(),pwd.trim());
  // if (
  //   email.trim() === "" ||
  //   pwd.trim() === ""
  // ) {
  //   ShowMessage(" plzzzzz Veuillez remplir tous les champs.","red");
  //   return false;
  // } else if (!nameRegex.test(nom)) {
  //   ShowMessage("le nom n'accepte que les lettres, les espaces et les tirets.","red");
  //   return false;
}if (!emailRegex.test(email)) {
    ShowMessage("Email invalide","red");
    return false;
  }
  ShowMessage("L'operation effectué avec succés :)","green");
  return true;

form.addEventListener("submit", function (e) {
  if (!formValidation()) {
    e.preventDefault();
  }
},false);


function ShowMessage(msg,color) {
  erreur.innerText = msg;
  erreur.style.color = color;
}