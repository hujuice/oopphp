$(document).ready(function() {
    // Mostra/nasconde la mappa dei file
    $('.filemap').siblings('.fa').on('click', function() {
        $(this).toggleClass('fa-plus-square-o').toggleClass('fa-minus-square-o');
        $(this).siblings('.filemap').fadeToggle();
    });
});
