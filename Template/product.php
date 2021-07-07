<?php
require 'database/DBController.php';
require 'function.php';
$get_product_data = get_Data($con,'Medicine');
$get_category_data = get_Data($con,'Category');
?>

<section class="product" id="product-top">
<?php foreach($get_category_data as $c){ ?>
    <h1 class="heading"><?php echo $c['c_name']?></h1>
    <div class="box-container">
    <?php foreach($get_product_data as $data){ ?>
        <div class="box" onclick="location.href='details.php'">
            <span class="offer">10% off</span>
            <img src="<?php echo $data['img_name'] ?? "images/ensure.png"?>" alt="">
            <h1><?php echo $data['m_name'] ?? "unknown"?></h1>
            <p id="price">Rs.<span id="del">70</span> <?php echo $data['price']?></p>
            <a href="#" class="btn">Add to Cart</a>     
        </div>
        <?php }?>
    </div>
	<?php }?>
</section>