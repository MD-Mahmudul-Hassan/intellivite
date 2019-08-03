<?php
/*
* User Dashboard page
*/
?>
<div class="row dashboard-margin">	
    <div class="col-md-4">
    	<div class="col-md-12">
	    	<h4 class="card-title" id="1">Your Profile</h4>	    	
	        <div class="card">
	            <?php   
		    		echo $this->Html->link(
			        	'<i class="fa fa-check fa-lg"></i> Questionnaire<br><p class="dashboard-subtitle">Success! Update your questionnaire</p>',
				        array('controller'=>'Questionaires', 'action'=>'/','_full'=>true),
				        array('escape' => false, 'class'=>'btn btn-lg btn-outline-info')
			        );
				?>        	           
	        </div>
	    </div>

	    <div class="col-md-12">	    	
	        <div class="card">
	        	<?php   
		    		echo $this->Html->link(
			        	'<i class="fa fa-save fa-lg"></i> Raw DNA Download<p class="dashboard-subtitle">Download your raw DNA file.</p>',
				        array('controller'=>'#', 'action'=>'','_full'=>true),
				        array('escape' => false, 'class'=>'btn btn-lg btn-outline-info')
			        );
				?>
	        </div>
	    </div>

	    <div class="col-md-12">	    	
	        <div class="card">
	        	<?php   
		    		echo $this->Html->link(
			        	'<i class="fa fa-map-marker fa-lg"></i> Order Status<p class="dashboard-subtitle">Track your order at any time.</p>',
				        array('controller'=>'#', 'action'=>'','_full'=>true),
				        array('escape' => false, 'class'=>'btn btn-lg btn-outline-info')
			        );
				?>           
	        </div>
	    </div>
    </div>
     <div class="col-md-4">
     	<div class="col-md-12">
     		<h4 class="card-title" id="1">Your Reports</h4> 	    	
	        <div class="card">				
	            <?php   
		    		echo $this->Html->link(
			        	'<i class="fa fa-heartbeat fa-lg"></i> Supplement<p class="dashboard-subtitle">Check your supplement report.</p>',
				        array('controller'=>'UserSupplements', 'action'=>'','_full'=>true),
				        array('escape' => false, 'class'=>'btn btn-lg btn-outline-info')
			        );
				?>        	           
	        </div>
	    </div>
    </div>

    <div class="col-md-4">
     	<div class="col-md-12">	   
     		<h4 class="card-title" id="1">My Account</h4>      
			<div class="btn-group">
                <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-settings"></i> Settings
                </button>
                <div class="dropdown-menu animated flipInY user-profile-container" x-placement="bottom-start">                	
                	<?php   
			    		echo $this->Html->link(
				        	'<i class="ti-user"></i> Update profile',
					        array('controller'=>'#', 'action'=>'','_full'=>true),
					        array('escape' => false, 'class'=>'dropdown-item')
				        );

				        echo $this->Html->link(
				        	'<i class="fa fa-credit-card"></i> Payment information',
					        array('controller'=>'#', 'action'=>'','_full'=>true),
					        array('escape' => false, 'class'=>'dropdown-item')
				        );

				        echo $this->Html->link(
				        	'<i class="ti-unlock"></i> Reset password',
					        array('controller'=>'#', 'action'=>'','_full'=>true),
					        array('escape' => false, 'class'=>'dropdown-item')
				        );
					?>                    
                </div>
            </div>
	    </div>
    </div>

</div>	