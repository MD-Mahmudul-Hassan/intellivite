<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionaires'), ['controller' => 'Questionaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionaire'), ['controller' => 'Questionaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Report Status'), ['controller' => 'ReportStatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Status'), ['controller' => 'ReportStatus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Supplement Reports'), ['controller' => 'SupplementReports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplement Report'), ['controller' => 'SupplementReports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reset Password Token') ?></th>
            <td><?= h($user->reset_password_token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($user->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Street Address') ?></th>
            <td><?= h($user->shipping_street_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping City') ?></th>
            <td><?= h($user->shipping_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping State') ?></th>
            <td><?= h($user->shipping_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Zip') ?></th>
            <td><?= h($user->shipping_zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Street Address') ?></th>
            <td><?= h($user->billing_street_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billiig City') ?></th>
            <td><?= h($user->billiig_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing State') ?></th>
            <td><?= h($user->billing_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Zip') ?></th>
            <td><?= h($user->billing_zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $this->Number->format($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $this->Number->format($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terms And Conditions Check') ?></th>
            <td><?= $this->Number->format($user->terms_and_conditions_check) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($user->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Order Date') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->product_id) ?></td>
                <td><?= h($orders->quantity) ?></td>
                <td><?= h($orders->amount) ?></td>
                <td><?= h($orders->order_date) ?></td>
                <td><?= h($orders->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questionaires') ?></h4>
        <?php if (!empty($user->questionaires)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Health Goals') ?></th>
                <th scope="col"><?= __('About You') ?></th>
                <th scope="col"><?= __('Your Nutrition') ?></th>
                <th scope="col"><?= __('Your Lifestyle') ?></th>
                <th scope="col"><?= __('Medical History') ?></th>
                <th scope="col"><?= __('Form Completion') ?></th>
                <th scope="col"><?= __('Date Of Update') ?></th>
                <th scope="col"><?= __('Sent Notification') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->questionaires as $questionaires): ?>
            <tr>
                <td><?= h($questionaires->id) ?></td>
                <td><?= h($questionaires->user_id) ?></td>
                <td><?= h($questionaires->health_goals) ?></td>
                <td><?= h($questionaires->about_you) ?></td>
                <td><?= h($questionaires->your_nutrition) ?></td>
                <td><?= h($questionaires->your_lifestyle) ?></td>
                <td><?= h($questionaires->medical_history) ?></td>
                <td><?= h($questionaires->form_completion) ?></td>
                <td><?= h($questionaires->date_of_update) ?></td>
                <td><?= h($questionaires->sent_notification) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questionaires', 'action' => 'view', $questionaires->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questionaires', 'action' => 'edit', $questionaires->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questionaires', 'action' => 'delete', $questionaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionaires->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Report Status') ?></h4>
        <?php if (!empty($user->report_status)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Current Status') ?></th>
                <th scope="col"><?= __('Date Of Change') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->report_status as $reportStatus): ?>
            <tr>
                <td><?= h($reportStatus->id) ?></td>
                <td><?= h($reportStatus->user_id) ?></td>
                <td><?= h($reportStatus->current_status) ?></td>
                <td><?= h($reportStatus->date_of_change) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ReportStatus', 'action' => 'view', $reportStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ReportStatus', 'action' => 'edit', $reportStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReportStatus', 'action' => 'delete', $reportStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportStatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Supplement Reports') ?></h4>
        <?php if (!empty($user->supplement_reports)): ?>
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
            <?php foreach ($user->supplement_reports as $supplementReports): ?>
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
