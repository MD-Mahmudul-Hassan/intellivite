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

$title = 'Admin | Login';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php
        echo $this->Html->css('../dist/css/bootstrap.min.css');
        echo $this->Html->css('../dist/css/theme.css');
        echo $this->Html->css('../dist/css/green-dark.css');
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?php echo $this->Html->script('../dist/js/jquery.min'); ?>
    <?php echo $this->Html->script('../dist/js/popper.min'); ?>
    <?php echo $this->Html->script('../dist/js/bootstrap.min'); ?>
    <?php echo $this->Html->script('../dist/js/jquery.slimscroll');?>
    <?php echo $this->Html->script('../dist/js/sidebarmenu');?>
    <?php echo $this->Html->script('../dist/js/sticky-kit.min');?>
    <?php echo $this->Html->script('../dist/js/custom.min');?>

</head>
    <body>
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <section id="wrapper">
            <div class="login-register" style="background-image:url(../../img/login-bg.jpg);">
                <div class="login-box card">
                    <div class="card-body">
                        <h1>Admin Login</h1>
                        <?php echo $this->Flash->render(); ?>
                        <?php echo $this->fetch('content') ?>
                    </div>
                </div>
            </div>
        </section>
        <footer>
        </footer>
    </body>
</html>
