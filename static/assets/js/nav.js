$(document).ready(function () {
    var pathname = window.location.pathname;

    if (pathname == "./") {
        $("#nav1").addClass("Active");
        $("#nav2").removeClass("Active");
        $("#nav3").removeClass("Active");
    }
    if (pathname == "./news") {
        $("#nav2").addClass("Active");
        $("#nav1").removeClass("Active");
        $("#nav3").removeClass("Active");
    }
    if (pathname == "./TV") {
        $("#nav3").addClass("Active");
        $("#nav1").removeClass("Active");
        $("#nav2").removeClass("Active");
    }
});
$(document).ready(function () {

    $.ajax({
        url: '/host',
        type: "post",
        success: function (resp) {
            $("div#host").html("");
            $("div#host").append(resp.host);
        }
    });

    $(document).ready(function () {
        if ($(window).width() < 768) {
            $("#HeaderCont").removeClass("justify-content-center");
        }
    });


});

window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-135443048-1');