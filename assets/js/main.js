var dropdownBtns = document.getElementsByClassName("dropdown__btn");

for (let i = 0; i < dropdownBtns.length; i++) {
  dropdownBtns[i].addEventListener("click", function () {
    var dropdownMenu = this.nextElementSibling;
    dropdownMenu.classList.toggle("open");
  });
}

// ACTIVATION DES ELEMENTS DE NAVIGATION
const dropdownItems = document.querySelectorAll(".dropdown__item");
const detailsNavItems = document.querySelectorAll(".details__navigation__item");
const tableRowBtns = document.querySelectorAll(".table__row__btn");

dropdownItems.forEach(function (dropdownItem) {
  dropdownItem.addEventListener("click", function () {
    toggleActiveClass(dropdownItem, dropdownItems);
  });
});

tableRowBtns.forEach(function (tableRowBtn) {
  tableRowBtn.addEventListener("click", function () {
    toggleActiveClass(tableRowBtn, tableRowBtns);
  });
});

detailsNavItems.forEach(function (detailsNavItem) {
  detailsNavItem.addEventListener("click", function () {
    toggleActiveClass(detailsNavItem, detailsNavItems);
  });
});

function toggleActiveClass(clickedItem, items) {
  // Remove 'active' class from all buttons
  items.forEach(function (item) {
    item.classList.remove("active");
  });

  // Toggle 'active' class on the clicked button
  clickedItem.classList.toggle("active");

  clickedItem.nextElementSibling.classList.toggle("visible");
}

// // OUVERTURE ET FERMETURE DU MODAL

// // Get the modal
// var modal = document.getElementById("myModal");

// // Get the button that opens the modal
// var btn = document.getElementById("deactivate");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on the button, open the modal
// btn.onclick = function () {
//   modal.style.display = "block";
// };

// // When the user clicks on <span> (x), close the modal
// span.onclick = function () {
//   modal.style.display = "none";
// };

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };



/** GESTION DU DRAG AND DROP */
const draggables = document.querySelectorAll(".draggable");
const containers = document.querySelectorAll(".container");
console.log(containers);

draggables.forEach(function (draggable) {
  draggable.addEventListener("dragstart", function () {
    draggable.classList.add("dragging");
  });

  draggable.addEventListener("dragend", function () {
    draggable.classList.remove("dragging");
  });
});

containers.forEach(function (container) {
  container.addEventListener("dragover", function (e) {
    e.preventDefault();

    const afterElement = getDragAfterElement(container, e.clientY);
    const draggable = document.querySelector(".dragging");

    if (afterElement == null) {
      container.appendChild(draggable);
    } else {
      container.insertBefore(draggable, afterElement);
    }
  });
});

function getDragAfterElement(container, y) {
  const draggableElements = [
    ...container.querySelectorAll(".draggable:not(.dragging)"),
  ];

  return draggableElements.reduce(
    (closest, child) => {
      const box = child.getBoundingClientRect();
      const offset = y - box.top - box.height / 2;

      if (offset < 0 && offset > closest.offset) {
        return { offset: offset, element: child };
      } else {
        return closest;
      }
    },
    { offset: Number.NEGATIVE_INFINITY }
  ).element;
}