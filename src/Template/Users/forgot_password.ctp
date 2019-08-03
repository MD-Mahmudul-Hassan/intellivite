<div class="row user-form-top ">    
    <div class="col-lg-4 offset-md-4">                  
            <?php echo $this->Form->create($user, ['class'=>'form-border-shadow']); ?>
            <h3 align="center">Enter your email</h3><hr>
            <div class="form-group form-warning-text"><?= $this->Flash->render() ?></div>
            <div class="form-group">
                <?= $this->Form->control('email', array('class' => 'form-control')) ?>
            </div>            

            <div class="form-group">
                <?= $this->Form->button('Submit', array('class' => 'btn btn-primary')) ?>
            </div>

            <?php echo $this->Form->end() ?>
    </div>
</div>