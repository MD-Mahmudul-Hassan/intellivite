<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Add new Supplement Type</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?= $this->Form->create($supplementType) ?>
                    <div class="form-group">
                        <?= $this->Form->control('name', array('class' => 'form-control', 'required' => 'required')) ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->input('is_active',
                                array(
                                    'class' => 'form-control chk-col-teal',
                                    'id' => 'is-active',
                                    'type' => 'checkbox',
                                    'templates' => array(
                                        'inputContainer' => '{{content}}<label for="is-active">Active</label>',
                                    ),
                                    'label' => false,
                                    'required' => false
                                )
                            );
                        ?>
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
