<?php
require_once __DIR__ .'/../../../mysql.php';
require_once __DIR__ .'/../../article/articleClass.php';
$sql = new sql();
$q = "select id from `article` order by id desc limit 10";
$param = [];
$row = $sql->select($q, $param);
$art;
?>
<html>
    <div id='all'>
        <?php
        $i = 0;

        foreach ($row as $r) {
            $art = new article($r[0]);
            if ($i % 2) {
                ?>
                <div class="maindiv col-12 col-md-6" id="one"  onclick="window.location.href = '<?php  echo './story.php?STORY='.$r[0];?> '">
                    <img class="newsI" src="<?php echo $art->getPicture(); ?>" style="margin-right: 7px;float: left;" height="200px"
                         width="200px">
                    <div class="">
                        <h4><?php echo $art->getTitle(); ?></h4>
                        <p style="color: #009899;font-family: Nexa;font-weight: bold;font-size: 10px;text-align: left">
                            Read
                            More</p>
                    </div>
                </div>
            </div>
        <?php } else {
            ?>
            <div class="row">
                <div class="maindiv col-12 col-md-6" id="one" onclick="window.location.href = '<?php  echo './story.php?STORY='.$r[0];?> '">
                    <img class="newsI" src="<?php echo $art->getPicture(); ?>" style="margin-right: 7px;float: left;" height="200px"
                         width="200px">
                    <div class="">
                        <h4><?php echo $art->getTitle(); ?></h4>
                        <p style="color: #009899;font-family: Nexa;font-weight: bold;font-size: 10px;text-align: left">
                            Read
                            More</p>
                    </div>
                </div>
                <?php } ?>


            <?php $i++;
            
        } ?>

    </div>
</html>

