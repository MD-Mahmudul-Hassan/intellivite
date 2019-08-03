<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

   <?php
        echo $this->Html->css('../dist/css/bootstrap.min.css');        
        echo $this->Html->css('../dist/css/theme.css');
        echo $this->Html->css('../dist/css/style.css');
    ?>

    <?php
        echo $this->Html->script('../dist/js/jquery.min');
        echo $this->Html->script('../dist/js/bootstrap.min');
        echo $this->Html->script('../dist/js/bootstrap-datepicker.min.js');
        echo $this->Html->script("../dist/js/custom.js");
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
