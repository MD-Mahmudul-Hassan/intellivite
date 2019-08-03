<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questionaire $questionaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questionaires'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionaires form large-9 medium-8 columns content">
    <?= $this->Form->create($questionaire) ?>
    <fieldset>
        <legend><?= __('Add Questionaire') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('health_goals');
            echo $this->Form->control('about_you');
            echo $this->Form->control('your_nutrition');
            echo $this->Form->control('your_lifestyle');
            echo $this->Form->control('medical_history');
            echo $this->Form->control('form_completion');
            echo $this->Form->control('date_of_update');
            echo $this->Form->control('sent_notification');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
