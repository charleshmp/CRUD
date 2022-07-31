const form = document.querySelector("#form");

form.onsubmit = event => {

   var nome = document.querySelector("#nome").value;   

   if (nome === "") {
       event.preventDefault();
       document.getElementById("Erro").innerHTML = "<p>Necessario Preencher o Nome !JS</p>"
       return;
   }
   var email = document.querySelector("#email").value;   

   if (email === "") {
       event.preventDefault();
       document.getElementById("Erro").innerHTML = "<p>Necessario Preencher o E-mail ! JS</p>"
       return;
   }
   var senha = document.querySelector("#senha").value;   

   if (senha === "") {
       event.preventDefault();
       document.getElementById("Erro").innerHTML = "<p>Necessario Preencher o Senha!! JS</p>"
       return;
   }
   var data = document.querySelector("#data").value;   

   if (data === "") {
       event.preventDefault();
       document.getElementById("Erro").innerHTML = "<p>Necessario Preencher o Data de Nascimento! JS</p>"
       return;
   }

}