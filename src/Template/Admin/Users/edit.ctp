<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Edit User</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->Form->create($user) ?>
                    <h3 class="card-title text-primary">Personal Information</h3>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('first_name', array(
                                'class' => 'form-control',
                                'required' => 'required'
                                )
                            )
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('last_name', array(
                                'class' => 'form-control'
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('email', array(
                                'class' => 'form-control',
                                'disabled' => 'disabled'
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('phone_number', array(
                                'class' => 'form-control'
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->input(
                                'gender', [
                                    'type'=>'radio',
                                    'options' => [
                                        ['value' => 1, 'text' => 'Male'],
                                        ['value' => 2, 'text' => 'Female'],
                                    ],
                                  'templates' => [
                                        'radioWrapper' => '{{label}}',
                                        'nestingLabel' => '<div>{{hidden}}{{input}}<label{{attrs}}>{{text}}</label></div>'
                                    ],
                                    'label' => 'Gender',
                                ]
                            );
                        ?>
                    </div>

                    <h3 class="card-title text-primary">Shipping Information</h3>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('shipping_street_address', array(
                                'class' => 'form-control',
                                'rows' => 2
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('shipping_city', array(
                                'class' => 'form-control'
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('shipping_state', array(
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $states
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('shipping_zip', array(
                                'class' => 'form-control'
                                )
                            );
                        ?>
                    </div>

                    <h3 class="card-title text-primary">Billing Information</h3>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('billing_street_address', array(
                                'class' => 'form-control',
                                'rows' => 2
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('billing_city', array(
                                'class' => 'form-control'
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('billing_state', array(
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $states
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('billing_zip', array(
                                'class' => 'form-control'
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->button('Submit', array(
                                'class' => 'btn btn-primary'
                                )
                            );
                        ?>
                    </div>
                    <?php echo $this->Form->end() ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Questionnaire Data</h3>
                        <div id="questionnaire-accordion" class="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="health-goals-heading">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#questionnaire-accordion" href="#health-goals-collapse" aria-expanded="true" aria-controls="health-goals-collapse">
                                            Health Goals
                                        </a>
                                    </h5>
                                </div>

                                <div id="health-goals-collapse" class="collapse" role="tabpanel" aria-labelledby="health-goals-heading">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Attribute</th>
                                                        <th>Information</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(!empty($health_goals)):?>
                                                        <?php foreach($health_goals as $health_goal => $value):?>
                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                        echo trim(ucwords(str_replace("_", " ", $health_goal)));
                                                                    ?>
                                                                    </td>
                                                                <td>
                                                                    <?php
                                                                        if($value == '1') {
                                                                            echo "<div class='label label-table label-info'>YES</div>";
                                                                        }
                                                                        else if($value == '0') {
                                                                            echo "<div class='label label-table label-danger'>NO</div>";
                                                                        }
                                                                        else {
                                                                            echo trim($value);
                                                                        }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach;?>
                                                    <?php endif;;?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="about-you-heading">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#questionnaire-accordion" href="#about-you-collapse" aria-expanded="false" aria-controls="about-you-collapse">
                                            About You
                                        </a>
                                    </h5>
                                </div>
                                <div id="about-you-collapse" class="collapse" role="tabpanel" aria-labelledby="about-you-heading">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Attribute</th>
                                                        <th>Information</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(!empty($about_you)):?>
                                                        <?php foreach($about_you as $about => $value):?>
                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                        echo trim(ucwords(str_replace("_", " ", $about)));
                                                                    ?>
                                                                    </td>
                                                                <td>
                                                                    <?php
                                                                        echo trim($value);
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach;?>
                                                    <?php endif;?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#questionnaire-accordion" href="#collapseexaThree" aria-expanded="false" aria-controls="collapseexaThree">
                                            Coming Soon
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseexaThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        Coming Soon.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="supplement-section">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Supplement Options</h3>
                        <div class="button-box">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#supplement-add-edit-modal" id="addSupplement">Add Supplement</button>
                        </div>
                        <div id="supplement-accordion" class="accordion" role="tablist" aria-multiselectable="true">
                            <?php $i = 1;?>
                            <?php foreach($userSupplements as $userSupplement):?>
                                <div class="card">
                                    <div class="card-header" role="tab" id="supplement-<?php echo $userSupplement['id'];?>">
                                        <div class="card-actions">
                                            <?php
                                                echo $this->Html->link(
                                                    _(
                                                        $this->Html->tag('i', '', array('class' => 'mdi mdi-delete'))
                                                    ),
                                                    ['controller' => 'userSupplements', 'action' => 'delete', $userSupplement->id],
                                                    [
                                                        'escape' => false,
                                                        'data-toggle' => 'tooltip',
                                                        'data-original-title' => 'Delete',
                                                        'confirm' => __('Are you sure you want to delete this supplement data?')
                                                    ]
                                                );
                                            ;?>
                                            <span data-toggle="tooltip" data-original-title="Edit"><a data-toggle="modal" data-target="#supplement-add-edit-modal" class="editSupplement" data-supplement-id="<?php echo $userSupplement['id'];?>"><i class="mdi mdi-grease-pencil"></i></a></span>
                                        </div>
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#supplement-accordion" href="#supplement-<?php echo $userSupplement['id'];?>-href" aria-expanded="false" aria-controls="supplement-<?php echo $userSupplement['id'];?>-href">
                                                <?php echo $i . ". " . $userSupplement['Supplements']['name'];?>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="supplement-<?php echo $userSupplement['id'];?>-href" class="collapse" role="tabpanel" aria-labelledby="supplement-">
                                        <div class="card-body">
                                            <?php
                                                if(!empty($userSupplement['dosage'])) {
                                                    echo "<p><strong>Dosage:</strong> " . $userSupplement['dosage'] . "</p>";
                                                }
                                                if(!empty($userSupplement['your_lifestyle'])) {
                                                    echo "<p><strong>Your Lifestyle:</strong> " . $userSupplement['your_lifestyle'] . "</p>";
                                                }
                                                if(!empty($userSupplement['your_goals'])) {
                                                    echo "<p><strong>Your Goals:</strong> " . $userSupplement['your_goals'] . "</p>";
                                                }
                                                if(!empty($userSupplement['your_genetics'])) {
                                                    echo "<p><strong>Your Genetics:</strong> " . $userSupplement['your_genetics'] . "</p>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++;?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="supplement-add-edit-modal" tabindex="-1" role="dialog" aria-labelledby="supplement-add-edit-modal-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="supplement-add-edit-modal-label">Supplement Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <?php
                echo $this->Form->create(null,
                    [
                        'url' =>
                            [
                                'action' => 'add',
                                'controller' => 'UserSupplements'
                            ],
                        'id' => 'supplement-add-edit-form'
                    ]
                );
            ?>
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('supplement_id', array(
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $supplements,
                                'label' => 'Supplement Name:',
                                'required' => true
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('id', array(
                                'class' => 'form-control',
                                'type' => 'hidden'
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('user_id', array(
                                'class' => 'form-control',
                                'type' => 'hidden',
                                'value' => $user->id
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('dosage', array(
                                'class' => 'form-control',
                                'label' => 'Dosage:',
                                'required' => true
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('your_lifestyle', array(
                                'class' => 'form-control',
                                'label' => 'Lifestyle:',
                                'required' => true
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('your_goals', array(
                                'class' => 'form-control',
                                'label' => 'Goals:',
                                'required' => true
                                )
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control('your_genetics', array(
                                'class' => 'form-control',
                                'label' => 'Genetics:',
                                'required' => true
                                )
                            );
                        ?>
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
                                    'label' => false
                                )
                            );
                        ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <?php
                        echo $this->Form->button('Submit', array(
                            'class' => 'btn btn-success'
                            )
                        );
                    ?>
                </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
