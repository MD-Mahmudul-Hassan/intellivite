<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplement $supplement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Supplement'), ['action' => 'edit', $supplement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supplement'), ['action' => 'delete', $supplement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Supplements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Supplement Reports'), ['controller' => 'SupplementReports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplement Report'), ['controller' => 'SupplementReports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="supplements view large-9 medium-8 columns content">
    <h3><?= h($supplement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($supplement->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dosage') ?></th>
            <td><?= h($supplement->dosage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($supplement->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($supplement->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Supplement Reports') ?></h4>
        <?php if (!empty($supplement->supplement_reports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Supplement Id') ?></th>
                <th scope="col"><?= __('Your Lifestyle') ?></th>
                <th scope="col"><?= __('Your Goals') ?></th>
                <th scope="col"><?= __('Your Genetics') ?></th>
                <th scope="col"><?= __('Activation Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($supplement->supplement_reports as $supplementReports): ?>
            <tr>
                <td><?= h($supplementReports->id) ?></td>
                <td><?= h($supplementReports->user_id) ?></td>
                <td><?= h($supplementReports->supplement_id) ?></td>
                <td><?= h($supplementReports->your_lifestyle) ?></td>
                <td><?= h($supplementReports->your_goals) ?></td>
                <td><?= h($supplementReports->your_genetics) ?></td>
                <td><?= h($supplementReports->activation_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SupplementReports', 'action' => 'view', $supplementReports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SupplementReports', 'action' => 'edit', $supplementReports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SupplementReports', 'action' => 'delete', $supplementReports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplementReports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
