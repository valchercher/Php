
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
qteStock.addEventListener("input", calculerMontant);
prix.addEventListener("input", calculerMontant);