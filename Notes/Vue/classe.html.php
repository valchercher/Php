<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-V4fDnBBmuP+iyz3yRKTTWPGnYOjw1JKxE6LyUmmjDE7DBeKmLeTVUTgfDUsb8yh1w7TFIPyINwT5pdX3wGZOVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white" href="#"><b>ANNÉE</b></a>
  <a class="navbar-brand text-white" href="#"><b>NIVEAU</b></a>
  <a class="navbar-brand text-white" href="#"><b>CLASSE</b></a>
  <a class="navbar-brand text-white" href="#"><b>DISCIPLINE</b></a>
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
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card"  style=";background:rgb(34, 125, 171,.7)">
            <div class="card-body">
                <div style="width:865px;height:50px;border:2px solid; display:flex;justify-content:space-between;">
                <img src="../Vue/logo.png" alt="LOGO" srcset="">
                <input type="submit" value="année activé">
                <div>username</div>
                </div>
                <h3 class="card-title text-center">Classes élémentaire</h3>
                <div style="display:flex;justify-content: end;font-size:35px;color:green">
                     <i class="fa fa-plus" data-toggle="modal" data-target="#editModal"></i>
                </div>
                <form method="POST" action="liste">
                    </form>
                <?php foreach($classes as $classe):?>
                    <div class="mb-3">
                       
                    <a href="/eleve/listeEleve/<?php echo $classe['id_classe'];?>"> <input style="font-size:25px;" class="form-control" type="submit" id="ic" name="niveau" value="<?= $classe['classe']?>" required></a>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Ajouter Niveau</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                      <div class="modal-body">
                        <!-- Formulaire de modification -->
                       <form method="POST" action="/classe/addclasse"> 
                            <div class="form-group">
                                <label for="annee"></label>
                                <input type="text" class="form-control" id="classe" name="classe" value="">  
                            </div>
                                <input type="hidden"  class="form-control" name="id_niveau_classe" value="<?php  echo $classe['id_niveau_classe'];?>">
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                         </form> 
                      </div>
                    </div>
                 </div>
                </div>
            <?php endforeach ?>
                
            </div>
        </div>
    </div>
z<div class="container-fluid bg-primary  text-white">
<footer class="row">
  <div class="col-xs-6 col-md-6  align-items-center text-white">
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


</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
