<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php

if (empty($_SESSION['loginname']))
    header('Location: /login.php');

?>
<section class="cookies container-fluid">
    <div class="row">
        <!--TODO : Display shopping cart items from $_SESSION here.-->
        <table style="width: 500px">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <?php foreach ($catalog as $id => $cookie): ?>
                <tr>
                    <td><?= $cookie['name'] ?></td>
                    <td><?= $cookie['description'] ?></td>
                    <td><?php
                        if (!empty($_SESSION['cookies'])) {
                            if (array_key_exists($id, $_SESSION['cookies']))
                                echo $_SESSION['cookies'][$id];
                        } else
                            echo 0;
                        ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
