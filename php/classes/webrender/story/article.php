<?php
require_once __DIR__ . '/../../article/articleClass.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$story = $_SESSION['currentStory'];
$art = new article($story);
$news = $art->getArticle();
$news = nl2br($news);
$news = mb_convert_encoding($news, "UTF-8");
?>
<html>

    <div >
        <h1 class="text-center" style="font-size: 50px"><?php echo $art->getTitle(); ?></h1>
    </div>
    <div class="col-12 col-md-9">
        <p style="color:#B8B8B8 ">Editor <?php echo $art->getEditor(); ?> </p>
        <div style="background-color: #F5F5F5"><img id="img1" src="<?php echo $art->getPicture(); ?>" height="450px" width="100%%" alt="<?php echo $art->getTitle(); ?>">
            <p class="text-center" style="color: #B8B8B8">
                Message About the picture
            </p>
        </div>
        
        <p style="font-family: 'Helvetica Neue'; color: gray"><?php echo $art->getShortPiece(); ?></p>
        <p style="font-family: 'Helvetica Neue'"><?php echo $news; ?></p>
    </div>
</html>
