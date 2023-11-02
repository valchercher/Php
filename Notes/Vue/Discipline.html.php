
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-V4fDnBBmuP+iyz3yRKTTWPGnYOjw1JKxE6LyUmmjDE7DBeKmLeTVUTgfDUsb8yh1w7TFIPyINwT5pdX3wGZOVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Discipline</title>
    
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <img src="/image/logo.png" alt="" srcset="">
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
    <form class="" action="" method="POST">      
         <div class="container p-5">
            <h1><b>Gestion des disciplines</b></h1>
            <div class="row p-4">
                <div class="form-group col-md-6">
                    <label for="niveau"><b>Niveau</b></label>
                    <select  name="my" class="form-control" id="myselect" required onchange="getSelectValue();">
                        <option value="">Choisir niveau</option>
                       <?php foreach ($niveaux as $niveau):;?>
                       <option  value="<?= $niveau['id_niveau'];?>"> <?= $niveau['niveau'];?></option>
                       <?php endforeach ?>
                    </select> 
                </div>
                <div class="form-group col-md-6">
                    <label for="classe"><b>Classe</b></label>
                    <select class="form-control" id="classeliste" name="clase" required class="selectclasse">
                    </select>
                </div>
            </div>
            <div class="row p-4">
                <div class="form-group col-md-6">
                    <label for="niveau"><b>Groupe Disciplines</b></label> 
                        <select class="form-control" id="groupediscipline" name="groupes" required>
                          <option id="btnOpenModal" value="">nouveau</option>
                          <?php foreach($datas as $value):?>
                            <option  value="<?= $value['id_groupe_discipline']?>" id="ajouter">Nouveau</option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="classe"><b>Disciplines</b></label>
                        <input type="text" placeholder="Ex:Histoire"  class="form-control" id="disciplineclasse" >                   
                    </div>
                  <div>
                  <button type="button" id="btnOK"  style="background:#007bff;height:40px;margin-top:30px;width:60px;color:white"><b>OK</b></button>
               </div>
            </div>
            <hr style="border:1px solid">
            <h2><b>Les disciplines de la classe de </b><span id="classdispl" class="text-danger">(...)</span></h2>
            <span class="text-danger" style="color:rgb(200, 64, 64)">Decocher une discipline pour la supprimer de la classe</span>
            <div style="width:1050px;height:320px;background:#f2f9fe;border-radius:10px;box-shadow: 1px 2px 3px white;">
                 <div class="container">               
                    <div class="checkbox p-1" id="labeldiscipline" style="display:flex; flex-direction: row;flex:1;flex-wrap: wrap;gap:70px">
                        <!-- <label class="checkbox-inline mt-5" > -->
                        <!-- <input type="checkbox" name="option1" > ECRITURE (ECR) -->
                        </label>
                        <!-- <label class="checkbox-inline" style="margin-left: 150px;">
                        <input type="checkbox" name="option2"> Géometrie (GEOM)
                        </label>
                        <label class="checkbox-inline" style="margin-left: 150px;">
                        <input type="checkbox" name="option3"> Géographie (GEO)
                        </label> -->
                    </div>
                </div>
               <!-- <div class="form-group container">               
                    <div class="checkbox">
                        <label class="checkbox-inline mt-5">
                        <input type="checkbox" name="option1"> Activité Numerique (AN)
                        </label>
                        <label class="checkbox-inline" style="margin-left: 115px;">
                        <input type="checkbox" name="option2"> Vocabulaire (VOC)
                        </label>
                        <label class="checkbox-inline" style="margin-left: 150px;">
                        <input type="checkbox" name="option3"> Activité de Mesure (ADM)
                        </label>
                    </div>
                    <div class="form-group container">               
                    <div class="checkbox">
                        <label class="checkbox-inline mt-5">
                        <input type="checkbox" name="option1"> Vivre dans son milieu (VDM)
                        </label>
                    </div>
                </div> -->
            </div>
            
            <div  style="display:flex;justify-content:end;margin-top:5px">
                <button  type="button" class="btn btn-primary" id="btnMisAjour" ><b>Mettre à jour</b></button>
            </div>
        </div>
       
        <!-- Modal -->
<div id="myModal" class="modal">
  <div class="content">
    <div class="modal-content">
      <span class="close" id="close">&times;</span>
      <h2>Ajouter un groupe de discipline</h2>
      <form id="disciplineForm">
        <label for="nomDiscipline">Nom de la discipline:</label>
        <input type="text" id="nomDiscipline" class="form-control" placeholder="Ex:Mathématique">
        <button type="button" id="btnAj">Ajouter</button>
      </form>
    </div>
  </div>  
</div>

    </form>
  <div class="container-fluid bg-primary  text-white">
<footer class="row">
  <div class="col-xs-6 col-md-6  align-items-center text-white">
    <img src="/image/logo.png" alt="" srcset="">
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
    <script type="text/javascript" src="/JS/script.js"></script>
</body>
<style>
    .form-control::-ms-expand {
        display: none;
    }

    .form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: none; 
    }
</style>
</html>