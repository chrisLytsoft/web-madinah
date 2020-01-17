<html>
<head>
<?php 
require_once './static/templates/meta.html';

?>
    <link href="static/assets/css/news.css" rel="stylesheet">
    <script src="static/assets/js/news.js"></script>
</head>
<body>
    <?php 
    require_once './static/templates/nav.php';
    ?>
  
   

    <div class="container">
      <?php require_once './php/classes/webrender/news/articles.php';?>
        <img id="load" class="loading" src="static/load.gif" style="position: sticky;bottom: 10%;left:48%" height="40px" width="40px">

    </div>

    </body>

  
    <script>
        
        $(document.body).bind('swipeleft', function (e) {
            var pathname = window.location.pathname;
            if (pathname == "/news") {
                window.location.href = "/news/South Africa";
            }
            if (pathname == "/news/South%20Africa") {
                window.location.href = "/news/World";
            }
            if (pathname == "/news/International") {
                window.location.href = "/news/Islam";
            }
            if (pathname == "/news/Islam") {
                window.location.href = "/news/Humanity";
            }
            if (pathname == "/news/Humanity") {
                window.location.href = "/news/columns";
            }

        });
        $(document.body).bind('swiperight', function (e) {
            var pathname = window.location.pathname;
            if (pathname == "/news/South%20Africa") {
                window.location.href = "/news";
            }
            if (pathname == "/news/International") {
                window.location.href = "/news/South Africa";
            }
            if (pathname == "/news/Islam") {
                window.location.href = "/news/World";
            }
            if (pathname == "/news/Humanity") {
                window.location.href = "/news/Islam";
            }
            if (pathname == "/news/columns") {
                window.location.href = "/news/Humanity";
            }


        });


        $(document.body).on('touchmove', onScroll); // for mobile
        $(window).on('scroll', onScroll);
        var canLoad = true;

        


        $(document).ready(function () {
            var pathname = window.location.pathname;

            if (pathname == "/news") {
                $("#news1").addClass("ActiveSub");
                $("#news2").removeClass("ActiveSub");
                $("#news3").removeClass("ActiveSub");
                $("#news4").removeClass("ActiveSub");
                $("#news5").removeClass("ActiveSub");
                $("#news6").removeClass("ActiveSub");
            }
            if (pathname == "/news/South%20Africa") {

                $("#news2").addClass("ActiveSub");
                $("#news1").removeClass("ActiveSub");
                $("#news3").removeClass("ActiveSub");
                $("#news4").removeClass("ActiveSub");
                $("#news5").removeClass("ActiveSub");
                $("#news6").removeClass("ActiveSub");
            }
            if (pathname == "/news/World") {

                $("#news3").addClass("ActiveSub");
                $("#news2").removeClass("ActiveSub");
                $("#news1").removeClass("ActiveSub");
                $("#news4").removeClass("ActiveSub");
                $("#news5").removeClass("ActiveSub");
                $("#news6").removeClass("ActiveSub");
            }
            if (pathname == "/news/Islam") {

                $("#news4").addClass("ActiveSub");
                $("#news2").removeClass("ActiveSub");
                $("#news3").removeClass("ActiveSub");
                $("#news1").removeClass("ActiveSub");
                $("#news5").removeClass("ActiveSub");
                $("#news6").removeClass("ActiveSub");
            }
            if (pathname == "/news/Humanity") {

                $("#news5").addClass("ActiveSub");
                $("#news2").removeClass("ActiveSub");
                $("#news3").removeClass("ActiveSub");
                $("#news4").removeClass("ActiveSub");
                $("#news1").removeClass("ActiveSub");
                $("#news6").removeClass("ActiveSub");
            }
            if (pathname == "/news/columns") {

                $("#news6").addClass("ActiveSub");
                $("#news2").removeClass("ActiveSub");
                $("#news3").removeClass("ActiveSub");
                $("#news4").removeClass("ActiveSub");
                $("#news5").removeClass("ActiveSub");
                $("#news1").removeClass("ActiveSub");
            }
        });


    </script>
    </html>
