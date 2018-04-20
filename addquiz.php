<?php
	global $wpdb;
	$table_name = $wpdb->prefix . "123456";
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme-admin.min.css">
<script type="text/javascript">
	/* <![CDATA[ */
	jQuery(document).ready(function(){
	
		if(jQuery( window ).width()>750)
					jQuery('#memberlist').dataTable();
			
		
		
	  jQuery("#memberlist").before("<div class=\'clearfix\'></div>");
	});
	/* ]]> */

</script>


<div class="wrap">
  
	
	<h1 class="wp-heading-inline">Add Quiz Details</h1>
	
	<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content" style="position: relative;">

			<div id="titlediv">
			<div id="titlewrap">
					<label class="" id="title-prompt-text" for="title">Enter Quiz title</label>
				<input type="text" name="name" size="30" value="" id="title" spellcheck="true" autocomplete="off">
			</div>
			<div id="titlewrap">
					<label class="" id="title-prompt-text" for="title">Enter total number of questions</label>
				<input type="text" name="post_title" size="30" value="" id="title" spellcheck="true" autocomplete="off" >
				<input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
			</div>
			<div class="inside">
				<div id="edit-slug-box" class="hide-if-no-js">
					</div>
			</div>
			<input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="0c358c1b3c"></div><!-- /titlediv -->
			
			</div><!-- /post-body-content -->

			<div id="postbox-container-1" class="postbox-container">
			<div id="side-sortables" class="meta-box-sortables ui-sortable" style="">
			
			
			
			<div id="formatdiv" class="postbox ">
			<button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Format</span><span class="toggle-indicator" aria-hidden="true"></span></button><h2 class="hndle ui-sortable-handle"><span>Format</span></h2>
			<div class="inside">
				<div id="post-formats-select">
					<fieldset>
						</fieldset>
				</div>
				</div>
			</div>
 
 
		
			</div></div>
			
			</div>
	</div><!-- /post-body -->
</div> 
	
	
	
	
	
	<div class="row">
		
		 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
		
		
		
		<fieldset>


		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-12 control-label" for="name"></label>  
		  <div class="col-md-12">
		  <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
			
		  </div>
		</div>



		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-12 control-label" for="total"></label>  
		  <div class="col-md-12">
		  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
			
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-12 control-label" for="right"></label>  
		  <div class="col-md-12">
		  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
			
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-12 control-label" for="wrong"></label>  
		  <div class="col-md-12">
		  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
			
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-12 control-label" for="time"></label>  
		  <div class="col-md-12">
		  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number">
			
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-12 control-label" for="tag"></label>  
		  <div class="col-md-12">
		  <input id="tag" name="tag" placeholder="Enter #tag which is used for searching" class="form-control input-md" type="text">
			
		  </div>
		</div>


		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-12 control-label" for="desc"></label>  
		  <div class="col-md-12">
		  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Write description here..."></textarea>  
		  </div>
		</div>


		<div class="form-group">
		  <label class="col-md-12 control-label" for=""></label>
		  <div class="col-md-12"> 
			<input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
		  </div>
		</div>

		</fieldset>
		</form></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
				
					
    <div class="table-responsive well" >
	 
    </div>	
<div class="clearfix">&nbsp;</div>
</div>


<script type="text/javascript">
function getConfirmation(){
   var retVal = confirm("Do you want to continue ?");
   if( retVal == true ){
   
      return true;
   }
   else{

      return false;
   }
}
</script>