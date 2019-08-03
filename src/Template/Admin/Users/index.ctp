<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">List All Users</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <table id="users-list-table" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($users as $user):?>
                                    <tr>
                                        <td><?php echo $user['id'];?></td>
                                        <td><?php echo $user['first_name'];?></td>
                                        <td><?php echo $user['last_name'];?></td>
                                        <td><?php echo $user['email'];?></td>
                                        <td><?php echo $user['phone_number'];?></td>
                                        <td>
                                            <?php
                                                echo $this->Html->link(
                                                    __(
                                                        $this->Html->tag('i', '', array('class' => 'mdi mdi-delete'))
                                                    ),
                                                    ['action' => 'delete', $user->id],
                                                    [
                                                        'escape' => false,
                                                        'data-toggle' => 'tooltip',
                                                        'data-original-title' => 'Mark Inactive',
                                                        'confirm' => __('Are you sure you want to mark this user inactive?')
                                                    ]
                                                );
                                            ?>
                                            <span>|</span>
                                            <?php
                                                echo $this->Html->link(
                                                    __(
                                                        $this->Html->tag('i', '', array('class' => 'mdi mdi-account-edit'))
                                                    ),
                                                    ['action' => 'edit', $user->id],
                                                    [
                                                        'escape' => false,
                                                        'data-toggle' => 'tooltip',
                                                        'data-original-title' => 'Edit'
                                                    ]
                                                );
                                            ?>
                                            <span>|</span>

                                            <?php
                                                echo $this->Html->link(
                                                    __(
                                                        $this->Html->tag('i', '', array('class' => 'mdi mdi-cloud-download'))
                                                    ),
                                                    ['action' => 'download', $user->id],
                                                    [
                                                        'escape' => false,
                                                        'data-toggle' => 'tooltip',
                                                        'data-original-title' => 'Download Data'
                                                    ]
                                                );
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        <div class="paginator dataTables_wrapper">
                            <ul class="pagination dataTables_paginate">
                                <?php echo $this->Paginator->first('<< ' . __('first')) ?>
                                <?php echo $this->Paginator->prev('< ' . __('Previous')) ?>
                                <?php echo $this->Paginator->numbers() ?>
                                <?php echo $this->Paginator->next(__('next') . ' >') ?>
                                <?php echo $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                            <div class="dataTables_info">
                                <?php echo $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
