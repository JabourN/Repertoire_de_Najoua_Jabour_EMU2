// cette ligne permet d'être sûr que le document est prêt à utiliser jQuery
$(function() {
    /*  
    Quand je clique sur un élément de la navigation, 
    le composant : 
    1. met en avant le lien sur lequel je viens de cliquer
    2. affiche l'image adéquate
    3. affiche le paragraphe adéquat
    */
    $('.js-links a').on('click', function(e) {
        // 1. Mettre en avant le lien sur lequel on clique :
        e.preventDefault(); // Pour pas que le click aille n'importe ou
        $('.js-links a').removeClass('active'); // Empêche que tout soit cliqué en même temps
        $(this).addClass('active'); // Ajouter la classe 'active' au lien sur lequel on a clique

    });

});