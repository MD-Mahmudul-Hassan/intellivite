<div class="row user-form-top ">    
    <div class="col-lg-4 offset-md-4">                  
            <?php echo $this->Form->create($user, ['class'=>'form-border-shadow']); ?>            
            <div class="form-group">Token matched!</div>
            <h3 align="center">Enter your new passowrd</h3><hr>
            <div class="form-group form-warning-text"><?= $this->Flash->render() ?></div>
            <div class="form-group">
                <?= $this->Form->control('password', array('type'=>'password','value'=>"", 'class' => 'form-control','label'=>false)) ?>                
            </div>            

            <div class="form-group">
                <?= $this->Form->button('Confirm', array('class' => 'btn btn-primary')) ?>
            </div>

            <?php echo $this->Form->end() ?>
    </div>
</div>