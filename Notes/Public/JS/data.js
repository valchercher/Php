fetch('http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=Gestions_des_notes')
  .then(response => response.json())
  .then(data => {
    // Traitement des données reçues
    console.log(data);
  })
  .catch(error => {
    // Gestion des erreurs
    console.error('Une erreur s\'est produite:', error);
  });
