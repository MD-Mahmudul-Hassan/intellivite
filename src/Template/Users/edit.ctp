<div class="checkout-header-margin"></div>

<ul class="nav nav-tabs customtab" role="tablist" id="profile-info">
    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#basic-info" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Account</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#shipping-info" role="tab"><span class="hidden-sm-up"><i class="ti-location-pin"></i></span> <span class="hidden-xs-down">Shipping</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#change-password" role="tab"><span class="hidden-sm-up"><i class="ti-key"></i></span> <span class="hidden-xs-down">Password</span></a> </li>
</ul>
<!-- Tab panes -->
<div class="row">
    <div class="col-lg-5">
        <div class="tab-content">
            <div class="tab-pane active" id="basic-info" role="tabpanel">
                <div class="p-20">
                    <h3>Basic Information</h3>
                    <?php echo $this->Form->create($user, ['class' => 'form-material']);?>
                        <div class="form-group">
                            <?php
                                echo $this->Form->control(
                                    'first_name', [
                                        'label' =>false,
                                        'placeholder'=>'First name'
                                    ]
                                );
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                echo $this->Form->control(
                                    'last_name', [
                                        'label' =>false,
                                        'placeholder'=>'Last name'
                                    ]
                                );
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                                echo $this->Form->control(
                                    'email', [
                                        'label' => false,
                                        'placeholder'=>"Email",
                                        'disabled'
                                    ]
                                );
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                                echo $this->Form->control(
                                    'phone_number', [
                                        'label' => false,
                                        'placeholder'=>"Phone Number"
                                    ]
                                );
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                                echo $this->Form->control(
                                    'gender', [
                                        'type'=>'radio',
                                        'options' => [
                                            ['value' => 1, 'text' => 'Male'],
                                            ['value' => 2, 'text' => 'Female'],
                                        ],
                                        'templates' => array(
                                            'nestingLabel' => '{{hidden}}<label {{attrs}}>{{text}}</label>',
                                            'radioWrapper' => '<div>{{input}}{{label}}</div>',
                                            ),
                                    ]
                                );
                            ?>
                        </div>
                        <div class="form-group">
                            <div class="form-actions">
                                <?php echo $this->Form->button(__('Submit'), ['class' =>'btn btn-block btn-info']); ?>
                            </div>
                        </div>
                    <?php echo $this->Form->end();?>
                </div>
            </div>
            <div class="tab-pane  p-20" id="shipping-info" role="tabpanel">
                <h3>Shipping Information</h3>
                <?php echo $this->Form->create($user, ['class' => 'form-material']);?>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control(
                                'shipping_street_address', [
                                    'label' =>false,
                                    'placeholder'=>'Street Address',
                                    'rows' => 2
                                ]
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control(
                                'shipping_city', [
                                    'label' =>false,
                                    'placeholder'=>'City'
                                ]
                            );
                        ?>
                    </div>

                    <div class="form-group">
                        <?php
                            echo $this->Form->control(
                                'shipping_state', [
                                    'type' => 'select',
                                    'options' => $states,
                                    'empty' => "State",
                                    'label' => false
                                ]
                            );
                        ?>
                    </div>

                    <div class="form-group">
                        <?php
                            echo $this->Form->control(
                                'shipping_zip', [
                                    'label' => false,
                                    'placeholder'=>"Zipcode"
                                ]
                            );
                        ?>
                    </div>
                    <div>
                    <?php
                        echo $this->Form->button(__('Submit'), ['class' =>'btn btn-block btn-info']);
                    ?>
                    </div>
                <?php echo $this->Form->end();?>
            </div>
            <div class="tab-pane p-20" id="change-password" role="tabpanel">
                <h3>Change Password</h3>
                <?php echo $this->Form->create($user, ['url' => ['action' => 'edit'], 'class' => 'form-material']); ?>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control(
                                'current_password', [
                                    'label' =>false,
                                    'placeholder'=>'Current Password',
                                    'type' => 'password',
                                    'required'
                                ]
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control(
                                'new_password', [
                                    'label' =>false,
                                    'placeholder'=>'New Password',
                                    'type' => 'password',
                                    'required'
                                ]
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->control(
                                'confirm_password', [
                                    'label' =>false,
                                    'placeholder'=>'Confirm Password',
                                    'type' => 'password',
                                    'required'
                                ]
                            );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo $this->Form->button(__('Submit'), ['class' =>'btn btn-block btn-info', 'name' => 'change_password'])
                        ?>
                    </div>
                <?php echo $this->Form->end();?>
            </div>
        </div>
    </div>
</div>
