
(function ($) {
    "use strict";
    let back = $('#backHome');
    back.on("click", function() {
        window.location.href = window.origin;
    });
    let time = 5;
    setTimeout(function() {
        window.location.href = window.origin;
    }, 5000);

    let seconds = 5, $seconds = document.querySelector('#countdown');
    (function countdown() {
        $seconds.textContent = seconds + ' segundo' + (seconds == 1 ?  '' :  's');
        if(seconds --> 0) setTimeout(countdown, 1000)
    })();

})(jQuery);
