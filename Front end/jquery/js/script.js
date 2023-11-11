// cette ligne permet d'être sûr que le document est prêt à utiliser jQuery
$(function() {
    /*  
    Quand je clique sur un élément de la navigation, 
    le composant : 
    1. met en avant le lien sur lequel je viens de cliquer
    2. affiche l'image adéquate
    3. affiche le paragraphe adéquat
    */

   // 1. Mettre en avant le lien sur lequel on clique :
    $('.js-links a').on('click', function(e) {
        e.preventDefault(); // Pour pas que le click aille n'importe ou
        $('.js-links a').removeClass('active'); // Empêche que tout soit cliqué en même temps
        $(this).addClass('active'); // Ajouter la classe 'active' au lien sur lequel on a clique
    });

    // 2. Afficher l'image adéquat :
    function display_image(src, img) {
        var img = document.createElement("img");
        img.src = src;

        // Effacez le contenu du body avant d'ajouter la nouvelle image
        document.body.innerHTML = '';
        document.body.appendChild(img);
    }

    // Fonction pour gérer le clic sur les liens
    function handleLinkClick(event) {
        // Empêcher le comportement par défaut du lien
        event.preventDefault();

        // Récupérer l'index du lien
        var index = event.target.getAttribute('data-index');

        // Construire l'URL de l'image en fonction de l'index !!!FAIL!!!
        var imageUrl = 'https://place-hold.it/200x300/DDD/000/?text='+ index + '&bold&fontsize=34';
        
        // Appeler tous les paramètres précédent
        display_image(imageUrl, 200, 300 + index );
    }

    // Ajouter un gestionnaire d'événements à chaque lien
    var links = document.querySelectorAll('.nav-link');
    links.forEach(function(link) {
        link.addEventListener('click', handleLinkClick);
    });

});