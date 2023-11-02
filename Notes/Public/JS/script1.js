const ressources = document.querySelectorAll('.ressources');
const examens  = document.querySelectorAll('.examens');
const valeurs  =document.querySelectorAll('.valeurs');
const btnMiseAJour =document.getElementById('btnMiseAJour');
const faSolid = document.querySelectorAll('.fa-solid');
const editModal = document.getElementById('editModal');
const supprimer = document.getElementById('supprimer');
const idclasse =document.getElementById('idclasse');


const NotesURL='http://localhost:8000/coefficient/updateExamen/';
const suppURL='http://localhost:8000/coefficient/stoupper/';
valeurs.forEach((valeur)=>{
    valeur.addEventListener('change',()=>{
    valeur.classList.add('update'); 
    if (!(valeur.value>0 && valeur.value<20)) {
        console.log("erreur");  
             
    }
    else if(valeur.value>=0 && valeur.value<=20){
      if(valeur.value<10){
        valeur.style.color="red"
      } else{
        valeur.style.color=""
      }
        //console.log(valeur.value);
    }
//    console.log(valeurs)
    })
})
btnMiseAJour.addEventListener('click',()=>{
  console.log(idclasse.value);
  const tab=[];
  const notes= document.querySelectorAll('.update');
  notes.forEach(note=>{  
  let data=note.getAttribute('donnee');
  console.log(note);
  let datas=data.split('/');
  console.log(datas);
  let objet={
      id:datas[0],
      not:datas[1],
      value:note.value
  };
  
  tab.push(objet)
 //console.log(objet);
 update(NotesURL,objet);
 })
})

 faSolid.forEach((fa)=>{fa.addEventListener('click',()=>{
  fa.classList.add('solid');
  const supp=document.querySelectorAll('.solid');
  supp.forEach(sup=>{  
    let data=sup.getAttribute('idd');
    console.log(sup);
   console.log(data);
  let url=suppURL+""+data;
  supprimerRessources(url)
   })
 })
})
function supprimerRessources(url) {
    fetch(url, {
      method: 'DELETE'
    })
      .then(response => {
        console.log(response);
        if (response.ok) {
          console.log("Discipline supprimée avec succès !");
        } else {
          console.error("Erreur lors de la suppression de la discipline.");
        }
      })
      .catch(error => {
        console.error("Erreur lors de la suppression de la discipline:", error);
      });
}
function update(url,objet){
  fetch(url,{
    method:'POST',
  body:JSON.stringify(objet),
  headers:{"Content-Type" :"application/json"}
  })
  .then(response=> response.text())
  .then(data=>{console.log(data);})
}