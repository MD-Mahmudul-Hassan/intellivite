<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReportStatus $reportStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reportStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Report Status'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportStatus form large-9 medium-8 columns content">
    <?= $this->Form->create($reportStatus) ?>
    <fieldset>
        <legend><?= __('Edit Report Status') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('current_status');
            echo $this->Form->control('date_of_change');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
