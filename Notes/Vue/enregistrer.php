<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulaire avec image centrée</title>
  <style>
    .centered-image {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 250px;
      width:250px;
      border-raduis:50%;
      margin-left:150px
    }
    .form-group.row {
      margin-bottom: 0;
    }
    label{
      font-size:20px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >

  <div class="container-fluid" style="background-color:#227DAB">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
  
       <img src="./logo.png" class="img-rounded" alt="Breukh'S Cool" style="width:15%; height:90px;font-size:35px;" >               
    
    <a class="navbar-brand text-white" href="Accueil.php?action=niveau"><b>NIVEAU</b></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navbar-brand text-white" aria-current="page" href="index.php?action=enregistrer"><b>ÉLÈVE</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand text-white" href="index.php?action=annee"><b>ANNÉE</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand text-white" href="index.php?action=inscription"><b>INSCRIPTION<b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-brand text-white" href="index.php?action=classe"><b>CLASSE</b></a>
         
      </ul>
      <form class="d-flex input-group w-auto">
        <input
          type="search"
          class="form-control"
          placeholder="recherche..."
          aria-label="Search"
        />
        <button
          class="btn btn-outline-primary bg-success"
          type="button"
          data-mdb-ripple-color="red"
       >
          Search
        </button>
      </form> 
    </div>
  </div>
</nav> 
  <div class="container shadow-lg p-3 mb-2  bg-rgb(34, 125, 171) rounded mx-auto p-4 bg-light" >
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="centered-image">
          <img id="uploaded-image" src="../Vue/eleve.jpg" alt="Image centrée" class="img-fluid" style="border-radius: 50%; ">
        </div>
        <form action="" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="first-name">Prénom</label>
              <input type="text" class="form-control" id="first-name" placeholder="Votre prénom">
            </div>
            <div class="form-group col-md-6">
              <label for="last-name">Nom</label>
              <input type="text" class="form-control" id="last-name" placeholder="Votre nom">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="date-of-birth">Date de naissance</label>
              <input type="date" class="form-control" id="date-of-birth">
            </div>
            <div class="form-group col-md-6">
              <label for="place-of-birth">Lieu de naissance</label>
              <input type="text" class="form-control" id="place-of-birth" placeholder="Lieu de naissance">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="phone-number">Numéro</label>
              <input type="text" class="form-control" id="phone-number" placeholder="Numéro de téléphone">
            </div>
            <div class="form-group col-md-6">
              <label for="gender">Sexe</label>
              <div class="row">
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexe" id="sexe_fille" value="Fille" required>
                          <label class="form-check-label" for="sexe_fille">Fille</label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexe" id="sexe_garcon" value="Garçon" required>
                          <label class="form-check-label" for="sexe_garcon">Garçon</label>
                        </div>
                      </div>
                    </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="level">Niveau</label>
              <select class="form-control" id="niveau" name="niveau" required>
                      <option value="Primaire">Primaire</option>
                      <option value="Secondaire_inferieur">Secondaire inférieur</option>
                      <option value="Secondaire_superieur">Secondaire supérieur</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
              <label for="class">Classe</label>
              <input type="text" class="form-control" id="class" placeholder="Classe">
            </div>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" accept="image/*">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" style="margin-left:215px">INSCRIRE</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.getElementById('image').addEventListener('change', function(e) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('uploaded-image').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files[0]);
    });
    //pour demain inchallah lundi 30 Mai 2023
const r=fetch('http://jsonplaceholder.typicode.com/users') // Remplacez l'URL par l'URL de votre API
  // .then(response => response.json())
  // .then(data => {
    // Les données ont été récupérées avec succès
    console.log(r);

    // Manipulez les données comme nécessaire
    // Par exemple, affichez les données dans le document HTML
    // const niveau = document.getElementById('niveau');
    // data.forEach(item => {
    //   const listItem = document.createElement('li');
    //   listItem.textContent = item.name; // Remplacez 'name' par le nom de la propriété contenant les données que vous souhaitez afficher
    //   niveau.appendChild(listItem);
    // });
  // })
  // .catch(error => {
  //   // Une erreur s'est produite lors de la récupération des données
  //   console.error('Erreur lors de la récupération des données:', error);
  // });

  </script>
  
</body>
</html>
