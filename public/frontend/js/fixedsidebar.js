$(document).ready(function() {
    // check where the shoppingcart-div is
    var offset = $('#sidebar').offset();
    console.log(offset.top);
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        console.log(scrollTop);
        // check the visible top of the browser
        if (offset.top<scrollTop) {
            $('#sidebar').addClass('fixed');
        } else {
            $('#sidebar').removeClass('fixed');
        }
    });
});