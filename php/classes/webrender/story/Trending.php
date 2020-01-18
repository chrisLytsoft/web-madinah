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
    <div  style="border:1px;border-style: solid;;border-color: #009899" class="col-md-3 col-0">
        <h3 class="text-center">Trending Stories</h3>
    <?php 
    foreach ($row as $r){
    $art = new article($r[0]);    
    ?>
        
        <div  id = "one" style="cursor: pointer" onclick="window.location.href = '<?php  echo $href.'story.php?STORY='.$r[0];?>' " class="media">
            <a class="pull-left" href="#">
                <img src="<?php echo $art->getPicture() ?>" class="media-object p-3" data-src="holder.js/60x60"
                     height="100px" width="100px">
            </a>
            <div class="media-body">
                <h6 class="media-heading"><?php echo $art->getTitle() ?></h6>
                <p nclick="window.location.href = '<?php  echo $href.'story.php?STORY='.$r[0];?>' " style="color: #009899;font-family: Nexa;font-weight: bold;font-size: 10px;text-align: left" >read more</p>
            </div>
        </div>
    <?php }?>

    </div>
</html>
