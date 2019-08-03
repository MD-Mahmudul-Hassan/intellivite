<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo $this->Html->css('../dist/css/bootstrap.min.css', ['fullBase' => true]);
        //print.css contains media query of bootstrap and has to be included separately
        echo $this->Html->css('../dist/css/print.css', ['fullBase' => true]);
        //theme.css for admin theme colors
        echo $this->Html->css('../dist/css/theme.css', ['fullBase' => true]);


        echo $this->Html->script('../dist/js/jquery.min', ['fullBase' => true]);
        echo $this->Html->script('../dist/js/bootstrap.min', ['fullBase' => true]);
    ?>

</head>
<body>

    <div class="container-fluid">
        <?= $this->fetch('content') ?>
    </div>

</body>
</html>
