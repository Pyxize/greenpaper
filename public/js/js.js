$(document).ready(function() {
    $('a[href]').click(function() {
        var cible = $(this).attr('href');
        var hauteur = $(cible).offset().top;
        $('html, body').animate({scrollTop: hauteur}, 1000);
    });
});
