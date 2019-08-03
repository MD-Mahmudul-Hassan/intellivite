<div class="checkout-header-margin"></div>
<div class="row">
    <div class="col-lg-5 offset-lg-1">
        <div class="card">
            <div class="card-body">
                <?php echo $this->Form->create($users,['class' => 'form-material', 'id'=>'checkout-form']); ?>
                <!-- Personal Information starts here-->
                <div class="form-group">
                    <h4>Create Your Account</h4>
                </div>
                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'first_name', [
                                'label' =>false,
                                'class' => 'form-control',
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
                                'class' => 'form-control',
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
                                'class' => 'form-control',
                                'placeholder'=>"Email"
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'phone_number', [
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder'=>"Phone Number"
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <?php
                        echo $this->Form->input(
                            'gender', [
                                'type' => 'radio',
                                'options' => [
                                    ['value' => 'Male', 'text' => 'Male'],
                                    ['value' => 'Female', 'text' => 'Female'],
                                ],
                                'label' => false,
                                'class'=>"radio-col-light-blue",
                                'templates' => [
                                    'nestingLabel' =>'{{input}} <label{{attrs}}> {{text}} </label>'
                                ],                                 
                                'hiddenField' => false,
                                'required'=>'required'
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'password', [
                                'label' => false,
                                'class' => 'form-control',
                                'type'=>'password',
                                'placeholder'=>"Password",
                                'required'=>'required'
                            ]
                        );
                    ?>
                </div>
                <!--Personal information ends here -->

                <!--Shipping information starts here -->
                <div class="form-group">
                    <h4>Shipping Address</h4>
                </div>
                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'shipping_street_address', [
                                'label' =>false,
                                'class' => 'form-control',
                                'placeholder'=>'Street Address'
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'shipping_city', [
                                'label' =>false,
                                'class' => 'form-control',
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
                                'label' => false,
                                'class' => 'form-control',
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'shipping_zip', [
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder'=>"Zipcode"
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label data-toggle="collapse" data-target="#billingAddress" aria-expanded="false" aria-controls="collapseOne">
                            <input type="checkbox" id='billingInformation'>
                            <label for="billingInformation">My billing address is the same as my shipping address.</label>
                        </label>
                    </div>

                    <div id="billingAddress" aria-expanded="false" class="collapse">
                        <div class="form-group">
                            <h4>Billing Address</h4>
                        </div>
                        <div class="form-group">
                            <?php
                                echo $this->Form->control(
                                    'billing_street_address', [
                                        'label' =>false,
                                        'class' => 'form-control',
                                        'placeholder'=>'Street Address'
                                    ]
                                );
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo $this->Form->control(
                                'billing_city', [
                                    'label' =>false,
                                    'class' => 'form-control',
                                    'placeholder'=>'City'
                                ]
                            );
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo $this->Form->control(
                                'billing_state', [
                                    'type' => 'select',
                                    'options' => $states,
                                    'empty' => "State",
                                    'label' => false,
                                    'class' => 'form-control',
                                ]
                            );
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo $this->Form->control(
                                'billing_zip', [
                                    'label' => false,
                                    'class' => 'form-control',
                                    'placeholder'=>"Zipcode"
                                ]
                            );
                            ?>
                        </div>
                    </div>
                </div>
                <!--Shipping information ends here -->

                <!--Billing information starts here -->
                <div class="form-group">
                    <h4>Billing Information</h4>
                </div>
                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'card_name', [
                                'label' =>false,
                                "maxlength"=>"50",
                                'class' => 'form-control',
                                'placeholder'=>'Card name'
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'card_number', [
                                'label' =>false,
                                "maxlength"=>"16",
                                'class' => 'form-control',
                                'placeholder'=>'Card number'
                            ]
                        );
                    ?>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <?php
                            echo $this->Form->control(
                                'expiration_month', [
                                    'label' => false,
                                    'maxlength'=>'2',
                                    'size'=>'2',
                                    'placeholder'=>'MM',
                                    'class'=>'card-expiration'
                                ]
                            );
                        ?>
                    </div>
                    <div class="col-md-3">
                        <?php
                            echo $this->Form->control(
                                'expiration_year', [
                                    'label' => false,
                                    'maxlength'=>'4',
                                    'size'=>'4',
                                    'placeholder'=>'YYYY',
                                ]
                            );
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php
                        echo $this->Form->control(
                            'security_code', [
                                'label' => false,
                                'class' => 'form-control',
                                'maxlength'=>'6',
                                'placeholder'=>"Security code"
                            ]
                        );
                    ?>
                </div>
                <!--Billing information ends here -->


                <div class="form-group">
                    <?php
                        echo $this->Form->checkbox(
                            'terms_and_conditions_check', [
                                'value' => 1,
                                'id'=>'terms-and-conditions-check',
                                'class'=> 'filled-in chk-col-light-blue',
                                'required'=>'required'
                            ]
                        );
                    ?>
                    <label for="terms-and-conditions-check">By checking this box, I have read and accept Vitagene’s</label>
                </div>

                <div class="form-group">            
                    <?php echo $this->Form->button(__('Checkout'), ['class' =>'btn btn-block btn-primary']); ?>
                </div>
              <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<div class="checkout-footer-margin"></div>

