<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?php
        echo $this->Html->css('../dist/css/bootstrap.min.css');
        echo $this->Html->css('../dist/css/bootstrap-4-navbar.css');
        echo $this->Html->css('../dist/css/bootstrap-datepicker.min.css');
        echo $this->Html->css('../dist/css/bootstrap-multiselect.css');
        echo $this->Html->css('../dist/css/select2.css');        
        echo $this->Html->css('../dist/css/theme.css');
        echo $this->Html->css('../dist/css/style.css');
    ?>

    <?php
        echo $this->Html->script('../dist/js/jquery.min');
        echo $this->Html->script('../dist/js/popper.min');
        echo $this->Html->script('../dist/js/bootstrap.min');
        echo $this->Html->script('../dist/js/bootstrap-4-navbar.js');
        echo $this->Html->script('../dist/js/bootstrap-datepicker.min.js');
        echo $this->Html->script('../dist/js/bootstrap-multiselect.js');
        echo $this->Html->script('../dist/js/select2.full.js');
        echo $this->Html->script("../dist/js/custom.js");
    ?>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php echo $this->element('navigation_menu') ;?>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div class="container clearfix">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
