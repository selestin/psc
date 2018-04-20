<?php
	global $wpdb;
	$table_name = "quiz";
?>
<!--
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme-admin.min.css"> -->
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
	<h1 class="wp-heading-inline">Quiz</h1>
	 <a href="admin.php?page=addquiz&act=add&type=<?php echo $type ?>" class="page-title-action">Add New</a>
		<hr class="wp-header-end">
	
	
	<form id="posts-filter" action="admin.php?page=listquiz" method="post">	
	<!-- SEARCH -->
	<p class="search-box">
	<label class="screen-reader-text" for="post-search-input">Search Posts:</label>
	<input type="search" id="post-search-input" name="s" value="">
	<input type="submit" id="search-submit" class="button" value="Search Posts"></p>
	<!-- LIST COUNT-->
		<ul class="subsubsub">
			<li class="all"><a href="edit.php?post_type=post" class="current" aria-current="page">All <span class="count">(1)</span></a> |</li>
			<li class="publish"><a href="edit.php?post_status=publish&amp;post_type=post">Published <span class="count">(1)</span></a></li>
		</ul>
	<!-- Search Filter -->
		<div class="tablenav top">

			<div class="alignleft actions bulkactions">
					<label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label><select name="action" id="bulk-action-selector-top">
					<option value="-1">Bulk Actions</option>
						<option value="edit" class="hide-if-no-js">Edit</option>
						<option value="trash">Move to Trash</option>
					</select>
					<input type="submit" id="doaction" class="button action" value="Apply">
			</div>
			<div class="alignleft actions">
				<label for="filter-by-date" class="screen-reader-text">Filter by date</label>
				<select name="m" id="filter-by-date">
					<option selected="selected" value="0">All dates</option>
					<option value="201804">April 2018</option>
							</select>
					<label class="screen-reader-text" for="cat">Filter by category</label><select name="cat" id="cat" class="postform">
						<option value="0">All Categories</option>
						<option class="level-0" value="1">Uncategorized</option>
					</select>
			<input type="submit" name="filter_action" id="post-query-submit" class="button" value="Filter">	
			</div>
			<div class="tablenav-pages one-page"><span class="displaying-num">1 item</span>
			<span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
			<span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
			<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Current Page</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> of <span class="total-pages">1</span></span></span>
			<span class="tablenav-pages-navspan" aria-hidden="true">›</span>
			<span class="tablenav-pages-navspan" aria-hidden="true">»</span></span></div>
			<br class="clear">
		</div>
	
	<!-- TABLE HEAD -->
    <div class="clearfix"></div>
	<div class="table-responsive well" >
		<table class="wp-list-table widefat fixed striped posts">
		<thead>
		<tr>	
		<th style="width:  10px;"><input id="cb-select-all-1" type="checkbox"></th>
				<th>Quiz Title</th>
				<th> Total Number of qns</th>
				<th> Marks on right answer</th>
				<th>Time Limit</th>
		</tr>
		</thead>
		<tbody id="the-list">
		<tbody>
		<?php
		# GET RESULT FROM DATABASE
		$results = $wpdb->get_results( 'SELECT * FROM '.$table_name.'', ARRAY_A );
		

		foreach ($results as $result) {

		echo '<tr><td style="width:10px;"></td>
				  <td class="text-center">'.$result['title'].'</td>
				  <td class="text-center">'.$result['mark'].'</td>
				  <td class="text-center">'.$result['wrong'].'</td>
				  <td> </td>
			  </tr>';
		}
		?>
		</tbody>	
		
		<tfoot>
		<tr>
				<th><input id="cb-select-all-1" type="checkbox"></th>
				<th>Quiz Title</th>
				<th> Total Number of qns</th>
				<th> Marks on right answer</th>
				<th>Time Limit</th>
		</tr></tfoot>
	</table>	
	</div>	
	</form>
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