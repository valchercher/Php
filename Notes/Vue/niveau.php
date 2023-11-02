<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>niveau</title>
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
  
       <img src="./logo.png" class="img-rounded-2" alt="Breukh'S Cool" style="width:15%; height:90px;font-size:35px;" >               
    
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
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled"
            >Disabled</a
          >
        </li> --> 
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
<div style="background:rgb(34, 125, 171,.7);width:100%;height:850px">
<img src="./logo.png" alt="" srcset="">
    <div class="container shadow-lg p-3 mb-5 bg-rgb(32, 123, 169) rounded br-7" style="display: flex;justify-content: center;align-items: center;background: white; margin-top:100px;width:600px;height: 450px;">
        <form action="Accueil.php?action=traiterFormulaire" method="POST" class="p-5" >
            <div class="form-group p-5" >
                <label for=""><h2>Niveau d'etude</h2></label>
            <input type="text" class="form-control rounded-3 bg-sucess" id="niveau" name="niveau_etude" required>
            </div>
            <div class="form-group p-5" >
                <label for=""><h2>Nombre d'élève</h2></label>
            <input type="text" class="form-control" id="niveau" name="nombre_eleve" required>
            </div>
            <div class="form-group" style="margin-left:60px" >
                <button class="btn btn-primary p-2" type="submit">Enregistrer</button>
                <button  class="btn btn-warning p-2" type="submit" style=" margin-left:30px;height:45px;width:100px">Annuler</button>
            </div>
            
        </form>
    </div>
    </div>
</body>
</html>