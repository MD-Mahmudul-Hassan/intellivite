<?php
/*
* User Supplements page
*/
?>
<div class="col-md-10 offset-md-1">
    <div class=""  style="padding: 20px;">
    	<div class="hidden-sm-up">
    		<h3>Your Personalized Supplements</h3>
    	</div><hr class='hidden-sm-up' style="border-bottom: 1px solid #1775CE;">
        <ul class="nav nav-tabs customtab" role="tablist">        	
        	<li class="nav-item hidden-sm-down">
        		<p class="font-weight-bold" style="margin-right: 100px;font-size: 25px;">
		    		<span>
			    	<?php
			    		echo $this->Html->image(
			    			'personalized-supplements.png', [
			    				'alt' => 'CakePHP',
			    				'width'=>'300px',
			    				'style'=>['margin-right: 5px;']
			    			]);
			    	?>
			    	</span>
		    	</p>
        	</li>

            <li class="nav-item"> 
            	<a class="nav-link active show" data-toggle="tab" href="#vitaplan" role="tab" aria-selected="true" style="font-size: 20px;">
            		<span class="hidden-sm-up">
            			<i class="fa fa-stethoscope"></i>
            		</span> 
            		<span class="hidden-xs-down">Vitaplan</span>
            	</a> 
            </li>
            <li class="nav-item"> 
            	<a class="nav-link" data-toggle="tab" href="#overview" role="tab" aria-selected="false" style="font-size: 20px;">
            		<span class="hidden-sm-up">
            			<i class="ti-user"></i>
            		</span> 
            		<span class="hidden-xs-down">Overview</span>
            	</a> 
            </li>
            <li class="nav-item"> 
            	<a class="nav-link" data-toggle="tab" href="#quality" role="tab" aria-selected="false" style="font-size: 20px;">
            		<span class="hidden-sm-up">
            			<i class="ti-email"></i>
            		</span> 
            		<span class="hidden-xs-down">Quality</span>
            	</a> 
            </li>
        </ul>
        <div class="row">
        	<div class="col-md-10">
        		<!-- Tab panes -->
	        <div class="tab-content">        	
	            <div class="tab-pane active show" id="vitaplan" role="tabpanel">
	                <div class="p-20">
	                	<div class="row" style="margin-bottom: 30px;">	                		
	                		<div class="col-md-12" data-toggle="collapse" data-target="#Vitaplan1" aria-expanded="false" aria-controls="collapseOne" style="padding: 30px 40px 20px 40px;background-image: url('http://intellivite.sj/webroot/img/pattern-lightblue.png'); background-position: top;background-repeat: no-repeat;">	                			
	                			<div class="row">
	                				<div class="col-md-6">
			                			<h3>Vitaplan1</h3>
			                			<p>Dosage: 10 mg</p>
			                		</div>
			                		<div class="col-md-6 hidden-sm-down text-right">
			                			<label >
			                				<i class="fa fa-plus" style="font-size: 25px;"></i>
			                			</label>
			                		</div>	
	                			</div>
	                		</div>                			                		
	                		<div id="Vitaplan1" aria-expanded="false" class="collapse">
		                		<p class="text-justify p-10">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
		                		<hr>
		                	</div> 
	                	</div>

	                	<div class="row" style="margin-bottom: 30px;">	                		
	                		<div class="col-md-12" data-toggle="collapse" data-target="#Vitaplan2" aria-expanded="false" aria-controls="collapseOne" style="padding: 30px 40px 20px 40px;background-image: url('http://intellivite.sj/webroot/img/pattern-lightyellow.png'); background-position: top;background-repeat: no-repeat;">	                			
	                			<div class="row">
	                				<div class="col-md-6">
			                			<h3>Vitaplan2</h3>
			                			<p>Dosage: 10 mg</p>
			                		</div>
			                		<div class="col-md-6 hidden-sm-down text-right">
			                			<label >
			                				<i class="fa fa-plus" style="font-size: 25px;"></i>
			                			</label>
			                		</div>	
	                			</div>
	                		</div>                			                		
	                		<div id="Vitaplan2" aria-expanded="false" class="collapse">
		                		<p class="text-justify p-10">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
		                	</div> 
	                	</div> 

	                	<div class="row" style="margin-bottom: 30px;">	                		
	                		<div class="col-md-12" data-toggle="collapse" data-target="#Vitaplan3" aria-expanded="false" aria-controls="collapseOne" style="padding: 30px 40px 20px 40px;background-image: url('http://intellivite.sj/webroot/img/pattern-1.png'); background-position: top;background-repeat: no-repeat;">	                			
	                			<div class="row">
	                				<div class="col-md-6">
			                			<h3>Vitaplan3</h3>
			                			<p>Dosage: 10 mg</p>
			                		</div>
			                		<div class="col-md-6 hidden-sm-down text-right">
			                			<label >
			                				<i class="fa fa-plus" style="font-size: 25px;"></i>
			                			</label>
			                		</div>	
	                			</div>
	                		</div>                			                		
	                		<div id="Vitaplan3" aria-expanded="false" class="collapse">
		                		<p class="text-justify p-10">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
		                	</div> 
	                	</div> 

	                	<div class="row" style="margin-bottom: 30px;">	                		
	                		<div class="col-md-12" data-toggle="collapse" data-target="#Vitaplan4" aria-expanded="false" aria-controls="collapseOne" style="padding: 30px 40px 20px 40px;background-image: url('http://intellivite.sj/webroot/img/pattern-lightgreen.png'); background-position: top;background-repeat: no-repeat;">	                			
	                			<div class="row">
	                				<div class="col-md-6">
			                			<h3>Vitaplan4</h3>
			                			<p>Dosage: 10 mg</p>
			                		</div>
			                		<div class="col-md-6 hidden-sm-down text-right">
			                			<label >
			                				<i class="fa fa-plus" style="font-size: 25px;"></i>
			                			</label>
			                		</div>	
	                			</div>
	                		</div>                			                		
	                		<div id="Vitaplan4" aria-expanded="false" class="collapse">
		                		<p class="text-justify p-10">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
		                	</div> 
	                	</div> 
					           	
		                                   
	                </div>             
	            </div>


	            <!-- Overview -->
	            <div class="tab-pane p-20" id="overview" role="tabpanel">
	            	Overview
	            </div>

	            <!-- Quality -->
	            <div class="tab-pane p-20" id="quality" role="tabpanel">
	            	Quality
	            </div>
	        </div>





        	</div>
        </div>
	        
    </div>
</div>