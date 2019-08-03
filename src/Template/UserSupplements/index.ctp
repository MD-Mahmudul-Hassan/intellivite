<?php
/*
* Index
*/
?>
<div class="col-md-10 offset-md-1" id="user-supplements">
    <div class="p-20">
    	<div class="hidden-sm-up">
    		<h3>Your Personalized Supplements</h3>
    	</div><hr class='hidden-sm-up title-border-bottom'>
        <ul class="nav nav-tabs customtab" role="tablist">        	
        	<li class="nav-item hidden-sm-down">        		
	    		<span>
		    	<?php
		    		echo $this->Html->image(
		    			'personalized-supplements.png', [
		    				'alt' => 'personalized supplementsers',
		    				'class' => 'personalized-supplements-img'
		    			]);
		    	?>
		    	</span>		    	
        	</li>

            <li class="nav-item"> 
            	<a class="nav-link supplements-tab-title active" data-toggle="tab" href="#vitaplan" role="tab" aria-selected="true">
            		<span class="hidden-sm-up">
            			<i class="fa fa-stethoscope"></i>
            		</span> 
            		<span class="hidden-xs-down">Vitaplan</span>
            	</a> 
            </li>
            <li class="nav-item"> 
            	<a class="nav-link supplements-tab-title" data-toggle="tab" href="#overview" role="tab" aria-selected="false">
            		<span class="hidden-sm-up">
            			<i class="fa fa-eye"></i>
            		</span> 
            		<span class="hidden-xs-down">Overview</span>
            	</a> 
            </li>
            <li class="nav-item"> 
            	<a class="nav-link supplements-tab-title" data-toggle="tab" href="#quality" role="tab" aria-selected="false">
            		<span class="hidden-sm-up">
            			<i class="ti-layout"></i>
            		</span> 
            		<span class="hidden-xs-down">Quality</span>
            	</a> 
            </li>
        </ul>
        <div class="row">
        	<div class="col-md-11">
        		<!-- Tab panes -->
	        <div class="tab-content">        	
	            <div class="tab-pane active show" id="vitaplan" role="tabpanel">
	            	<span class="hidden-sm-up">Vitaplan</span>
	                <div class="p-20">
	                	<?php
	                		if (!empty($userSupplements)) {	                				                		
		                		$patternUrl = "../../webroot/img/";
		                		$index = 1;              		
		                		foreach ($userSupplements as $supplement) {
		                			$collapsableId = $supplement->supplement['name'].'-'.$supplement->id;
		                			if ($index === 4) {
		                				$index = 1;
		                			}
	                	?>
	                	<!-- Accordion containers -->
	                	<div class="row tab-margin-bottom-30 background-pattern" style="background-image: url('<?php echo $patternUrl.'pattern-'.$index.'.png'; ?>'); ">
	                		<div class="col-md-12 active accordion-background headerTab" data-toggle="collapse" data-target="#<?php echo $collapsableId; ?>" aria-expanded="false" aria-controls="collapseOne" id="<?php echo 'supplement_'.$supplement->id; ?>">
	                			<div class="row">
	                				<div class="col-md-6">
			                			<h3 class="supplement-title"><?php echo $supplement->supplement['name']; ?></h3>
			                			<p class="supplement-title">Dosage: <?php echo $supplement->dosage; ?></p>			                			
			                		</div>
			                		<div class="col-md-6 hidden-sm-down text-right">
			                			<label >
			                				<i class="fa fa-minus accordion-expand-icon expand-sign-<?php echo 'supplement_'.$supplement->id; ?>"></i>
			                				<i class="fa fa-plus accordion-expand-icon expand-sign-<?php echo 'supplement_'.$supplement->id; ?>" style="display: none;"></i>
			                			</label>
			                		</div>	
	                			</div>
	                		</div>                			                		
	                		<div id="<?php echo $collapsableId; ?>" aria-expanded="false" class="collapse show">
	                			<div class="col-md-12">
	                				<div class="row">
		                				<div class="col-md-12 accordion-description">
		                					<?php 
		                						if (!empty($supplement->your_lifestyle)) {		                								                					
		                					?>		                					
		                						<p class="supplement-title supplement-subtitle"><strong>Life styles:</strong> <?php echo $supplement->your_lifestyle; ?></p>
		                					<?php } ?>
		                					<?php 
		                						if (!empty($supplement->your_goals)) {		                								                					
		                					?>	
		                						<p class="supplement-title supplement-subtitle"><strong>Goals:</strong> <?php echo $supplement->your_goals; ?></p> 			
		                					<?php } ?>	                					
			            					<?php 
		                						if (!empty($supplement->your_genetics)) {		                								                					
		                					?>
			            						<p class="supplement-title supplement-subtitle"><strong>Your Genetics:</strong> <?php echo $supplement->your_genetics; ?></p>
			            					<?php } ?> 
			            					<br>
					                		<p class="supplement-title text-justify">
					                			<?php echo $supplement->supplement['summary']; ?>
					                		</p>
					                		
				                			<?php   
									    		echo $this->Html->link(
										        	'Learn more',
											        array('controller'=>'', 'action'=>'#','_full'=>true),
											        array('escape' => false)
										        );
											?>	

					                		
		                				</div>                				
		                			</div>
	                			</div>            					
		                		<hr>
		                	</div> 
	                	</div>	                	
	                	<?php 	
	                				$index++;	                			
	                			} 
	                		} else {
	                			echo "<p class='alert alert-warning'>Your supplement report is not generated yet. Please check later.</p>";
	                		}
	                	?>	   
					           	
		                                   
	                </div>             
	            </div>

	            <!-- Overview -->
	            <div class="tab-pane p-t-30" id="overview" role="tabpanel">	            	            
	            	<div class="row">
	            		<div class="col-md-12">
	            			<h2 class="card-title supplement-title">
		            			Eating a balanced and nutrition food is very important
		            		</h2> 	            		
	            		</div>            		
		            		
	            		<div class="col-md-12">
	            			<p class="supplement-title">
	            				There are many reasons why you may not be getting enough nutrients from the foods that you eat. Modern commercial agricultural techniques leave soil deficient in important vitamins and minerals, affecting the foods that you eat. In fact, you have to eat 8 oranges today to get the amount of vitamin A that was in 1 orange just 50 years ago*!
	            			</p>
	            		</div>	            			            		
	            	</div>

	            	<div class="row">
	            		<div class="col-md-12">
	            			<h2 class="card-title supplement-title m-t-50">
	            				Here are some reasons why diet alone may not be the answer…
	            			</h2>
	            		</div>	            		
	            	</div>

	            	<div class="row">
	            		<div class="col-md-12 col-sm-6 text-center">
	            			<?php
					    		echo $this->Html->image(
					    			'organic-food.jpg', [
					    				'alt' => 'nutrition',
					    				'class' => 'overview-nutrition'
					    			]);
					    	?>
	            		</div>	            		
	            	</div>

	            	<div class="row">
	            		<div class="col-md-6 text-left">
	            			<?php
					    		echo $this->Html->image(
					    			'family.jpg', [
					    				'alt' => 'healty-family',
					    				'class' => 'overview-image'
					    			]);
					    	?>
	            		</div>

	            		<div class="col-md-6">
	            			<h2 class="supplement-title">Take It Personally</h2>
							<p class="supplement-title text-justify">
								There’s no one like you. Your genetics and lifestyle make you unique. Your genes play an important role in determining how your body processes various nutrients, and your lifestyle influences how those genes are expressed.
								For example, if your genes say that you are likely to be deficient in vitamin D, and you live in a place with little to no sun, no matter how healthy you eat, you are still going to need additional vitamin D.
							</p>
	            		</div>

	            		
	            		
	            	</div>


	            </div>

	            <!-- Quality -->
	            <div class="tab-pane p-20" id="quality" role="tabpanel">
	            	<span class="hidden-sm-up">Quality</span>
	            	Quality
	            </div>
	        </div>
        	</div>
        </div>
	        
    </div>
</div>