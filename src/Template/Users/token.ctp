<div class="row user-form-top ">    
    <div class="col-lg-4 offset-md-4">                  
            <?php echo $this->Form->create($user, ['class'=>'form-border-shadow']); ?>            
            <div class="form-group">A token has been sent to your email.</div>
            <h3 align="center">Enter the token</h3><hr>
            <div class="form-group form-warning-text"><?= $this->Flash->render() ?></div>
            <div class="form-group">
                <?= $this->Form->control('reset_password_token', array('class' => 'form-control','label'=>false)) ?>
            </div>            

            <div class="form-group">
                <?= $this->Form->button('Confirm', array('class' => 'btn btn-primary')) ?>
            </div>

            <?php echo $this->Form->end() ?>
    </div>
</div>