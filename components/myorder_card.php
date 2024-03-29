<div class="card order-card mx-0 my-2 my-0-md">
    <div class="card-header">
        <h5 class="title-card">
            <?= $fetch_orders['placed_on']; ?>
        </h5>
        <!-- <h5 class="subtitle-card"></h5> -->
    </div>
    <div class="card-body d-flex flex-column">
        <span class="card-title">Pesanan
            <span class="order-value">
                <?= $fetch_orders['total_products']; ?>
            </span>
        </span>
        <span class="card-text">Status
            <?php
            if ($fetch_orders['payment_status'] == 'completed') {
                ?>
                <span class="order-value" style="color: var(--component-turquoise);">
                    <?= $fetch_orders['payment_status']; ?>
                </span>
                <?php
            } else {
                ?>
                <span class="order-value" style="color: var(--component-orange);">
                    <?= $fetch_orders['payment_status']; ?>
                </span>
                <?php
            }
            ?>
        </span>
        <a href="order_details.php?id=<?= $fetch_orders['id']; ?>" class="btn-custom mt-3" name="show_details">Lihat
            Detail</a>
    </div>
</div>