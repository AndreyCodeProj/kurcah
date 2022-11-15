        <div class="container">
            <h1 class="main-style-title">Новинки</h1>
                <div class="slider-multitask">
                    <?php if ($query = $db->query("SELECT * FROM products WHERE id_status='1'")){
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
                                    <div class="price">
                                        <h4 class="newproduct-price"><?php echo $data['price']; ?> ₽</h4>
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