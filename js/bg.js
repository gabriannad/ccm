if( !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {

    $(document).ready(function(){
        if ($(window).width() > 584) {
            $('#bg').width($(window).width() - 240);
        } else {
            $('#bg').width('100%');
        }
    });


    $(window).resize(function(){
        if ($(window).width() > 584) {
            $('#bg').width($(window).width() - 240);
        } else {
            $('#bg').width('100%');
        }
    });
}