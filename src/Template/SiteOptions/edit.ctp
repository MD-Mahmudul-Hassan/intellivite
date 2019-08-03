<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SiteOption $siteOption
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $siteOption->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $siteOption->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Site Options'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="siteOptions form large-9 medium-8 columns content">
    <?= $this->Form->create($siteOption) ?>
    <fieldset>
        <legend><?= __('Edit Site Option') ?></legend>
        <?php
            echo $this->Form->control('meta_key');
            echo $this->Form->control('meta_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
