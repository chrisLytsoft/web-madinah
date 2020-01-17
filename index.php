<html>
    <head>
        <?php
        require_once './static/templates/meta.html';
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION["ip"] = "/madinah/";
        ?>
    </head>

   <?php
        require_once './static/templates/nav.php';
        ?>
    <body>
     
        <div class="container" id='All'>


            <?php
            require_once './php/classes/webrender/home/FourArt.php';
            ?>



            <div style="background-image: url(static/bar.png); margin-bottom: 22px; background-repeat: no-repeat; background-size: 95% 24px; height: 24px">
                <h1 style="text-align: center;color: white;font-family: 'Nexa'; font-size: 20px; font-weight: bold">
                    RADIO</h1>
            </div>
            <?php require_once './php/classes/webrender/home/shows.php'; ?>
            <div style="background-image: url(static/bar.png); margin-bottom: 22px; background-repeat: no-repeat; background-size: 95% 24px;height: 24px"
                 width="80%">
                <h1 style="text-align: center;color: white;font-family: 'Nexa'; font-size: 20px; font-weight: bold">
                    ABOUT US</h1>
            </div>
            <div class="col-12  d-flex justify-content-center" style="margin-bottom: 22px">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/texbl4-Hoes" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="row" style="margin-bottom: 20px">

                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="static/Logo1.png" alt="Responsive image" width="300px" height="300px">
                </div>
                <div class="col-12 col-md-4">
                    <div class="row pl-4">
                        <div style="display: inline-block">
                            <img src="static/location.png" style="margin-right: 5px;" width="20px" height="30px">
                        </div>
                        <div style="display: inline-block">
                            <p style="color: grey">Madinah<br>
                                first floor, 330 Carmine St,<br>
                                Laudium, Centurion,<br>
                                Gauteng South Africa, 0037<br><br>
                            </p>
                        </div>
                    </div>
                    <div class="row pl-3">
                        <div style="display: inline-block">
                            <img src="static/tel.png" style="margin-right: 5px" width="30px" height="30px">
                        </div>
                        <div style="display: inline-block">
                            <p style="color: grey"><a style="color: grey" href="tel:012 374 1584"> 012 374 1584</a><br>
                                <a style="color: grey" href="tel:079 374 1684">079 374 1684</a>(Direct Studio No)<br>
                                Fax: 012 374 24880
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224.53200066625246!2d28.10070480316996!3d-25.786677251162693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957d2558af115f%3A0xc73dbe0e551c8ad0!2sRadio+1584!5e0!3m2!1sen!2sza!4v1550616384475"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

<?php
require_once './static/templates/footer.html';
?>
    </body>
</html>
