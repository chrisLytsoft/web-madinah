
$('Document').ready(function () {
    $(window).scroll(function () {
         canLoad = true;
        if ($(window).scrollTop() + window.innerHeight >= document.body.scrollHeight - 600) {
            if (canLoad) {
                canLoad = false;
                $("#load").removeClass("loading");
                var pathname = window.location.pathname;
                var nb = $(".maindiv").length;
                $.ajax({
                    url: './php/classes/webrender/news/newNews.php',
                    type: "post",
                    data: {ID: nb},
                    success: function (resp) {
                            $("#all").append(resp);
                            canLoad = true;
                            $("#load").addClass("loading");
                       
                    },
                });
                // ajax call get data from server and append to the div
            }
        }
    })

})
