
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
$('.Nav-mobile li').on('click', function () {
    $( ".Nav-mobile" ).toggleClass( "show" );
    $( '.Menu-mobile' ).toggleClass( "show" );
    return false;
});
