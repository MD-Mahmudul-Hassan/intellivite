<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Admin</title>

        <?php echo $this->Html->meta('icon') ?>

        <?php
            echo $this->Html->css('../dist/css/bootstrap.min.css');
            echo $this->Html->css('../dist/css/theme.css');
            echo $this->Html->css('../dist/css/admin.css');
            echo $this->Html->css('../dist/css/green-dark.css');
        ?>

        <?php
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
    </head>

    <body class="fix-sidebar fix-header card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>

        <div id="main-wrapper">
            <?php echo $this->element('admin/header'); ?>

            <?php echo $this->element('admin/sidebar'); ?>

            <div class="page-wrapper">
                <div class="container-fluid">
                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->fetch('content') ?>
                </div>
            </div>
        </div>
        <?php
            echo $this->Html->script('../dist/js/jquery.min');
            echo $this->Html->script('../dist/js/popper.min');
            echo $this->Html->script('../dist/js/bootstrap.min');
            echo $this->Html->script('../dist/js/jquery.slimscroll');
            echo $this->Html->script('../dist/js/waves');
            echo $this->Html->script('../dist/js/sidebarmenu');
            echo $this->Html->script('../dist/js/sticky-kit.min');
            echo $this->Html->script('../dist/js/jquery.sparkline.min');
            echo $this->Html->script('../dist/js/custom.min');
            echo $this->Html->script('../dist/js/jQuery.style.switcher');
            echo $this->Html->script('../dist/js/jquery.dataTables.min');
            echo $this->Html->script('../dist/js/admin');
        ?>
    </body>
</html>
