const selectNote=document.getElementById('selectNote');
const selectdiscipline= document.getElementById('selectDiscipline');
const selectsemestre= document.getElementById('selectSemestre');
const idclasse = document.getElementById('idclasse');
const NoteRE =document.querySelectorAll('.NoteRE');

const selectURL='http://localhost:8000/moyenne/getSelect/'


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
           console.log(data);
         return data;
          
      } catch (error) {
        console.error(error);
      }
    }
   
selectNote.addEventListener('click',()=>{
choix= selectNote.selectedIndex;
text= selectNote.options[choix].textContent;
// alert(idclasse.value)
choix1= selectdiscipline.selectedIndex;
id_discipline= selectdiscipline.options[choix1].value;

processData(selectURL+""+text+"/"+idclasse.value+"/"+id_discipline)
.then(data=>{
    data.forEach(element => {
        if(text==="Examens"){
            NoteRE.forEach(e=>{
                e.innerHTML=element.Examens;
            })
        }
        else if(text==="ressources"){
            NoteRE.forEach(e=>{

                e.innerHTML=element.ressources;
            })
        }              
    })
    ;;})
})