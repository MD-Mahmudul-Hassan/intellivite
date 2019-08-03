<div class="row">
    <div class="col-md-12">
        <h2>Your questionnaires</h2>
    </div>
</div>
<div class="row dashboard-margin">    
    <div class="col-md-4 ">        
        <a href='<?php echo $this->Url->build(["controller" => "Questionaires","action" => "healthGoals", "escape" => false]);?>' class="main-container">
            <div class="col-md-12 questionnaire-container">                            
                    <?php
                        echo $this->Html->image("running.jpg", [
                            "alt" => "Health Goals",                
                            'class' => 'questionnaire-cover-image'
                        ]);
                    ?>
            </div>
            <div class="col-md-12 questionnaire-container">
                <h2 class="card-title font-weight-bold text-center questionnaire-title">Health Goals</h2>
            </div>
        </a>
    </div>

    <div class="col-md-4 ">        
        <a href='<?php echo $this->Url->build(["controller" => "Questionaires","action" => "aboutYou", "escape" => false]);?>' class="main-container">
            <div class="col-md-12 questionnaire-container">                            
                    <?php
                        echo $this->Html->image("about-you.jpg", [
                            "alt" => "Health Goals",                
                            'class' => 'questionnaire-cover-image'
                        ]);
                    ?>
            </div>
            <div class="col-md-12 questionnaire-container">
                <h2 class="card-title font-weight-bold text-center questionnaire-title">About You</h2>
            </div>
        </a>
    </div>
</div>

<div class="row dashboard-margin">
    <div class="col-md-4 ">        
        <a href='<?php echo $this->Url->build(["controller" => "Questionaires","action" => "yourLifestyle", "escape" => false]);?>' class="main-container">
            <div class="col-md-12 questionnaire-container">                            
                    <?php
                        echo $this->Html->image("your-lifestyle.jpg", [
                            "alt" => "Health Goals",                
                            'class' => 'questionnaire-cover-image'
                        ]);
                    ?>
            </div>
            <div class="col-md-12 questionnaire-container">
                <h2 class="card-title font-weight-bold text-center questionnaire-title">Your LifeStyle</h2>
            </div>
        </a>
    </div>
</div>