<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Add new Supplement</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?= $this->Form->create($supplement) ?>
                    <div class="form-group">
                        <?= $this->Form->control('name', array('class' => 'form-control', 'required' => 'required')) ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('supplement_type_id', array(
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $supplementTypes,
                                'label' => 'Supplement Type:',
                                'empty' => 'Select',
                                'required' => true
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('summary', array('class' => 'form-control', 'required' => 'required')) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('description', array('class' => 'form-control', 'required' => 'required')) ?>
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
