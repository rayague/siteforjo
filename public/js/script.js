// Fonction pour faire défiler la page vers le haut
function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth" // Pour un défilement en douceur
    });
  }
  
  // Affiche/masque le bouton en fonction de la position de défilement
  window.addEventListener("scroll", function () {
    var backToTopBtn = document.getElementById("back-to-top-btn");
  
    if (window.pageYOffset > 100) { // Vous pouvez ajuster cette valeur selon votre préférence
      backToTopBtn.style.display = "block";
    } else {
      backToTopBtn.style.display = "none";
    }
  });
  


    function showFullFooter() {
      const fullFooter = document.querySelector('.full-footer');
      const showFullFooterBtn = document.querySelector('#show-full-footer-btn');
  
      if (fullFooter.style.display === 'block') {
          fullFooter.style.display = 'none';
          showFullFooterBtn.innerText = 'Afficher le footer complet';
      } else {
          fullFooter.style.display = 'block';
          showFullFooterBtn.innerText = 'Masquer le footer complet';
      }
  }


  function toggleSearchBar() {
    var searchBar = document.getElementById("search-bar");

    // Basculer la visibilité de la barre de recherche
    searchBar.classList.toggle("d-none");

    // Mettre le focus sur la barre de recherche si elle est visible
    if (!searchBar.classList.contains("d-none")) {
      searchBar.focus();
    }
  }

  // $(document).ready(function () {
  //   // Sélectionnez l'icône de recherche et le champ de recherche
  //   var searchIcon = $(".fa-search");
  //   var searchBar = $("#search-bar");
  
  //   // Gérez le clic sur l'icône de recherche
  //   searchIcon.click(function () {
  //     searchBar.toggleClass("d-none"); // Basculer la visibilité de la barre de recherche
  //     if (!searchBar.hasClass("d-none")) {
  //       searchBar.focus(); // Mettre le focus sur la barre de recherche
  //     }
  //   });
  // });
  
  // $(document).ready(function () {
  //   // Sélectionner l'icône de recherche
  //   var searchIcon = $(".fa-search");
  
  //   // Sélectionner la barre de recherche
  //   var searchBar = $("#search-bar");
  
  //   // Gérer le clic sur l'icône de recherche
  //   searchIcon.click(function () {
  //     // Basculer la visibilité de la barre de recherche
  //     searchBar.toggleClass("d-none");
  
  //     // Mettre le focus sur la barre de recherche
  //     if (!searchBar.hasClass("d-none")) {
  //       searchBar.focus();
  //     }
  //   });
  // });
  