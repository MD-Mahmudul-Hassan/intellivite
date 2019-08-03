<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionaires'), ['controller' => 'Questionaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionaire'), ['controller' => 'Questionaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Report Status'), ['controller' => 'ReportStatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report Status'), ['controller' => 'ReportStatus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Supplement Reports'), ['controller' => 'SupplementReports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplement Report'), ['controller' => 'SupplementReports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('gender');
            echo $this->Form->control('role');
            echo $this->Form->control('password');
            echo $this->Form->control('reset_password_token');
            echo $this->Form->control('dob');
            echo $this->Form->control('shipping_street_address');
            echo $this->Form->control('shipping_city');
            echo $this->Form->control('shipping_state');
            echo $this->Form->control('shipping_zip');
            echo $this->Form->control('billing_street_address');
            echo $this->Form->control('billiig_city');
            echo $this->Form->control('billing_state');
            echo $this->Form->control('billing_zip');
            echo $this->Form->control('terms_and_conditions_check');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
