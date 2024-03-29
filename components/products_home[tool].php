<div class="products-tool-slider swiper py-3 py-5-md">
    <div class="products-header mb-3 mb-5-md">Peralatan</div>
    <div class="swiper-wrapper">
        <?php

        $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
        $select_products->execute();
        if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
                # code...
                ?>
                <form action="" method="POST" class="swiper-slide slide d-flex flex-column">
                    <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                    <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                    <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                    <input type="hidden" name="image" value="<?= $fetch_products['image_01']; ?>">
                    <button type="submit" name="add_to_wishlist" class="fas fa-heart"></button>
                    <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                    <img src="assets/images/products/<?= $fetch_products['image_01']; ?>" alt="" class="image mb-3 mb-5-md">
                    <div class="name text-start">
                        <?= $fetch_products['name']; ?>
                    </div>
                    <div class="d-flex flex-wrap flex-column w-100">
                        <div class="price mt-2 mt-3-md">Rp <span>
                                <?= currency_formatter($fetch_products['price']); ?>
                            </span>,-</div>
                        <input type="number" name="qty" id="input-qty" class="qty form-control mt-2 mt-3-md" min="1" max="99"
                            value="1" onkeypress="if(this.value.length == 2) return false;">
                        <input type="submit" value="+ Keranjang" name="add_to_cart_home" class="btn btn-sm mt-2 mt-3-md">
                    </div>
                </form>
                <?php
            }
        } else {
            echo '<p class="empty">Nothing product to display</p>';
        }

        ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>