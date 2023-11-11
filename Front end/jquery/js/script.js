// cette ligne permet d'être sûr que le document est prêt à utiliser jQuery
$(function() {
    /*  
    Quand je clique sur un élément de la navigation, 
    le composant : 
    1. met en avant le lien sur lequel je viens de cliquer
    2. affiche l'image adéquate
    3. affiche le paragraphe adéquat
    */

   // 1. met en avant le lien sur lequel je viens de cliquer :
    $('.js-links a').on('click', function(e) {
        e.preventDefault(); // Pour pas que le click aille n'importe ou
        $('.js-links a').removeClass('active'); // Empêche que tout soit cliqué en même temps
        $(this).addClass('active'); // Ajouter la classe 'active' au lien sur lequel on a clique
    

    // 2. Afficher l'image adéquat :
// Récupérer l'index du lien et afficher l'image adéquat
var index = $(this).attr('data-index');
var imageUrl = 'https://place-hold.it/200x300/DDD/000/?text=' + index + '&bold&fontsize=34';

// Appeler la fonction pour afficher l'image
display_image(imageUrl, index);

});
 // Afficher l'image adéquat :
 function display_image(src, index) {
    var img = document.createElement("img");
    img.src = src;
    img.alt = 'Étape ' + index;
    
    // Effacer les images non adéquat
    $('.js-images').html('');
    $('.js-images').append(img);
}

   // 3. Affiche le paragraphe adéquat :
   

});