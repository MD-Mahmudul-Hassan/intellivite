<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">List All Menus</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <table id="menu-list-table" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Parent ID</th>
                                    <th>Created</th>
                                    <th>Modifed</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Parent ID</th>
                                    <th>Created</th>
                                    <th>Modifed</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($menus as $menu):?>
                                    <tr>
                                        <td><?php echo $menu['id'];?></td>
                                        <td><?php echo $menu['name'];?></td>
                                        <td><?php echo $menu['parent_id'];?></td>
                                        <td><?php echo $menu['created'];?></td>
                                        <td><?php echo $menu['modified'];?></td>
                                        <td>
                                            <?php
                                                echo $this->Form->postLink(__('Delete'), array(
                                                        'controller' => 'menus',
                                                        'action' => 'delete',
                                                        $menu->id
                                                    ), array(
                                                        'confirm' => __('Are you sure you want to delete?', $menu->id)
                                                    ),
                                                    array(
                                                        'escape' => false
                                                    )
                                                );
                                            ?>

                                            <?php
                                                echo $this->Html->link(__('Edit'), array(
                                                        'controller' => 'menus',
                                                        'action' => 'edit',
                                                        $menu->id
                                                    ), array(
                                                        'escape' => false
                                                    )
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
