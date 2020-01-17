<html>
    <head>
        <?php
        require_once './static/templates/meta.html';
        require_once './php/classes/article/articleClass.php';
        $story = $_GET['STORY'];
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['currentStory'] = $story;
        ?>

    </head>

    <style>

        h1{
            font-family: "Helvetica Neue";
            font-size: 30px;
            font-weight: bold;
        }
        @media (max-width: 700px) {
            #img1{
                height: 250px;
                width: 100%;
            }
            h4{

                font-family: "Helvetica Neue";
                font-size: 14px;
                font-weight: bold;
            }
        }

    </style>
    <body>
        <?php
        require_once './static/templates/nav.php';
        ?>
        <div id ="back" class = "row" style="background-color:#f2f2f2;height: 35px;cursor: pointer;" onclick="window.location.href = './news.php'">
            <div class ="container">
                <a><img src='static/back.png' style='margin-top:5px;margin-left:15px;float: left' height='18px' width='18px'></a> <h6 style="margin-top:1px;margin-left:13px;font-family: 'Helvetica Neue';font-size:22px;font-weight: bold;color: #009899"> NEWS</h6>
            </div>
        </div>
        <div class="container" style="margin-bottom:20px">

            <div class="row">
                <?php require_once './php/classes/webrender/story/article.php'; ?>

                <?php require_once './php/classes/webrender/story/Trending.php'; ?>  

            </div>
        </div>
        <?php
        require_once './static/templates/footer.html';
        ?>
    </body>
</script>
</html>