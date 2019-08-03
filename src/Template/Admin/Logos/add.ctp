<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Navigation Logo</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div>
            <div class="card">
                <div class="card-body">
                    <?php
                        echo $this->Html->image($logo['photo'], array('pathPrefix' => 'files/Logos/photo/'));
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle">Change your logo: Logo size must be 75px X 75px in dimension</h6>
                    <?php echo $this->Form->create($logo, ['type' => 'file']); ?>
                        <?php echo $this->Form->input('photo', ['type' => 'file'], ['class' => 'form-control']); ?>
                        <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')) ?>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


