<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet"  href="vue/css/style.css">
</head>
<body>
    <form action="" method="post">
        <div class="tete">Article de confection</div>
       <div class="forme">
        <label for="">Libelle:</label>
        <input type="text" name="libelle" id="" required>
       </div>
       <div class="forme1">
        <label for="">Quantité stock:</label>
        <input type="number" name="qtestock" id="qte" required>
       </div>
       <div class="forme2">
        <label for="">Prix:</label>
        <input type="number" name="prix" id="prix" required>
        <span>FCFA</span>
       </div>
       <div class="forme3">
        <label for="">Montant:</label>
        <input type="number" name="montant" id="montant" required>
        <span>FCFA</span>
       </div>
    
       <div class="forme4">
        <label for="">Observation:</label>
        <input type="text" name="observation" id="" required>
       </div>
       <div class="forme">
        <label for="">Categorie</label>
        <select name="" id="">
            <option value="Confection">Confection</option>
            <option value="Vente">Vente</option>
        </select>
       </div>
       <div class="forme5">
        <button type="submit">Enregistrer</button>
        <button type="submit">Annuler</button>
      </div>
    </form>
    <script >

const qteStock = document.getElementById("qte");
const prix = document.getElementById("prix");
const montant = document.getElementById("montant");

function calculerMontant() {
  const valQteStock = parseInt(qteStock.value);
  const valPrix = parseFloat(prix.value);

  if (isNaN(valQteStock) || isNaN(valPrix)) {
    montant.value = "";
    return;
  }

  const valMontant= valQteStock * valPrix;

  montant.value = valMontant;
}
prix.addEventListener("input", calculerMontant);
    </script>
</body>
<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    background:aliceblue;
}
form{
    margin-top:10%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    border:2px solid black;
    box-shadow:2px 3px 5px 4px black;
    
}
.tete{
    font-size:30px;
    background:gray;
    height: 50px;
}
span{
    margin-top:9px;
    font-size:20px;
}
.forme,.forme1,.forme2,.forme3,.forme4,.forme5{
    padding:15px;
    flex:1;
    gap: 25px;
    display:flex;
   
}
.forme input{
 margin-left:100px;
}
.forme2 input{
    margin-left:135px;
}
.forme3 input{
    margin-left:78px;
}
.forme4 input{
    margin-left:33px;
}
label{
    font-size:25px;
    text-decoration: underline;
}
button{
    padding:5px;
    font-size:30px;
    border-radius:10px;
}
.forme5{
    display:flex;
    justify-content:center;
    gap:45px;
    background:gray;
}
input{
    border-radius:10px;
    height: 40px;
    
}
select{
    margin-left:70px;
    width: 200px;
    font-size:25px;
}
span{
    margin-left:-95px;
}
</style>
</html>