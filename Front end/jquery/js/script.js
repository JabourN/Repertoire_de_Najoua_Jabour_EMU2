// cette ligne permet d'être sûr que le document est prêt à utiliser jQuery
$(function() {
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
 function display_image(src) {
    var img = document.createElement("img");
    img.src = src;
    
    // Effacer les images non adéquat
    $('.js-images').html('');
    $('.js-images').append(img);
}
   // 3. Affiche le paragraphe adéquat :

});