<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplementReport[]|\Cake\Collection\CollectionInterface $supplementReports
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Supplement Report'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Supplements'), ['controller' => 'Supplements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplement'), ['controller' => 'Supplements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="supplementReports index large-9 medium-8 columns content">
    <h3><?= __('Supplement Reports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('your_lifestyle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('your_goals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('your_genetics') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activation_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supplementReports as $supplementReport): ?>
            <tr>
                <td><?= $this->Number->format($supplementReport->id) ?></td>
                <td><?= $supplementReport->has('user') ? $this->Html->link($supplementReport->user->id, ['controller' => 'Users', 'action' => 'view', $supplementReport->user->id]) : '' ?></td>
                <td><?= $supplementReport->has('supplement') ? $this->Html->link($supplementReport->supplement->name, ['controller' => 'Supplements', 'action' => 'view', $supplementReport->supplement->id]) : '' ?></td>
                <td><?= h($supplementReport->your_lifestyle) ?></td>
                <td><?= h($supplementReport->your_goals) ?></td>
                <td><?= h($supplementReport->your_genetics) ?></td>
                <td><?= $this->Number->format($supplementReport->activation_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $supplementReport->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplementReport->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplementReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplementReport->id)]) ?>
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
