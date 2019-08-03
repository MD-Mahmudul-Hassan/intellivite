<?php
    $healthGoals = json_decode($questionaire->health_goals);
?>
<div class="row user-form-top">    
    <div class="col-md-6 offset-md-3">
            <?php
                echo $this->Html->image("running-cover.jpg", [
                    "alt" => "Health Goals",                
                    'width' => '100%',                
                ]);
            ?>            
            <?php echo $this->Form->create($questionaire, ['class'=>'form-border-shadow questionaire-form-container', 'id'=>'health-goals']); ?>
            <h3>Health Goals</h3><hr>            
            <div class="form-group form-warning-text"><?= $this->Flash->render() ?></div>
                <div class="form-group">
                    <label class="control-label" for="email-format">Your Goals</label>
                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'eat_healthier', [
                                    'value' => 1,
                                    'id'=>'eat-healthier',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->eat_healthier) && $healthGoals->eat_healthier === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="eat-healthier">Eat healthier</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'increase_energy', [
                                    'value' => 1,
                                    'id'=>'increase-energy',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->increase_energy) && $healthGoals->increase_energy === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="increase-energy">Increase energy</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'increase_physical_activity', [
                                    'value' => 1,
                                    'id'=>'increase-physical-activity',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->increase_physical_activity) && $healthGoals->increase_physical_activity === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="increase-physical-activity">Increase physical activity</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'lose_weight', [
                                    'value' => 1,
                                    'id'=>'lose-weight',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->lose_weight) && $healthGoals->lose_weight === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="lose-weight">Lose weight</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'reduce_stress', [
                                    'value' => 1,
                                    'id'=>'reduce-stress',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->reduce_stress) && $healthGoals->reduce_stress === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="reduce-stress">Reduce stress</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'help_back_joint_or_muscle', [
                                    'value' => 1,
                                    'id'=>'help-back-joint-or-muscle',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->help_back_joint_or_muscle) && $healthGoals->help_back_joint_or_muscle === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="help-back-joint-or-muscle">Help back, joint, or muscle pain</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'sleep_better', [
                                    'value' => 1,
                                    'id'=>'sleep-better',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->sleep_better) && $healthGoals->sleep_better === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="sleep-better">Sleep better</label>
                    </div>

                    <div class="checkbox checkbox-success">
                        <?php
                            echo $this->Form->checkbox(
                                'none_of_the_above', [
                                    'value' => 1,
                                    'id'=>'none-of-the-above',
                                    'class'=> 'filled-in chk-col-light-blue',
                                    'checked' => (!empty($healthGoals->none_of_the_above) && $healthGoals->none_of_the_above === '1') ? true : ""
                                ]
                            );
                        ?>
                        <label for="none-of-the-above">None of the above</label>
                    </div>

                </div>



            <div class="form-group">
                <?php                     
                    echo $this->Form->control('other_health_goals', [
                                    'class' => 'form-control', 
                                    'label'=>['text'=>'Others'],
                                    'value' => (!empty($healthGoals->other_health_goals)) ? $healthGoals->other_health_goals : ""
                                ]);
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