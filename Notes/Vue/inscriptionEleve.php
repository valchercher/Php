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
    <script src="../Views/js/script.js"></script>
    <title>Eleve</title>
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
      </form>                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Prenom</th>

    </div>
  </div>
</nav>
<div style="background:rgb(34, 125, 171,.7);width:100%;height:850px">
<img src="./logo.png" alt="" srcset="">
    <div class="container shadow-lg p-3 mb-2 bg-white rounded mx-auto p-4 bg-light w-75 h-7">
        <input class="bg-success p-2 text-white" data-toggle="modal" data-target="#editModal" type="submit" value="+Ajouter" id="ajouter">
    </div>
        <div class="container">
            <table border="1" width="100%" cellspacing="0" cellpadding="6">            
                    <thead>
                    <tr>
                         <!-- <th rowspan="1" width="50%">id</th> -->
                        <th rowspan="1" width="20%" class="p-3 mb-2 bg-primary text-white">Nom</th>
                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Prenom</th>
                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Date de naissance</th>
                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Lieu de naissance</th>
                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Numéro</th>
                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Sexe</th>
                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Niveau</th>
                        <th colspan="1"  width="50%" class="p-3 mb-2 bg-primary text-white">Classe</th>
                    </tr>
                    </thead>                  
                        <?php foreach ($eleves as $eleve):?>
                          <tr>    
                            
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $eleve['nom']?></td>
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['prenom']?></td>
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['date_naissance']?></td>
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['lieu_naissance']?></td>
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['numero']?></td>
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['sexe']?></td>
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['niveau']?></td>
                            <td rowspan="" class="p-3 mb-2 bg-primary-subtle text-emphasis-primary"><?= $annee['classe']?></td>
                         </tr>
                        <?php endforeach ?>
            </table>
        </div>
        </div>
        <!-- modal Enregistrer eleve -->
<div id="moduleleve" style="background:rgb(34, 125, 171,.7);width:100%;height:850px; display:none" class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="container" style="background:;width:750px;height: 800px;">  
    <div class="main1">
      <div class="enreg">
        <h1>AJOUTER UN APPRENANT</h1>
          <div style="gap:25px" class="enregeleve container shadow-lg p-3 mb-2  bg-rgb(32, 123, 169) rounded mx-auto p-4 bg-light" style="width:700px;background: rgb(32, 123, 169);border-radius:10px;">

            <form action="traitement_inscription.php" method="POST" >
              <div style="padding:30px;gap:50px" >
                <div class="row p-4">
                  <div class="form-group col-md-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                  </div>
                </div>
                <div class="row p-4">
                  <div class="form-group col-md-6">
                    <label for="date_naissance">Date de naissance</label>
                    <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lieu_naissance">Lieu de naissance</label>
                    <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
                  </div>
                </div>
                <div class="row p-4">
                  <div class="form-group col-md-6">
                    <label for="numero">Numéro</label>
                    <input type="text" class="form-control" id="numero" name="numero" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Sexe</label>
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
                <div class="row p-4">
                  <div class="form-group col-md-6">
                    <label for="niveau">Niveau</label>
                    <select class="form-control" id="niveau" name="niveau" required>
                      <option value="Primaire">Primaire</option>
                      <option value="Secondaire_inferieur">Secondaire inférieur</option>
                      <option value="Secondaire_superieur">Secondaire supérieur</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="classe">Classe</label>
                    <select class="form-control" id="classe" name="classe" required>
                      <option value="CP"></option>
                      <option value="CE1"></option>
                      <option value="CE2"></option>
                      <option value="CM1"></option>
                      <option value="CM2"></option>
                    </select>
                  </div>
                </div>
                <div class="container" style="margin-left:230px;margin-top:">
                <button type="submit" class="btn btn-primary">INCRIRE</button>
                </div>
              </div>
            </form>
              </div>
          </div>
      </div>
    </div>  
  </div>
</div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>