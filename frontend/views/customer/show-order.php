<?php foreach ($customer as $customerItem) : ?>
    <h3><?= $customerItem->nama ?></h3>
    <?php foreach ($orders as $order) : ?>
        <?php if ($order->customer_id == $customerItem->id) : ?>
            <h5>Order id: <?= $order->id ?></h5>
            <h5>Item:</h5>
            <ul>
                <?php foreach ($order_items as $order_item) : ?>
                    <?php foreach ($items as $item) : ?>
                        <?php if ($order_item->item_id == $item->id && $order->id == $order_item->order_id) : ?>
                            <li><?= $item->name ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <?php endforeach; ?>
    <hr>
<?php endforeach; ?>
