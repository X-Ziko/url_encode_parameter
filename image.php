<?php
    include './inc/func.inc.php';//including function
    include './inc/img.inc.php';//including image array
?>

<?php include './views/header.view.php'; //including header ?> 

    <div class="box_container">
        <?php if(!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])): ?>
        <?php $image = $_GET['image'];?>
            <h3><?php echo X($imageTitles[$image]);?></h3>
                <img src="./image/<?php echo rawurldecode($image);?>" alt="<?php echo X($image);?>" class="image_box">
                    <p><?php echo X($imageDescription[$image]);?></p>
                <?php else:?>
                    
                    <div class="notice">
                        <h1>Item Nuked</h1>        
                    </div>
                <?php endif;?>
    <a href="index.php">Go Back</a>

    </div>






<?php include './views/footer.view.php'; //including footer ?>