$("#slideshow_container > div:gt(0)").hide();
setInterval(function () {
    $('#slideshow_container > div:first')
        .fadeOut(2000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slideshow_container');
}, 5000);