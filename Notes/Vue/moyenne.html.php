<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
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
    <div class="container ">
        <form>
            <div class="container p-5 "></div>
            <div class="container border" style="display:flex;justify-content:center;aligns-items:center margin-top:25px">
                <h2> <?= $classes['classe'];?></h2>
                <input type="hidden" name="" id="idclasse" value="<?= $classes['id_classe']?>">
            </div>
            <!-- <div style="display:flex;justify-content:center;aligns-items:center margin-top:25px">effectifs</div>
            <div style="display:flex;justify-content:center;aligns-items:center margin-top:25px">moyenne</div> -->
            <hr></hr>
            <div class="row">
                <div class="col-md-1">
                    <label for=""></label>
                    <div class="form-group">                       
                       <a href="/Coefficient/afficher/<?= $classes['id_classe'];?>"> <span  class="form-control btn-primary text-white" id="input1" value="">Retour</span></a>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for=""></label>
                        <button class="form-control bg-success text-white" id="input2" value=>Coeff</button>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="selectdisciplin"><b>Discipline:</b></label>
                        <select class="form-control" id="selectDiscipline">
                            <option value="">---Sélectionner---</option>
                            <?php foreach($disciplines as $discipline):;?>
                            <option value="<?= $discipline['id_Discipline']?>"><?=$discipline['libelle'];?></option>
                            <?php endforeach;?>
                            <!-- <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option> -->
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="selectsemestre"><b>Semestre:</b></label>
                        <select class="form-control" id="select2">
                        <option value="">---Sélectionner---</option>
                           <?php foreach($semestres as $semestre):;?>
                           <option value=""><?= $semestre['libelle']?></option>
                           <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""><b>Note de :</b></label>
                        <select class="form-control" id="selectNote">
                        <option value="">---Sélectionner---</option>
                           <option value="">Examens</option>
                           <option value="A">ressources</option>
                        </select>
                    </div>
                </div>
            </div>
            <b><hr></b>
            <hr>
            <table  class="table table-bordered">
                <thead>
                   <tr>
                        <th scope="col"><b>Photo:</b></th>
                        <th scope="col"><b>Prenom:</b></th>
                        <th scope="col"><b>Nom:</b></th>
                        <th scope="col"><b>Note:</b></th>
                   </tr>
                </thead>
                <tbody>
                    <?php foreach($eleves as $eleve):?>
                    <tr>
                        <td class="imageeleve" ></td>
                        <td class=""><?=$eleve['prenom'];?></td>
                        <td class=""><?=$eleve['nom'];?></td>
                        <td class="control"><input type="number">/<span class="NoteRE"></span></td>
                    
                    <?php endforeach;?>                  
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary d-flex justify-content-end">Envoyer</button>
            </div>
        </form>
    </div>
    <script src="/JS/scriptmoyenne.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
</body>
</html>