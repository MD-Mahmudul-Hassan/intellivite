<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SiteOption[]|\Cake\Collection\CollectionInterface $siteOptions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Site Option'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="siteOptions index large-9 medium-8 columns content">
    <h3><?= __('Site Options') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meta_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meta_value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siteOptions as $siteOption): ?>
            <tr>
                <td><?= $this->Number->format($siteOption->id) ?></td>
                <td><?= h($siteOption->meta_key) ?></td>
                <td><?= h($siteOption->meta_value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $siteOption->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $siteOption->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $siteOption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $siteOption->id)]) ?>
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
