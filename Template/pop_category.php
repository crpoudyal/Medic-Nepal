<?php 
require 'database/DBController.php';
require 'function.php';
$get_category_data = get_Data($con,'Category');
?>


<section class="category" id="category">
    <h1 class="heading"> Popular <span>Category</span> </h1><br/>
    <div class="box-container">
    <?php foreach($get_category_data as $c){ ?>
        <div class="box">
            <div class="content">
                <img src="images/covid.png" alt="">
                <h3><?php echo $c['c_name'] ?></h3>
                <p><?php echo $c['c_details'] ?></p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <?php }?>
    </div>
</section>