<?php include("app/include/header.php"); ?>
<?php include("app/include/menu.php"); ?>
<?php require_once("app/database/connect.php");?>

    <div class="page-main page-main__background">
        <section class="popular_all">
            <div class="container">
                <h1 class="main-style-title">Товары для мужчин</h1>
                <div class="row">
                            <?php if ($query = $db->query("SELECT * FROM products WHERE id_gender IN(1)")){
                                $info = $query->fetchAll(PDO::FETCH_ASSOC);
                                }
                                else {
                                    print_r($db->errorInfo());
                                } foreach ($info as $data): ?>
                                
                    <div class="col-lg-4 col-sm-6 product-item">
                    
                        <div class="product-card ">
                            <div class="product-thumb">
                            <a href="product.php?id=<?php echo $data['id']?>"><img src="<?php echo $data['image']; ?>" alt="img"></a>
                            </div>
                            <div class="product-details-link">
                                <h5><a href="product.php?id=<?php echo $data['id']?>"><?php echo $data['name']; ?></a></h5>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price">
                                        <h4 class="price"><?php echo $data['price']; ?> ₽</h4>
                                    </div>
                                    <div class="product-links">
                                        <a class="#" href="#"><img src="assets/img/icons/shopping-basket-button.svg" alt="button"></a>
                                        <a href="#"><img src="assets/img/icons/favorite.svg" alt="favorite"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>
        </section>
<?php include("app/include/footer.php"); ?>

