
$('.Contact-form').on('click', function () {
    $('.Contact').addClass('show');
});
$('#Contact-close').on('click', function () {
    $('.Contact').removeClass('show');
});
$('.Menu-mobile').on('click', function () {
    $( ".Nav-mobile" ).toggleClass( "show" );
    $( this ).toggleClass( "show" );
    return false;
});
