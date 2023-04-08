document.querySelector("#btnSuppr").addEventListener('click', (event) => {
  // Affichage de la fenetre modale 
  const modal = document.querySelector("#modal");
  modal.classList.add('visible');

  // Evenement qui ferme la fenetre modale si on clique autour
  modal.addEventListener("click", function (e) {
    // Vérifier si le clic est sur l'élément modal
    if (e.target === modal) {
      // Fermer la fenêtre modale
      modal.classList.remove('visible');
    }
  });

  document.getElementById('refuse').addEventListener("click", function (e) {
    // Fermer la fenêtre modale
    modal.classList.remove('visible');
  });
});