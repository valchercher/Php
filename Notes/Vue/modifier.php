<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enregistrer</title>
</head>
<body>
    <div class="content">
        <div class="dashboard">
           <div class="user">
            <img src="./images.png" alt="" srcset="" id="use">
           </div>
          <div class="dash">
            <div>
                <a href="">ÉLÈVE</a>
                <!-- <select name="" id="">
                    <option for=""></option>
                    <option>Ajouter</option>
                    <option>Lister</option>
                    <option>Modifier</option>
                </select> -->
               </div>
                <div>
                    <a href="">CLASSE</a>
                <!-- <select name="" id="">
                    <option for=""></option>
                    <option>Ajouter</option>
                    <option>Lister</option>
                    <option>Modifier</option>
                </select> -->
                </div>
                <div>
                    <a href="">INCRIPTION</a>
                    <!-- <select name="" id="">
                        <option for=""></option>
                        <option>Ajouter</option>
                        <option>Lister</option>
                        <option>Modifier</option>
                    </select> -->
                </div>
                <div>
                    <a href="">ANNÉE</a>
                <!-- <select name="" id="">
                    <option for=""></option>
                    <option>Ajouter</option>
                    <option>Lister</option>
                    <option>Modifier</option>
                </select> -->
                </div>
          </div>
        </div>
        <div class="main1">
            <form action="" method="post">
            <div class="enreg">
                <form action="" method="post">
                <div class="enregeleve">
                    <h1>MODIFIER ÉLÈVE</h1>
                        <div id="nom">
                            <label for="">Nom:</label>
                        <input type="text">
                        </div>
                        <div id="prenom">
                            <label for="">Prenom:</label>
                            <input type="text">
                        </div>
            
                        <div id="clss">
                            <label for="">Niveau:</label>
                             <input type="text">
                        </div>
                        <div class="type">
                            <label for="" id="typ">Type d'élève</label>
                            <select name="" id="selection">
                                <option value="">---</option>
                                <option value="">Interne</option>
                                <option value="">Externe</option>
                            </select>
                        </div>
                        <div class="type">
                            <label for="" id="typeEnseig">Enseignement</label>
                            <select name="" id="selectionner">
                                <option value="">---</option>
                                <option value="">primaire</option>
                                <option value="">secondaire inférieur</option>
                                <option value="">secondiare supérieur</option>
                            </select>
                        </div>
                        <div id="valid">
                            <button type="submit" id="enregistre">Enregistrer</button>
                            <button type="submit" id="annuler">Annuler</button>
                        </div>                  
                    </div>
                </form> 
            </div>
           </form>
        </div>
    </div>
</body>
</html>