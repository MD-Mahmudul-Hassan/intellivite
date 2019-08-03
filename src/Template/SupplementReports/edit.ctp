<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplementReport $supplementReport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supplementReport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supplementReport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Supplement Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Supplements'), ['controller' => 'Supplements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplement'), ['controller' => 'Supplements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="supplementReports form large-9 medium-8 columns content">
    <?= $this->Form->create($supplementReport) ?>
    <fieldset>
        <legend><?= __('Edit Supplement Report') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('supplement_id', ['options' => $supplements]);
            echo $this->Form->control('your_lifestyle');
            echo $this->Form->control('your_goals');
            echo $this->Form->control('your_genetics');
            echo $this->Form->control('activation_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
