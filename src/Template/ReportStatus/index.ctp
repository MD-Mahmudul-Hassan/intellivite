<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReportStatus[]|\Cake\Collection\CollectionInterface $reportStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Report Status'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportStatus index large-9 medium-8 columns content">
    <h3><?= __('Report Status') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_of_change') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportStatus as $reportStatus): ?>
            <tr>
                <td><?= $this->Number->format($reportStatus->id) ?></td>
                <td><?= $reportStatus->has('user') ? $this->Html->link($reportStatus->user->id, ['controller' => 'Users', 'action' => 'view', $reportStatus->user->id]) : '' ?></td>
                <td><?= $this->Number->format($reportStatus->current_status) ?></td>
                <td><?= h($reportStatus->date_of_change) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reportStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reportStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reportStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportStatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
