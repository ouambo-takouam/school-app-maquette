window.onload = function() {
    // Sélectionner les deux divs 'box__content'
    var boxContents = document.querySelectorAll('.box__content');
    if (boxContents.length >= 2) {
      // Masquer initialement les éléments du deuxième 'box__content' à l'exception du 'box__header'
      Array.from(boxContents[1].children).forEach(function(child) {
        if (!child.classList.contains('box__header')) {
          child.style.display = 'none';
        }
      });
  
      // Gérer le clic sur le premier bouton "Suivant"
      var firstNextButton = document.getElementById('firstNextButton');
      if (firstNextButton) {
        firstNextButton.addEventListener('click', function() {
          // Masquer les éléments du premier 'box__content'
          Array.from(boxContents[0].children).forEach(function(child) {
            child.style.display = 'none';
          });
  
          // Afficher les éléments du deuxième 'box__content'
          Array.from(boxContents[1].children).forEach(function(child) {
            child.style.display = '';
          });
        });
      }
  
      // Gérer le clic sur le deuxième bouton "Suivant"
      var secondNextButton = document.getElementById('secondNextButton');
      if (secondNextButton) {
        secondNextButton.addEventListener('click', function() {
          // Masquer à nouveau les éléments du deuxième 'box__content', à l'exception du 'box__header'
          Array.from(boxContents[1].children).forEach(function(child) {
            if (!child.classList.contains('box__header')) {
              child.style.display = 'none';
            }
          });
        });
      }
    }
  };
  