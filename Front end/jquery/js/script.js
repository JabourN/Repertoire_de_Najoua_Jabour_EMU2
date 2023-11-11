// cette ligne permet d'être sûr que le document est prêt à utiliser jQuery
$(function() {
    // 1. Mettre en avant le lien sur lequel je viens de cliquer :
    $('.js-links a').on('click', function(e) {
        e.preventDefault(); // Pour éviter que le clic aille n'importe où
        $('.js-links a').removeClass('active'); // Empêcher que tout soit cliqué en même temps
        $(this).addClass('active'); // Ajouter la classe 'active' au lien sur lequel on a cliqué

        // 2. Afficher l'image adéquate :
        // Récupérer l'index du lien
        var index = $(this).attr('data-index');
        
        // Récupérer l'attribut 'src' de l'image correspondante
        var src = $('.js-images img[data-index="' + index + '"]').attr('src');

        // Appeler la fonction pour afficher l'image
        display_image(src);
    });

    // 3. Afficher le paragraphe adéquat :
});

// Fonction pour afficher l'image adéquate
function display_image(src) {
    // Créer un élément img
    var img = document.createElement("img");
    
    // Mettre l'attribut 'src' en tant que source de l'image
    img.src = src;

    // Effacer les images non adéquates
    $('.js-images').html('');
    
    // Ajouter l'image à l'élément avec la classe 'js-images'
    $('.js-images').append(img);
}
