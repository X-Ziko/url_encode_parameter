<?php
include './inc/func.inc.php';//including function
include './inc/img.inc.php';//including image array
?>

<?php include './views/header.view.php'; //including header ?> 

<div class="image_container">

    <?php foreach($imageTitles AS $src => $title):?>
        <a href="image.php?<?php echo http_build_query(['image' => $src]);//Image Url ?>" class="image-element">
            <h3><?php echo X($title);?></h3>
                <img src="./image/<?php echo rawurldecode($src);?>" alt="<?php echo X($title);?>">
        </a>
    <?php endforeach;?>

</div>


<?php include './views/footer.view.php'; //including footer ?>