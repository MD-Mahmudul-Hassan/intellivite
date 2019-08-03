<div>
    <?= $this->Form->create() ?>
    <div class="form-group">
        <?= $this->Form->control('email', array('class' => 'form-control', 'type' => 'email', 'required' => 'required')) ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('password', array('class' => 'form-control')) ?>
    </div>
    <div class="form-group">
        <?= $this->Form->button('Login', array('class' => 'btn btn-success')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
