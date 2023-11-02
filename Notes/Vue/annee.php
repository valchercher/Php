<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      table,th,td,tr{border:2px solid #cccccc}
    </style>
    <title>Année</title>
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
          <a class="nav-link active navbar-brand text-white" aria-current="page" href="index.php?action=eleve"><b>ÉLÈVE</b></a>
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
    <div class="container shadow-lg p-3 mb-2 bg-white rounded mx-auto p-4 bg-light w-75 h-7">
        <form action="traiterAnnee" method="POST">
            <label for="" class="p-6 text-uppercase"><b>Ajouter  une Année Scolaire</b></label>
            <div class="p-2">
            <input type="text" name="annee_scolaire">
            <input type="submit" value="Valider" id="valide">
            </div>
        </form>
    </div>
        <div class="container">
            <table border="1" width="100%" cellspacing="0" cellpadding="6">            
                    <thead>
                    <tr>
                         <!-- <th rowspan="1" width="50%">id</th> -->
                        <th rowspan="1" width="50%" class="p-3 mb-2 bg-primary text-white">Année</th>
                        <th colspan="4"  width="50%" class="p-3 mb-2 bg-primary text-white">Options</th>
                    </tr>
                    </thead>                  
                        <?php foreach ($annes as $annee):?>
                          <tr>    
                            
                            <td rowspan="2" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['annee_scolaire']?></td>
                            <tr>
                              
                                <form action="" method="POST"> 
                                    <td  class="p-3 mb-2   text-white" >                                      
                                          <a class="nav-link navbar-brand text-white" href="" name="activer">
                                          <input type="hidden" name="active" value="<?php echo $annee['id_annee']; ?>">
                                          <button type="submit" class="btn btn-success" class="active-btn">activer</button>
                                          </a>
                                    </td>
                                    
                             
                                <form action="" method="POST">   
                                  <td  class="p-3 mb-2   text-white">                                   
                                      <a class="nav-link navbar-brand text-white" href="supprimerAnnee">
                                      <input type="" name="supprimer" value="<?php echo $annee['id_annee']; ?>">
                                      <button type="submit" class="btn btn-danger text-white" class="active-btn">supprimer</button>
                                        </a>                                       
                                  </td>  
                                </form> 
                                <td><a href="" data-toggle="modal" data-target="#editModal<?php echo $annee['id_annee']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        
                                    <!-- <td class="p-3 mb-2  text-white">
                                        <a class="nav-link navbar-brand text-white" href="index.php?action=editer" name="fa_solid"> -->
                                            <!-- <i  class="fa-solid fa-pen-to-square bg-primary"></i> -->
                                        <!-- </a> -->
                                      <!-- </td> -->
                                    
                               
                            </tr>
                          </tr>
                          <!-- Modal de modification -->
                <div class="modal fade" id="editModal<?php echo $annee['id_annee']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Modifier l'année scolaire</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulaire de modification -->
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="annee">Année</label>
                                        <input type="text" class="form-control" id="annee_edite" name="annee_edite" value="<?php echo $annee['annee_scolaire']; ?>">  
                                    </div>
                                        <input type="hidden"  class="form-control" name="id_edite" value="<?php echo $annee['id_annee']; ?>">
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach ?>
            </table>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>