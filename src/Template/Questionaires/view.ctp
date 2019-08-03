<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questionaire $questionaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionaire'), ['action' => 'edit', $questionaire->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionaire'), ['action' => 'delete', $questionaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionaire->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionaires'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionaire'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionaires view large-9 medium-8 columns content">
    <h3><?= h($questionaire->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $questionaire->has('user') ? $this->Html->link($questionaire->user->id, ['controller' => 'Users', 'action' => 'view', $questionaire->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Form Completion') ?></th>
            <td><?= h($questionaire->form_completion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Update') ?></th>
            <td><?= h($questionaire->date_of_update) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionaire->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sent Notification') ?></th>
            <td><?= $this->Number->format($questionaire->sent_notification) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Health Goals') ?></h4>
        <?= $this->Text->autoParagraph(h($questionaire->health_goals)); ?>
    </div>
    <div class="row">
        <h4><?= __('About You') ?></h4>
        <?= $this->Text->autoParagraph(h($questionaire->about_you)); ?>
    </div>
    <div class="row">
        <h4><?= __('Your Nutrition') ?></h4>
        <?= $this->Text->autoParagraph(h($questionaire->your_nutrition)); ?>
    </div>
    <div class="row">
        <h4><?= __('Your Lifestyle') ?></h4>
        <?= $this->Text->autoParagraph(h($questionaire->your_lifestyle)); ?>
    </div>
    <div class="row">
        <h4><?= __('Medical History') ?></h4>
        <?= $this->Text->autoParagraph(h($questionaire->medical_history)); ?>
    </div>
</div>
