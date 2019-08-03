<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">List All Supplements</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <table id="supplement-list-table" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($supplements as $supplement):?>
                                    <tr>
                                        <td><?php echo $supplement['id'];?></td>
                                        <td><?php echo $supplement['name'];?></td>
                                        <td><?php echo $supplement['supplement_type']['name'];?></td>
                                        <td>
                                            <?php
                                                echo $this->Html->link(
                                                    __(
                                                        $this->Html->tag('i', '', array('class' => 'mdi mdi-delete'))
                                                    ),
                                                    ['action' => 'delete', $supplement->id],
                                                    [
                                                        'escape' => false,
                                                        'data-toggle' => 'tooltip',
                                                        'data-original-title' => 'Delete',
                                                        'confirm' => __('Are you sure you want to delete this supplement?')
                                                    ]
                                                );
                                            ?>
                                            <span>|</span>
                                            <?php
                                                echo $this->Html->link(
                                                    __(
                                                        $this->Html->tag('i', '', array('class' => 'mdi mdi-grease-pencil'))
                                                    ),
                                                    ['action' => 'edit', $supplement->id],
                                                    [
                                                        'escape' => false,
                                                        'data-toggle' => 'tooltip',
                                                        'data-original-title' => 'Edit'
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
