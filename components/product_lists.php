<div class="container-box">
    <p class="mb-3">No product inserted</p>
    <?php

    $show_product = $conn->prepare("SELECT * FROM `products`");
    $show_product->execute();

    if ($show_product->rowCount() > 0) {
        while ($fetch_products = $show_product->fetch(PDO::FETCH_ASSOC)) {
            # code...
    
            ?>
            <div class="card" style="width: 18rem;">
                <img src="assets/images/<?= $fetch_products['image_01']; ?>" class="card-img-top" alt="Haylou GS">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $fetch_products['name']; ?>
                    </h5>
                    <h5 class="card-title">
                        <?= $fetch_products['price']; ?>
                    </h5>
                    <p class="card-text">
                        <span>Rp</span>
                        <?= $fetch_products['details']; ?>
                    </p>
                    <a href="#" class="btn btn-primary">Update</a>
                </div>
            </div>
            <?php
        }
    } else {
        # code...
    }
    ?>
</div>