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

    <div class="page-main page-main__background">
        <div class="slider-slick">
            <div class="container">
                <div class="slider">
                    <div class="slider__item">
                        <div class="main-sale">
                            <div class="main-item sale">
                                <p class="sale-description">Зимняя распродажа</p>
                                <h1 class="sale-title">СКИДКИ ДО 90%</h1>
                                <a href="allproducts.php" class="button">Подробнее</a>
                            </div>
                            <div class="main-item box">
                                <div class="box-price">
                                    <strike class="box-price_old">9 900 ₽</strike>
                                    <div class="box-price_new">1 900 ₽</div>
                                </div>
                                    <img class="box-image" src="assets/img/swiper-img/slick/Толстовка.svg" alt="product">
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="main-sale">
                            <div class="main-item sale">
                                <p class="sale-description">Зимняя распродажа</p>
                                <h1 class="sale-title">СКИДКИ ДО 90%</h1>
                                <a href="allproducts.php" class="button">Подробнее</a>
                            </div>
                            <div class="main-item box">
                                <div class="box-price">
                                    <strike class="box-price_old">4990 ₽</strike>
                                    <div class="box-price_new">1 299 ₽</div>
                                </div>
                                    <img class="box-image" src="assets/img/swiper-img/slick/Полуботинки.svg" alt="product">
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="main-sale">
                            <div class="main-item sale">
                                <p class="sale-description">Зимняя распродажа</p>
                                <h1 class="sale-title">СКИДКИ ДО 90%</h1>
                                <a href="allproducts.php" class="button">Подробнее</a>
                            </div>
                            <div class="main-item box">
                                <div class="box-price">
                                    <strike class="box-price_old">4990 ₽</strike>
                                    <div class="box-price_new">1 299 ₽</div>
                                </div>
                                    <img class="box-image" src="assets/img/swiper-img/slick/Костюм.svg" alt="product">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page page-dark notice">
        <h1 class="notice-title"><span>Скидка 50%</span> на первую покупку</h1>
        <p class="notice-description">Совершите покупку от 3000₽ и получите скидку!</p>
    </div>
    <div class="page-collections">
        <div class="container">
            <div class="collection">
                <div id="tekst_sverhu_kartinki">
                    <a href="men.php"><img src="assets/img/МужскаяКоллекция.jpg" alt="Мужская коллекция"></a>
                    <a href="men.php"><div class="tekst_sverhu_kartinki">Мужская коллекция</div></a>
                </div>
                <div id="tekst_sverhu_kartinki">
                    <a href="women.php"><img src="assets/img/ЖенскаяКоллекция.jpg" alt="Женская коллекция"></a>
                    <a href="women.php"><div class="tekst_sverhu_kartinki">Женская коллекция</div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="types-sports">
    <div class="container">
            <h1 class="main-style-title">Виды спорта</h1>
            <span><a class="all-types" href="popularall.php">Все виды</a></span>
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <a href="#"><img src="assets/img/typessports/Теннис.jpg" class="gallery__img" alt="Image 1"></a>
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <a href="#"><img src="assets/img/typessports/Плавание.jpg" class="gallery__img" alt="Image 2"></a>
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <a href="#"><img src="assets/img/typessports/Футбол.jpg" class="gallery__img" alt="Image 3"></a>
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <a href="#"><img src="assets/img/typessports/Хоккей.jpg" class="gallery__img" alt="Image 4"></a>
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <a href="#"><img src="assets/img/typessports/Воркаут.jpg" class="gallery__img" alt="Image 5"></a>
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <a href="#"><img src="assets/img/typessports/Фитнес.jpg" class="gallery__img" alt="Image 6"></a>
                </figure>
            </div>
        </div>
    </div>
    <div class="page popular-categories">
        <div class="container">
                <h1 class="main-style-title">Популярные товары</h1>
                <span><a class="all" href="popularall.php">Все</a></span>
            <div class="slider-multitask">
                <?php if ($query = $db->query("SELECT * FROM products WHERE id_status='3'")){
                    $info = $query->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    print_r($db->errorInfo());
                } foreach ($info as $data): ?>
                    <div class="slider-multitask__item">
                        <div class="product-card">
                            <div class="product-thumb">
                                <a href="product.php?id=<?php echo $data['id']?>"><img src="<?php echo $data['image']; ?>" alt="img"></a>
                            </div>
                            <div class="product-details">
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
        </div>
    </div>

    <?php include("app/include/slider-multitask.php");?>


<?php include("app/include/footer.php"); ?>