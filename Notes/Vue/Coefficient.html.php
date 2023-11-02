
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Coefficient de Ponderation</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
<!-- <img src="/image/logo.png" alt="" srcset=""> -->
  <a class="navbar-brand text-white" href="/annee/"><b>ANNÉE</b></a>
  <a class="navbar-brand text-white" href="/niveau/afficherNiveau"><b>NIVEAU</b></a>
  <a class="navbar-brand text-white" href="/classe/liste"><b>CLASSE</b></a>
  <a class="navbar-brand text-white" href="/discipline/gestion"><b>DISCIPLINE</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!-- Dropdown -->
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ANNÉE</a>
          <a class="dropdown-item" href="#">NIVEAU</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class=" mt-5 container shadow" >
  <!-- <form action="" method="POST"> -->
    <div class="container" style="display: flex;justify-content: center;text-align: center;align-items: center;flex-direction:column">
    <h1>Coef/Pondération</h1>
    <div >
      
      <h3 id="NomClasse"><a href="/moyenne/liste/<?= $nomclasse['id_classe']?>"><?= $nomclasse['classe'];?></a></h3>
      <input type="hidden" id="idclasse" value="<?= $nomclasse['id_classe']?>">
      </div>

    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Diciplines</th>
                <th>Ressources</th>
                <th>Examens</th>
                  <th><i class="fa-light fa-basketball"></i></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($disciplines as $discipline):;?>
            <tr>
              <input type="hidden" name="iddiscipline" value="<?= $discipline['id_Discipline']?>">
                <td><h4 type="" name="" class="form-control"><?= $discipline['libelle'];?></h4></td>
                <td><input type="number" name="ressource" donnee="<?= $discipline['id_classe_discipline']?>/ressources" class="valeurs form-control"  value="<?= $discipline['ressources'];?>" min="0" max="20"></td>
                <td><input type="number" name="examen" donnee="<?= $discipline['id_classe_discipline']?>/Examens" class="valeurs form-control" value="<?= $discipline['Examens'];?>" min="0" max="20"></td>
                <td><i  class="fa-solid fa-xmark text-danger" idd="<?= $discipline['id_classe_discipline']?>"></i></td>
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
    <div style="display: flex;justify-content: end;">
        <button id="btnMiseAJour">Mettre à jour</button>
    </div>
  <!-- </form> -->
</div>
<!-- <div class="container-fluid bg-primary  text-white" >
    <footer class="row">
    <div class="col-xs-6 col-md-6  align-items-center text-white">
        <img src="/Public/image/logo.png" alt="" srcset="">
        <p>
            <b>Breukh'S Cool </b>
        </p>
    </div>
    <div class="col-xs-6 col-md-6">
        <div id="Copyright">
        <p>
            Copyright © 2023 sarrpc@gmail.com - Tous Droits Réservés
        </p>
        </div>
    </div>
    </footer>
</div> -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel"> Voulez-vous vraiment supprimer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Formulaire de modification -->
        <form method="POST" action="/classe/addclasse"> 
          <div class="form-group">
              <label for="annee"> Examen</label>
              <input type="text" class="form-control" id="supprimer" name="classe" value=""> 
              <!-- <label for="">Nom:</label>
              <input type="text" class="form-control" id="nom" value="">  -->
          </div>
          <button type="submit" class="btn btn-success">Valider</button>
        </form> 
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="/JS/script1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>