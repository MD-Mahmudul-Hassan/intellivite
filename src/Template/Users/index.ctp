<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reset_password_token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_street_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_street_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billiig_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terms_and_conditions_check') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= $this->Number->format($user->gender) ?></td>
                <td><?= $this->Number->format($user->role) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->reset_password_token) ?></td>
                <td><?= h($user->dob) ?></td>
                <td><?= h($user->shipping_street_address) ?></td>
                <td><?= h($user->shipping_city) ?></td>
                <td><?= h($user->shipping_state) ?></td>
                <td><?= h($user->shipping_zip) ?></td>
                <td><?= h($user->billing_street_address) ?></td>
                <td><?= h($user->billiig_city) ?></td>
                <td><?= h($user->billing_state) ?></td>
                <td><?= h($user->billing_zip) ?></td>
                <td><?= $this->Number->format($user->terms_and_conditions_check) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
