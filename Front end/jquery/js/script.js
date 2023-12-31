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
var src = $('.js-images img[data-index="' + index + '"]').attr('src');

// Appeler la fonction pour afficher l'image
display_image(src);
display_paragraphe(index);
});

 // Afficher l'image adéquat :
 function display_image(src) {
    $('.js-images img').removeClass('active');
    
    // Ajouter la classe 'active' à l'image correspondante
    $('.js-images img[src="' + src + '"]').addClass('active');

}
   // 3. Affiche le paragraphe adéquat :
   function display_paragraphe(index) {
    $('.js-text article').removeClass('active');
    $('.js-text article[data-index="' + index + '"]').addClass('active');
  }
});