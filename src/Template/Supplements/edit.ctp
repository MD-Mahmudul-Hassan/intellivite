<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplement $supplement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supplement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supplement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Supplements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Supplement Reports'), ['controller' => 'SupplementReports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplement Report'), ['controller' => 'SupplementReports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="supplements form large-9 medium-8 columns content">
    <?= $this->Form->create($supplement) ?>
    <fieldset>
        <legend><?= __('Edit Supplement') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('dosage');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
