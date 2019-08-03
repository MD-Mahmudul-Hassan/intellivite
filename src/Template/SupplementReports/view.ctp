<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplementReport $supplementReport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Supplement Report'), ['action' => 'edit', $supplementReport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supplement Report'), ['action' => 'delete', $supplementReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplementReport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Supplement Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplement Report'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Supplements'), ['controller' => 'Supplements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplement'), ['controller' => 'Supplements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="supplementReports view large-9 medium-8 columns content">
    <h3><?= h($supplementReport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $supplementReport->has('user') ? $this->Html->link($supplementReport->user->id, ['controller' => 'Users', 'action' => 'view', $supplementReport->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplement') ?></th>
            <td><?= $supplementReport->has('supplement') ? $this->Html->link($supplementReport->supplement->name, ['controller' => 'Supplements', 'action' => 'view', $supplementReport->supplement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Your Lifestyle') ?></th>
            <td><?= h($supplementReport->your_lifestyle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Your Goals') ?></th>
            <td><?= h($supplementReport->your_goals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Your Genetics') ?></th>
            <td><?= h($supplementReport->your_genetics) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($supplementReport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activation Status') ?></th>
            <td><?= $this->Number->format($supplementReport->activation_status) ?></td>
        </tr>
    </table>
</div>
