const niveaux = document.getElementById('niveau');
const selectclasse = document.getElementById("classeliste");
const ajouter = document.getElementById('ajouter');
const moduleleve= document.getElementById('moduleleve');
const selectedValue = document.getElementById("myselect");
const groupediscipline = document.getElementById("groupediscipline");
const disciplineclasse = document.getElementById('disciplineclasse');
const labeldiscipline = document.getElementById('labeldiscipline');
const editModal =document.getElementById('editModal');
const checke = document.querySelector('#option');
const btnMisAjour = document.querySelector('#btnMisAjour');
const btnOK = document.getElementById('btnOK');
const btnAj =document.getElementById('btnAj');
const nomClasse =document.getElementById('nomClasse');
console.log(selectclasse.value);
const classeUrl = 'http://localhost:8000/classe/listeclasse/'
const groupDiscpl= 'http://localhost:8000/discipline/listeGroupe';
const disciplineUrl = 'http://localhost:8000/discipline/listeDiscipline/';
const disciplineclasseUrl ='http://localhost:8000/discipline/listeDisciplineClasse/';
const miseAjoururl = 'localhost:8000/discipline/decocher/';
const insertdiscipline ='http://localhost:8000/Discipline/insert/';
const update = 'http://localhost:8000/discipline/Decocher/';
const AjoutGroupeDisciplineUrl= 'http://localhost:8000/discipline/AjoutGroupeDiscipline/';
const troislettres ='http://localhost:8000/discipline/troisPremiersLettre';
 function fetchData(url){
return fetch(url)
    .then(response => { 
      if (response.ok) {
        return response.json();
      } else {
        throw new Error("Erreur lors de la requête : " + response.status);
      }
    })
    .catch(error => {
      console.error(error);
    });
 }
async function processData(url) {
  try {
    const data = await fetchData(url);
      // console.log(data);
     return data;
      
  } catch (error) {
    console.error(error);
  }
}

function Discipline(data,select) {
  let j=1;
  select.innerHTML = '';
  const option = createElement('option');
  option.innerHTML = "Nouveau discipline";
  option.id="btAjou";
  select.appendChild(option);
  data.forEach(el=>{
    const{
      id_groupe_discipline,
      libelle,
    }=el
        const option = createElement('option');
        option.innerHTML = libelle;
        option.value=id_groupe_discipline
        select.appendChild(option);
    })
}
function groupeDiscipline(){
  processData(groupDiscpl)
  .then(data=>{
    Discipline(data,groupediscipline)
  })
} 
groupeDiscipline();
groupediscipline.addEventListener('click',()=>{
  choix=groupediscipline.selectedIndex;
  let idDiscipline=groupediscipline.options[choix].value;
 if(idDiscipline==="Nouveau discipline"){
    openModal();
}
}
)
function disciplineClasse() {
  selectclasse.addEventListener('click',()=>{
    choix=selectclasse.selectedIndex;
    let idDisciplineClasse=selectclasse.options[choix].value;
    let html =`<a href='/Coefficient/afficher/${idDisciplineClasse}' ><span  class="" style="color:rgb(200, 64, 64)">${selectclasse.options[choix].textContent}</span></a>`
    //document.getElementById('discple').innerHTML=selectclasse.options[choix].textContent;
    document.getElementById('classdispl').innerHTML=html;
    //alert(idDisciplineClasse)
     labeldiscipline.innerHTML='';
    processData(disciplineclasseUrl+""+idDisciplineClasse)
    .then(data =>{
      labeldiscipline.style.color='';
      labeldiscipline.style.justifyContent='';
      if(data==''){
        const pasDiscipline=document.getElementById('pasDiscipline');
        labeldiscipline.innerHTML=`<div class="container p-5"style="padding-top:100px">
        <div style="display:flex;justify-content:center;aligns-items:center" id="pasDiscipline">
        <span class="container">Pas encore de discipline pour cette classe!</span> </div>
        </div>`;
       labeldiscipline.style.color="rgb(200, 64, 64)";
       labeldiscipline.style.justifyContent="center";
      }else{
        data.forEach(el=>{
          const{
            id_DIscipli,
            libelle,
            code_ecriture,
          }=el
          let html=`<div id ="decocher"><label class="labe${id_DIscipli} checkbox-inline mt-2" id="labelinput" id="option" >
          
          <input type="checkbox" name="option1" id="option" class="iddiscipclasse" val="${id_DIscipli}"  checked>
           ${libelle} ${" "}<span>(${code_ecriture}</span>)
          </label></div>`
          labeldiscipline.innerHTML+=html;
          //console.log(document.querySelector('input[name="option1"]').textContent);
          document.querySelectorAll('labelinput');
           coche()
          
        })
      }
    })
  })
}

 function coche(){
  const checkboxes = document.querySelectorAll('input[name="option1"]')
  // checkboxes.forEach(element => {
  //     element.checked=true
  //   })
    checkboxes.forEach(element=>{element.addEventListener('click',()=>{
      const check=  document.querySelectorAll(".iddiscipclasse")
      
      console.log(check);
      let a='';
      check.forEach(el=>{
        console.log(el.checked);
        if(!(el.checked)){
            a=el.getAttribute("val");
            alert(a.value)
            alert(a)
            btnMisAjour.addEventListener('click',()=>{       
              supprimerDiscipline(update+""+a)
              disciplineclasse.value=''
              choix=selectclasse.selectedIndex;
                document.getElementById('classdispl').innerHTML=selectclasse.options[choix].textContent;
                let idDisciplineClasse=selectclasse.options[choix].value;
                //alert(idDisciplineClasse)
                 labeldiscipline.innerHTML='';
                 processData(disciplineclasseUrl+""+idDisciplineClasse)
                .then(data =>{
                data.forEach(el=>{
                  const{
                    id_DIscipli,
                    libelle,
                    code_ecriture,
                  }=el
                  
                  let html=`<div id ="decocher"><label class="labe${id_DIscipli} checkbox-inline mt-2" id="labelinput" id="option" >
                  <input type="checkbox" name="option1" id="option" class="${id_DIscipli}" checked> ${libelle} ${" "}<span>(${code_ecriture}</span>)
                  </label></div>`
                  labeldiscipline.innerHTML+=html;
                  
                })
              })
            })
         return;
        }
      })
      if(a!==''){
      }
    })
    })
 }

disciplineClasse()
function getSelectValue(){
  return selectedValue.value; 
}
function createElement(name){
  return document.createElement(name);
}
function chargerSelect (data){ 
    let j=1;
    selectclasse.innerHTML = '';
    const option1 = createElement('option');
    option1.innerHTML = "choisir une classe";
    selectclasse.appendChild(option1);
    data.forEach(el=>{
      const{
        id_classe,
        classe,
      }=el
        const option = createElement('option');
        option.innerHTML =classe;
        option.value=id_classe;
        selectclasse.appendChild(option);
    })
}
function removeSpace( word) {
  return  word.trim();
}
function afficher(){
  choice=selectedValue.selectedIndex;
  const vall=selectedValue.options[choice].textContent; 
  const valeur=removeSpace(vall);
      let idNiveau=selectedValue.options[selectedValue.selectedIndex].value
      processData(classeUrl+""+ idNiveau)
      .then(donnee=>{
        // console.log(donnee);
        chargerSelect(donnee)
      });   
    };
selectedValue.addEventListener('click',()=>{

  afficher();
});

btnOK.addEventListener('click',()=>{
  let idclasse=selectclasse.options[selectclasse.selectedIndex].value;
  let idgroupediscipline=groupediscipline.options[groupediscipline.selectedIndex].value;
  let libelle = disciplineclasse.value;
  var code="";
  processData(troislettres)
  .then(data=>{
    console.log(data);
  code=premieresLettres(data,libelle);

console.log(code);

  alert('fdgdfgdf')
  const insertion=insertdiscipline+""+encodeURIComponent(libelle)+"/"+code+"/"+idgroupediscipline+"/"+idclasse;
  console.log(insertion);

  const datass = {
    "libelle":encodeURIComponent(libelle),
    "code_ecriture":encodeURIComponent(code),
  };
  const datas={
    "id_Discipline":idgroupediscipline,
    "id_Classe":idclasse,
  }
  fetch(insertion, {
    method: 'POST',
    body: JSON.stringify({datass,datas}),
    headers: {
      'Content-Type': 'application/json',
    },
  })

  .then(response => {
    console.log(response)
    return  response.json();
  })
  .then(result => { console.log(result);
    console.log('Données insérées avec succès :', result);
  })
    .catch(error => {
      console.error("Erreur lors de l'insertion des données :", error);
    });
    disciplineclasse.value=''
  choix=selectclasse.selectedIndex;
    document.getElementById('classdispl').innerHTML=selectclasse.options[choix].textContent;
    let idDisciplineClasse=selectclasse.options[choix].value;
    //alert(idDisciplineClasse)
     labeldiscipline.innerHTML='';
     processData(disciplineclasseUrl+""+idDisciplineClasse)
    .then(data =>{
    data.forEach(el=>{
      const{
        id_DIscipli,
        libelle,
        code_ecriture,
      }=el
      
      let html=`<div id ="decocher"><label class="labe${id_DIscipli} checkbox-inline mt-2" id="labelinput" id="option" >
      <input type="checkbox" name="option1" id="option" class="${id_DIscipli}" checked> ${libelle} ${" "}<span>(${code_ecriture}</span>)
      </label></div>`
      labeldiscipline.innerHTML+=html;
      
    })
  })
})
    
})
function premieresLettres(data,valeur){
  let val="";
  let index=3;
  do {
    val = valeur.substring(0, index++).toUpperCase();
  } while (data.some(e => e.code_ecriture.includes(val)));
  console.log(val);
  return val;
}
btnMisAjour.addEventListener('click',()=>{

})
    function supprimerDiscipline(url) {
      fetch(url, {
        method: 'DELETE'
      })
        .then(response => {
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
    function mettreAJourDiscipline(id, nomDiscipline) {
      let url=update+""+id
      fetch(url, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ nom: nomDiscipline })
      })
        .then(response => {
          if (response.ok) {
            console.log("Discipline mise à jour avec succès !");
          } else {
            console.error("Erreur lors de la mise à jour de la discipline.");
          }
        })
        .catch(error => {
          console.error("Erreur lors de la mise à jour de la discipline:", error);
        });
    }

// Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}
document.getElementById('close').addEventListener('click',()=>{
  closeModal()
})

btnAj.addEventListener('click',()=>{
  const nomDiscipline =document.getElementById('nomDiscipline'); 
  let url= AjoutGroupeDisciplineUrl+""+nomDiscipline.value
  const data = {  
    "Groupe diciplines":"nomDiscipline.value",
  };
  fetch(url, {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
      'Content-Type': 'application/json',
    },
  })
  .then(response => response.json())
  .then(result => { console.log(result);
    console.log('Données insérées avec succès :', result);
  })
    .catch(error => {
      console.error('Erreur lors de l\'insertion des données :', error);
    });
    nomDiscipline.value="";
})