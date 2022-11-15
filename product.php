<?php include("app/include/header.php"); ?>
<?php include("app/include/menu.php"); ?>
<?php

$db = new PDO("mysql:host=localhost;dbname=sportpeople", "root", "mysql");

if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
} else {
   # echo "Connection = success!/n" . mysqli_get_host_info($db) . "<br />";
}

?>
        <div class="page-product">
            <div class="container">
                <div class="product_current">
                    <div class="product-info-row">
                        <?php if ($query = $db->query("SELECT * FROM products where id=$_GET[id];")){
                            $info = $query->fetchAll(PDO::FETCH_ASSOC);
                            }
                            else {
                                print_r($db->errorInfo());
                            } foreach ($info as $data): ?>
                            <div class="product-left">
                                <img class="row-image" src="<?php echo $data['image']; ?>" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="vendor">Артикул: <?php echo $data['vendor']?></h6>
                                <h4 class="title-product"><?php echo $data['name']; ?></h4>
                                <h3 class="product__current-price"><?php echo $data['price']; ?> ₽</h3>
                                <h5 class="title-desc">Описание</h5>
                                <p class="desc"><?php echo $data['description']?></p>
                                <a class="button" href="#">В корзину</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include("app/include/slider-multitask.php");?>
        
            
<?php include("app/include/footer.php"); ?>