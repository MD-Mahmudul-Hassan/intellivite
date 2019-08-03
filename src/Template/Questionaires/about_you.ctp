<?php
    $aboutYou = json_decode($questionaire->about_you);
?>
<div class="row user-form-top ">    
    <div class="col-lg-6 offset-md-3">                  
            <?php
                echo $this->Html->image("about-you-cover.jpg", [
                    "alt" => "Health Goals",                
                    'width' => '100%',                
                ]);
            ?>
            <?php echo $this->Form->create($questionaire, ['class'=>'form-border-shadow questionaire-form-container', 'id'=>'about-you']); ?>            
            <h3>About You</h3><hr>
            <div class="form-group form-warning-text"><?= $this->Flash->render() ?></div>
                <div class="form-group">
                    Gender*
                </div>
                <div class="form-group">
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
                                'value' => !empty($aboutYou->gender) ? $aboutYou->gender : "",
                                'hiddenField' => false
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <span class="fa fa-calendar"></span> Date of Birth*
                </div>

                <div class="form-group input-daterange input-group" id="date-range">
                    <div class="col-md-6">
                        <?php
                            echo $this->Form->input(
                                'dob', [
                                    'label' => false,
                                    'class' => 'form-control',
                                    'placeholder' => 'MM/DD/YYYY',
                                    'required'=>"required",
                                    'readonly' => true,
                                    'value' => (!empty($aboutYou->dob)) ? $aboutYou->dob : "",
                                    'data-date-end-date' => '0d'
                                ]
                            );
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Which Ethnicity do you most identify with?*</label>
                    <?php
                        echo $this->Form->input(
                            'ethnicity', [
                                'type' => 'radio',
                                'options' => [
                                    ['value' => 'American Indian or Alaska Native', 'text' => 'American Indian or Alaska Native'],
                                    ['value' => 'Asian', 'text' => 'Asian'],
                                    ['value' => 'Black or African American', 'text' => 'Black or African American'],                                    
                                    ['value' => 'Hispanic or Latino', 'text' => 'Hispanic or Latino'],
                                    ['value' => 'Native Hawaiian or Other Pacific Islander', 'text' => 'Native Hawaiian or Other Pacific Islander'],
                                    ['value' => 'White', 'text' => 'White'],
                                    ['value' => 'Middle Eastern', 'text' => 'Middle Eastern'],
                                ],
                                'label' => false,
                                'class'=>"radio-col-light-blue",
                                'templates' => [
                                    'nestingLabel' =>'{{input}} <label{{attrs}}> {{text}} </label>'
                                ], 
                                'value' => !empty($aboutYou->ethnicity) ? $aboutYou->ethnicity : 1,
                                'hiddenField' => false
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <?php 
                        echo $this->Form->control(
                                'other_ethnicity', [
                                        'class' => 'form-control', 
                                        'label'=>['text'=>'Other'],
                                        'value' => (!empty($aboutYou->other_ethnicity)) ? $aboutYou->other_ethnicity : "",
                                        'size' => 100,

                                    ]
                                );
                    ?>
                </div>

            <div class="form-group">Height*</div>
            <div class="col-md-6 padding-left-zero">
                <div class="input-group">                    
                    <?php 
                        echo $this->Form->control(
                                'height_ft', [
                                        'type' => "number",
                                        'min' => 0,
                                        'class' => 'form-control', 
                                        'required'=>"required",
                                        'placeholder' => "ft",
                                        'label'=>['text' => 'ft'],                                        
                                        'value' => (!empty($aboutYou->height_ft)) ? $aboutYou->height_ft : "",                                        
                                    ]
                                );
                    ?>                    
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <?php 
                        echo $this->Form->control(
                                'height_inch', [
                                        'type' => "number",
                                        'min' => 0,
                                        'class' => 'form-control', 
                                        'placeholder' => "in",
                                        'required'=>"required",
                                        'label'=>['text' => 'inch'],
                                        'value' => (!empty($aboutYou->height_inch)) ? $aboutYou->height_inch : "",
                                        

                                    ]
                                );
                    ?>
                </div>                
            </div>

            <div class="form-group">What is your current weight? (lbs)*</div>
                <div class="form-group">     
                    <?php 
                        echo $this->Form->control(
                                'your_current_weight', [
                                        'type' => "number",
                                        'min' => 0,
                                        'class' => 'form-control', 
                                        'required'=>"required",                                       
                                        'label'=>false,                                        
                                        'value' => (!empty($aboutYou->your_current_weight)) ? $aboutYou->your_current_weight : "",                                        
                                    ]
                                );
                    ?>                    
            
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?php 
                        echo $this->Form->button(
                            '<i class="fa fa-save"></i> Save', [
                                'class' => 'btn btn-info',
                                'id'=>'questionnaire-submit',
                                'escape' => false,
                            ]) ;

                    ?>
                </div>
                <div class="col-md-6">
                    <?php   
                        echo $this->Html->link(
                            '<i class="fa fa-mail-reply"></i> Back to Questionnaires',
                            array('controller'=>'Questionaires', 'action'=>'index','_full'=>true),
                            array('escape' => false, 'class'=>'btn btn-info')
                    );
                ?>  
                </div>
                
            </div>
        
            <?php echo $this->Form->end(); ?>
    </div>
</div>