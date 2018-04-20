<?php
if(isset($_POST['create_newquiz'])){
           $objQuiz->addNewQuiz($table_name = $table, $_POST);
		}
?>		