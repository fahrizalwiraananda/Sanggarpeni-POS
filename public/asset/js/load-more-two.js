
$( document ).ready(function () {
    $(".moreBox2").slice(0, 10).show();
    if ($(".blogBox2:hidden").length != 0) {
        $("#loadMore2").show();
    }		
    $("#loadMore2").on('click', function (e) {
        e.preventDefault();
        $(".moreBox2:hidden").slice(0, 5).slideDown();
        if ($(".moreBox2:hidden").length == 0) {
            $("#loadMore2").fadeOut('slow');
        }
    });
});
    