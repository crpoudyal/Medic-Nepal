<?php
$get_pharmacy_data =$Fetch_medicine ->getData($table = "Pharmacy");
?>

<section class="pharmacy" id="pharmacy">
    <h1 class="heading">Partner <span> Pharmacy </span> </h1>
    <?php foreach($get_pharmacy_data as $phy){ ?>
    <div class="box-container">
        <div class="box">
            <img src="<?php echo $m['img_name'] ?? "images/ph4.jpg" ?>" alt="">
            <div class="content">
                <h3><?php echo $phy['phy_name'] ?></h3>
                <p><?php echo $phy['phy_details'] ?></p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
