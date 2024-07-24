$(document).on('click', '.ourPeople__blockWrap', function() {
    if($('.windowHeightCheck').css('display') == 'none') {
        $(this).toggleClass('ourPeople__blockWrap-active');
    }
});
$(document).on('mouseenter', '.ourPeople__blockWrap', function() {
    if($('.windowHeightCheck').css('display') != 'none') {
        $('.ourPeople__blockWrap').not($(this)).removeClass('ourPeople__blockWrap-active');
        $(this).addClass('ourPeople__blockWrap-active');
    }
});
$(document).on('mouseleave', '.ourPeople__blockWrap', function() {
    if($('.windowHeightCheck').css('display') != 'none') {
        $('.ourPeople__blockWrap').removeClass('ourPeople__blockWrap-active');
    }
});