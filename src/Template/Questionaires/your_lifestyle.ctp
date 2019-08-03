<?php
    $yourLifestyle = json_decode($questionaire->your_lifestyle);
?>
<div class="row user-form-top ">    
    <div class="col-lg-6 offset-md-3">                  
            <?php
                echo $this->Html->image("your-lifestyle-cover.jpg", [
                    "alt" => "your lifestyle",                
                    'width' => '100%',                
                ]);
            ?>        
            <?php echo $this->Form->create($questionaire, ['class'=>'form-border-shadow questionaire-form-container', 'id'=>'your-lifestyle']); ?>            
            <h3>Your Lifestyle</h3><hr>
            <div class="form-group form-warning-text"><?= $this->Flash->render() ?></div>                
                <div class="form-group">                    
                        <label>Select Your Current Activity Level<span class="required-asteric">*</span></label>
                        <?php
                            echo $this->Form->input(
                                'current_activity_lavel', [
                                    'type' => 'radio',
                                    'options' => [
                                        ['value' => 'Not Active (Little to no exercise)', 'text' => 'Not Active (Little to no exercise)'],
                                        ['value' => 'Lightly Active (Exercise 1-3 times per week)', 'text' => 'Lightly Active (Exercise 1-3 times per week)'],
                                        ['value' => 'Moderately Active (Exercise 3-5 times per week)', 'text' => 'Moderately Active (Exercise 3-5 times per week)'],
                                        ['value' => 'Very Active (Vigorous exercise 6-7 times per week)', 'text' => 'Very Active (Vigorous exercise 6-7 times per week)'],
                                        ['value' => 'Extremely Active (Very vigorous exercise 6-7 times per week)', 'text' => 'Extremely Active (Very vigorous exercise 6-7 times per week)'],                                    
                                    ],
                                    'label' => false,                                
                                    'class'=>"custom-control-input",
                                    'required'=>true,
                                    'templates' => [
                                        'nestingLabel' =>'{{input}} <label{{attrs}} > {{text}} </label>'                                        
                                    ], 
                                    'value' => !empty($yourLifestyle->current_activity_lavel) ? $yourLifestyle->current_activity_lavel : 1,                                
                                    'hiddenField' => false
                                ]
                            );
                        ?>                    
                </div>

                <div class="form-group">
                    <label class="control-label">Select your preferred exercise activities<span class="required-asteric">*</span></label>                    
                    <select name="exercise_activities[]" class="select2 m-b-10 select2-multiple select2-hidden-accessible" style="width: 100%" multiple="" data-placeholder="Start typing" tabindex="-1" aria-hidden="true" required="required">
                        <?php
                            foreach ($excerciseActivities as $key => $exercise) {
                                        $selected = "";
                                        if (array_key_exists($exercise, $userExcerciseActivitiesArray)) {
                                            $selected = "selected";                                            
                                        }
                         ?>
                        <option value="<?php echo $exercise?>" <?php echo $selected; ?> ><?php echo $exercise; ?></option>
                        <?php } ?>
                    </select>
                </div>
                

                <div class="form-group">
                    <label>When you wake up in the morning, how do you feel?<span class="required-asteric">*</span></label>
                    <?php
                        echo $this->Form->input(
                            'morning_feeling', [
                                'type' => 'radio',
                                'options' => [
                                    ['value' => 'Ready to jump out of bed.', 'text' => 'Ready to jump out of bed.'],
                                    ['value' => 'Groggy. It takes me 5-15 minutes to feel awake.', 'text' => 'Groggy. It takes me 5-15 minutes to feel awake.'],
                                    ['value' => 'Extremely groggy. It takes me a good hour to feel awake.', 'text' => 'Extremely groggy. It takes me a good hour to feel awake.'],
                                    ['value' => "Tired. Even with a lot of caffeine. I don't feel energetic like I used to.", 'text' => "Tired. Even with a lot of caffeine. I don't feel energetic like I used to."],                                            
                                ],
                                'label' => false,
                                'class'=>"radio-col-light-blue",
                                'required'=>true,
                                'templates' => [
                                    'nestingLabel' =>'{{input}} <label{{attrs}}> {{text}} </label>'
                                ], 
                                'value' => !empty($yourLifestyle->morning_feeling) ? $yourLifestyle->morning_feeling : 1,
                                'hiddenField' => false
                            ]
                        );
                    ?>
                </div>

                <div class="form-group required">
                    <label>Do you smoke?<span class="required-asteric">*</span></label>
                    <?php
                        echo $this->Form->input(
                            'smoking_habit', [
                                'type' => 'radio',
                                'options' => [
                                    ['value' => 'Yes', 'text' => 'Yes'],
                                    ['value' => 'No', 'text' => 'No']
                                ],
                                'label' => false,
                                'class'=>"radio-col-light-blue",
                                'required'=>true,
                                'templates' => [
                                    'nestingLabel' =>'{{input}} <label{{attrs}}> {{text}} </label>'
                                ],                                
                                'value' => !empty($yourLifestyle->smoking_habit) ? $yourLifestyle->smoking_habit : 1,
                                'hiddenField' => false
                            ]
                        );
                    ?>
                </div>

                <div class="form-group">
                    <label class="control-label" for="email-format">Are you concerned about mental health or cognitive function?</label>
                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'anxiety', [
                                    'value' => 1,
                                    'id'=>'anxiety',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($yourLifestyle->anxiety) && $yourLifestyle->anxiety === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="anxiety">Anxiety</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'depression', [
                                    'value' => 1,
                                    'id'=>'depression',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($yourLifestyle->depression) && $yourLifestyle->depression === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="depression">Depression</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'memory', [
                                    'value' => 1,
                                    'id'=>'memory',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($yourLifestyle->memory) && $yourLifestyle->memory === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="memory">Memory</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'focus', [
                                    'value' => 1,
                                    'id'=>'focus',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($yourLifestyle->focus) && $yourLifestyle->focus === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="focus">Focus</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'none_of_the_above', [
                                    'value' => 1,
                                    'id'=>'none-of-the-above',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($yourLifestyle->none_of_the_above) && $yourLifestyle->none_of_the_above === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="none-of-the-above">None of the above</label>
                    </div>

                </div>

                <div class="form-group">
                    <?php 
                        echo $this->Form->control(
                                'other_mental_health', [
                                        'class' => 'form-control', 
                                        'label'=>['text'=>'Other'],
                                        'value' => (!empty($yourLifestyle->other_mental_health)) ? $yourLifestyle->other_mental_health : "",
                                        'size' => 100,

                                    ]
                                );
                    ?>
                </div>

            

            <div class="form-group">Do you have any other concerns you would like to share?</div>
                <div class="form-group">     
                    <?php 
                        echo $this->Form->control(
                                'other_concerns', [
                                        'class' => 'form-control', 
                                        'label'=>false,                                        
                                        'value' => (!empty($yourLifestyle->other_concerns)) ? $yourLifestyle->other_concerns : "",
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