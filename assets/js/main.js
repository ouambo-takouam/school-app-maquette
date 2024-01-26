var dropdownBtns = document.getElementsByClassName("dropdown__btn");

for (let i = 0; i < dropdownBtns.length; i++) {
  dropdownBtns[i].addEventListener("click", function () {
    var dropdownMenu = this.nextElementSibling;
    dropdownMenu.classList.toggle("open");
  });
}

/**--- Ajout et suppression de la classe 'active' sur les elements de navigation ---**/
const dropdownItems = document.querySelectorAll(".dropdown__item");

// Fonction pour gérer le clic sur un élément <li>
function toggleActiveClass() {
  // Retirer la classe 'active' de tous les éléments <li>
  dropdownItems.forEach((item) => {
    item.classList.remove("active");
  });

  // Ajouter la classe 'active' uniquement à l'élément cliqué
  this.classList.toggle("active");
}

// Ajout d'un écouteur d'événement au clic pour chaque élément <li>
dropdownItems.forEach((dropdownItem) => {
  dropdownItem.addEventListener("click", toggleActiveClass);
});
