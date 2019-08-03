<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Create New Menu</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?= $this->Form->create($menu) ?>
                    <div class="form-group">
                        <?= $this->Form->control('name', array('class' => 'form-control', 'required' => 'required')) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('page_id', array('class' => 'form-control', 'empty' => 'None')) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('parent_id', array('class' => 'form-control', 'empty' => 'None', 'label' => 'Parent Menu')) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->button('Submit', array('class' => 'btn btn-primary')) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
