$(document).ready(function () {
    $('.jumpBtn').click(function () {
        var target_offset = $('#' + $(this).data('target')).offset();
        var target_top = target_offset.top;

        $('html, body').animate({
            scrollTop: target_top
        }, 800);
    });
});