<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReportStatus $reportStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report Status'), ['action' => 'edit', $reportStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report Status'), ['action' => 'delete', $reportStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Report Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reportStatus view large-9 medium-8 columns content">
    <h3><?= h($reportStatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $reportStatus->has('user') ? $this->Html->link($reportStatus->user->id, ['controller' => 'Users', 'action' => 'view', $reportStatus->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Change') ?></th>
            <td><?= h($reportStatus->date_of_change) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reportStatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Status') ?></th>
            <td><?= $this->Number->format($reportStatus->current_status) ?></td>
        </tr>
    </table>
</div>
