<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$href = $_SESSION["ip"];
?>
<html>
    <div id="Desktop" class="row "  >
        <div class="col-md-4 d-flex justify-content-end">
            <a href="./">
                <img alt="Brand" src="static/LogoP.png" height="150px" width="150px">
            </a>
        </div>
        <div class="col-md-4">
            <div class="container d-flex justify-content-center" style="height: 70px;padding-top: 50px">
                <a><img src="static/Gray/facebook.png" style="float: left;margin-top: 20px;margin-right: 10px;"
                        width="28px"
                        height="28px"></a>
                <a><img src="static/Gray/instagram.png" style="float: left;margin-top: 20px;margin-right: 10px;"
                        width="28px" height="28px"></a>
                <a href="https://www.youtube.com/channel/UCFbGpMHsaJcgt1k4huR-6Qg/featured"><img
                        src="static/Gray/youtube.png"
                        style="float: left;margin-top: 20px;margin-right: 10px;"
                        width="28px"
                        height="28px"></a>
                <a href="https://api.whatsapp.com/send?phone=27635130363"><img src="static/Gray/whatsapp.png"
                                                                               style="float: left;margin-top: 20px;margin-right: 10px;"
                                                                               width="28px"
                                                                               height="28px"></a>
                <a><img src="static/Gray/twitter.png" style="float: left;margin-top: 20px;margin-right: 10px;"
                        width="28px"
                        height="28px"></a>
            </div>
        </div>
        <div class="col-md-4" style="background-image: url(static/Radio.png);background-repeat: no-repeat;height: 150px;padding-top: 50px">

        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #009899;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" >
            <div class="container d-flex justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./tv.php">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
</html>

