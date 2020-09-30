$(document).ready(function () {

    $(function () {
        $(".sortable").sortable({
            delay: 150
        });
        $(".sortable").disableSelection();
    });

});

$("#save-order").click(function () {

    var dark = new Array();
    $('#dark>li').each(function () {
        dark.push($(this).text().replace(/ /g, ''));
    });
    var light = new Array();
    $('#light>li').each(function () {
        light.push($(this).text().replace(/ /g, ''));
    });
    $('input[name="dark"').val(dark);
    $('input[name="light"').val(light);

});

