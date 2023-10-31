

        // // Code JavaScript pour cacher l'animation de chargement après un délai
        // window.addEventListener('load', function () {
        //     var loaderContainer = document.getElementById('loader-container');
        //     setTimeout(function () {
        //         loaderContainer.style.display = 'none';
        //     }, 2000); // 2000 millisecondes (2 secondes) de délai
        // });

            // Fonction pour afficher ou masquer le footer en fonction de la position de défilement
    function afficherOuMasquerFooter() {
        var footer = document.getElementById("footer");
        var windowHeight = window.innerHeight;
        var bodyHeight = document.body.offsetHeight;
        var scrollPosition = window.scrollY || window.pageYOffset;

        if (scrollPosition + windowHeight >= bodyHeight) {
            footer.style.display = "block"; // Afficher le footer lorsque l'utilisateur atteint le bas
        } else {
            footer.style.display = "none"; // Masquer le footer lorsque l'utilisateur remonte
        }
    }

    // Écouter l'événement de défilement de la page
    window.addEventListener("scroll", afficherOuMasquerFooter);