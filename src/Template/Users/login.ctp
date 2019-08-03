<div class="row user-form-top ">    
    <div class="col-lg-4 offset-md-4"> 
        <div class="login-box card">
            <div class="card-body">                
                <?php echo $this->Form->create($user, ['class'=>'']); ?>                
                <div class="form-group form-warning-text"><?= $this->Flash->render() ?></div>
                <h3 class="box-title m-b-20"><i class="fa fa-sign-in"></i> Sign In</h3>                    
                    <div class="form-group">
                        <?php 
                            echo $this->Form->control(
                                'email', [
                                    'class' => 'form-control',
                                    'placeholder'=>'Email',
                                    'label'=>false
                                ]
                            ) ;
                        ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control(
                            'password', [
                                'class' => 'form-control', 
                                'placeholder'=>'Password',
                                'label'=>false
                            ]
                        ); ?>
                    </div>

                    <div class="form-group">
                        <?php   
                            echo $this->Html->link(
                                'Forgot password?',
                                  array('controller'=>'/', 'action'=>'forgotpassword','_full'=>true),
                                  array('escape' => false)
                                );
                        ?>
                    </div>

                <div class="form-group">
                        <?php echo $this->Form->button(
                                'Log In', [
                                    'class' => 'btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light'
                                ]
                            ); 
                        ?>
                    </div> 
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>