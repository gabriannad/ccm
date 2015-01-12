if( !(/iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {

    $(window).resize(function(){
        if ($(window).width() > 584) {
            $('#bg').width($(window).width() - 240);
        } else {
            $('#bg').width('100%');
        }
    });
}