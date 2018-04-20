<?php
	class quizClass
	
	{	
		private $myFields=array("id","title","mark","wrong","total","time","intro","tag");
		function addNewQuiz($tblname,$meminfo)
		{
			global $wpdb;
			$tblname = 'quiz';
			$count = sizeof($meminfo);
			if($count>0)
			{
				$id=0;
				$field="";
				$vals="";
				foreach($this->myFields as $key)
				{
					if($field=="")
					{
						$field="`".$key."`";
						$vals="'".$meminfo[$key]."'";
					}
					else
					{
						$field=$field.",`".$key."`";
						$vals=$vals.",'".$meminfo[$key]."'";
					}
				}
				// PROFILE PICTURE
				//$field=$field.",`image`";
				//$vals=$vals.",'".$profile_picture."'";

				 $sSQL = "INSERT INTO ".$tblname." ($field) values ($vals)";
				
				
				$wpdb->query($sSQL);
				return true;
			}
			else
			{
				return false;
			}
		}

		function updPackage($tblname,$meminfo,$profile_picture='')
		{
			global $wpdb;
		 	$count = sizeof($meminfo);
		
			if($count>0)
			{
				$field="";
				$vals="";
				foreach($this->myFields as $key)
				{
					if($field=="" && $key!="id")
					{
						$field="`".$key."` = '".$meminfo[$key]."'";
					}
					else if($key!="id")
					{
						$field=$field.",`".$key."` = '".$meminfo[$key]."'";
					}
				}
				// PROFILE PICTURE
				if($profile_picture!=''){
					
					$field=$field.",`image` = '".$profile_picture."'";
					
		
				}
				
				$sSQL = "update ".$tblname." set $field where id=".$meminfo["id"];
				
				
				$wpdb->query($sSQL);
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function getPackageDetails($id){
			global $wpdb;
			$table = $wpdb->prefix . "spec_package";
			$query = mysql_query("SELECT * FROM ".$table." WHERE id=".$id."");
			$row   = mysql_fetch_array($query);
				$this->id 				= $row['id'];
				$this->name 				= $row['name'];
				$this->description 			= $row['description'];
				$this->type 				= $row['type'];
				$this->terms 		    	= $row['terms'];
				$this->link_add 			= $row['link'];
				$this->status 				= $row['status'];
				$this->price 				= $row['price'];
				$this->staff_description 	= $row['staff_description'];
			}



		function GetAllpackagesAgainstOffice($user_id){
			global $wpdb;
	        $package_table = $wpdb->prefix.'spec_package';
	        $firm_table    = $wpdb->prefix.'spec_firm';
	        $office_table  = $wpdb->prefix.'spec_office';
	        $users_details = $wpdb->prefix.'spec_users_details';

	      	$query = "SELECT $package_table.id,$package_table.name,$package_table.description,$package_table.price 
	        FROM $package_table  
			INNER JOIN $office_table ON $package_table.office_id=$office_table.id
			INNER JOIN $users_details ON $office_table.id=$users_details.office_id
			WHERE $users_details.user_id=$user_id AND $package_table.status=0";
	       
	        return $wpdb->get_results($query);

		}	
		
		
	}


?>