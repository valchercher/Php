
<!DOCTYPE html>
<html>
<head>
  <title>cycle</title>
  <!-- Inclure les fichiers CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
  <div class="container " style="background:rgb(34, 125, 171,.7)">
    <div class="row justify-content-center mt-5 shadow-lg p-2 mb-2 bg-white rounded mx-auto  bg-light" style="height">
      <div class="col-md-6 mt-5" >
        <div style="width:500px;height:50px;border:2px solid black">
          <!-- <?php //echo $nameuser ;?> -->
        </div>
          <div style="display:flex;justify-content: end;;font-size:35px;color:green">
            <i class="fa fa-plus" data-toggle="modal" data-target="#editModal"></i>
        </div>
        <form method="" action="afficherNiveau"> 
          <h1 class="justify-content-center ml-5">Les niveaux</h1>
            <!-- Vos champs de formulaire ici -->
        </form> 
            <?php foreach ($niveaux as $niveau):?>
                <div class="form-group" style="font-size:25px; justify-content:center ;align-items:center;text-aligns:center">             
                <a href="/classe/liste/<?= $niveau['id_niveau'];?>"><input type="submit" class="text-center p-2 justify-content-center" name="ajoutniveau" id="nom" value="<?= $niveau['niveau'];?>" style="font-size:25px; width: 500px;" ></a>
              </div>
              <?php endforeach ?>
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
                      <form action="traiterClasse" method="POST"> 
                        <div class="form-group">
                          <label for="annee"></label>
                          <input type="text" class="form-control" id="niveau" name="niveau" value="">  
                        </div>
                        <input type="hidden"  class="form-control" name="" value="<?= $niveau['niveau'];?>">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                      </form> 
                    </div>
                  </div>
                </div>
              </div>
           
    </div>
  </div>
</div>
  <div class="container-fluid bg-primary  text-white">
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

  <!-- Inclure les fichiers JavaScript Bootstrap (facultatif) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
