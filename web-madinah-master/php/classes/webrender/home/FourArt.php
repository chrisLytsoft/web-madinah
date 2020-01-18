<?php
require_once __DIR__ .'/../../../mysql.php';
require_once __DIR__ .'/../../article/articleClass.php';
$sql = new sql();
$param = "";
$q = "select id from `article` order by id desc limit 4";
$param = [];
$row = $sql->select($q, $param);
$href =  $_SESSION["ip"];
?>

<html>

    <div class="row">
        <?php $art = new article($row[0][0]);?>
        <div class="maindiv col-12 col-md-6" id="one" onclick="window.location.href = '<?php  echo $href.'story.php?STORY='.$row[0][0];?>' " >
            <img class="imga" src="<?php echo $art->getPicture();  ?>" style="margin-right: 7px;float: left;" height="200px"
                 width="200px">
            <div class="">
                <h4><?php  echo $art->getTitle(); ?></h4>
                <p style="color: #009899;font-family: Nexa;font-weight: bold;font-size: 10px;text-align: left">Read
                    More</p>
            </div>
        </div>
                <?php $art = new article($row[1][0]) ?>
        <div class="maindiv col-12 col-md-6" id="one"  onclick="window.location.href = '<?php  echo $href.'story.php?STORY='.$row[1][0];?>' " >
            <img class="imga" src="<?php  echo $art->getPicture(); ?>" style="margin-right: 7px;float: left;" height="200px"
                 width="200px">
            <div class="">
                <h4><?php  echo $art->getTitle(); ?></h4>
                <p style="color: #009899;font-family: Nexa;font-weight: bold;font-size: 10px;text-align: left">Read
                    More</p>
            </div>
        </div>
    </div>
    <?php $art = new article($row[2][0]); ?>
    <div class="row ">
        <div class="maindiv col-12 col-md-6" id="one"  onclick="window.location.href = '<?php  echo $href.'story.php?STORY='.$row[2][0];?>' " >
            <img class="imga" src="<?php  echo $art->getPicture(); ?>" style="margin-right: 7px;float: left;" height="200px"
                 width="200px">
            <div class="">
                <h4><?php  echo $art->getTitle(); ?></h4>
                <p style="color: #009899;font-family: Nexa;font-weight: bold;font-size: 10px;text-align: left">Read
                    More</p>
            </div>
        </div>
        <?php $art = new article($row[3][0]); ?>
        <div class="maindiv col-12 col-md-6" id="one"  onclick="window.location.href = '<?php  echo $href.'story.php?STORY='.$row[3][0];?>' " >
            <img class="imga" src="<?php  echo $art->getPicture(); ?>" style="margin-right: 7px;float: left;" height="200px"
                 width="200px">
            <div class="">
                <h4><?php  echo $art->getTitle(); ?></h4>
                <p style="color: #009899;font-family: Nexa;font-weight: bold;font-size: 10px;text-align: left">Read
                    More</p>
            </div>
        </div>
    </div>
</html>
