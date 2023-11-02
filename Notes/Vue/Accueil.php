
<!-- <DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    < <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <title>ACCUEIL</title>
    <link rel="stylesheet" type="text/css" href="/home/sarrpc/PHP/Notes/Public/style.css">
</head>
<body>

    <div class="accueil">
            
        <div class="en-tete">
            <div class="logo">
                <img src="./Capture d’écran du 2023-05-17 18-34-37.png" alt="" srcset="" id="img">               
            </div>
            <div class="form">
                <div class="enregistrer">
                <div>
                        <a href="Accueil.php?action=niveau">NIVEAU</a>
                    </div>
                   <div>
                    <a href="index.php?action=enregistrer">ÉLÈVE</a>
                   </div>
                    <div>
                        <a href="index.php?action=classe">CLASSE</a>
                    </div>
                    <div>
                        <a href="index.php?action=inscription">INCRIPTION</a>
                    </div>
                    <div>
                        <a href="index.php?action=annee">ANNÉE</a>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="seconnecter">
                    <input type="search" name="" placeholder="search" id="search">
                </div>
                <div class="deconnexion">
                    <input type="submit" value="Deconnecter" id="deconnecter">
                </div>
            </div>         
        </div>
        <div class="main">
            <div class="opacite">
                <h2>L'enseignement primaire(du CI au CM2)</h2>
                <h2>L'enseignement secondaire inférieur(du 6iéme a la 3iéme)</h2>
                <h2>L'enseignement secondaire supérieur(2nd et plus)</h2>
            </div>
            <div class="box">
                < <img src="./myschool.jpg" alt="" srcset="" id="imgclasse"> 
            </div>
            <div class="box1">
                < <img src="./Capture d’écran du 2023-05-18 01-06-51.png" alt="" srcset="" id="classe">
                <img src="./Capture d’écran du 2023-05-18 01-07-05.png" alt="" srcset="" >
            </div>
            <div class="box2">
                < <img src="./senegal.jpg" alt="" srcset="" id="clas">
                <img src="./Salle-Concours.jpg" alt="" srcset="" class="class">
            </div>         
        </div>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>ACCUEIL</title>
</head>
<body >
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
<img src="./logo.png" alt="" srcset=""></div>
</body>
</html>