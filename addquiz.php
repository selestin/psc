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
						<input type="text" name="name" size="30" value="" id="title" placeholder="Enter Quiz title" spellcheck="true" autocomplete="off">
					</div>
					<div id="titlewrap">
						<input type="number" name="post_title" size="30" value="" id="title" placeholder="Enter total number of questions" >
					</div>
					
					<div id="titlewrap">
						<input type="number" name="post_title" size="30" value="" id="title" placeholder="Enter marks on right answer" >
					</div>
					<div id="titlewrap">
						<input type="number" name="post_title" size="30" value="" id="title" placeholder="Enter minus marks on wrong answer without sign" >
					</div>
					<div id="titlewrap">
						<input type="number" name="post_title" size="30" value="" id="title" placeholder="Enter time limit for test in minute" >
					</div>
					<div id="titlewrap">
						<input type="number" name="post_title" size="30" value="" id="title" placeholder="Enter #tag which is used for searching" >
					</div>
					
					<div id="titlewrap">
						<input type="number" name="post_title" size="30" value="" id="title" placeholder="Enter total number of questions" >
					</div>
					
					
					
					<div class="inside">
						<div id="edit-slug-box" class="hide-if-no-js">
							</div>
					</div>
				</div><!-- /titlediv -->
			</div><!-- /post-body-content -->

			<div id="postbox-container-1" class="postbox-container">
			<div id="side-sortables" class="meta-box-sortables ui-sortable" style="">
			<div id="formatdiv" class="postbox ">
				<button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Format</span><span class="toggle-indicator" aria-hidden="true"></span></button><h2 class="hndle ui-sortable-handle"><span>Format</span></h2>
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