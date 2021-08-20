<?php
	/**
	 SQL INJECTION CODE
	 
	 URL: website.com?x=1' OR '1=1
	 
	**/

	$query = "SELECT short_description,article FROM news WHERE id='".$_GET['x']."'";

	$res = mysql_query($query);

		if($res && mysql_num_rows($res)>0){
			
			while($row = mysql_fetch_assoc($res)){
				echo $row['short_description'];
				echo $row['article'];
				
				
			}
			
		}
?>

