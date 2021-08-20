<?php
 
	if(isset($_GET['x']))
	{
		$id = $_GET['x'];
			if(is_numeric($id))
			{
				
				$query = "SELECT short_description,article FROM news WHERE id='$id'";

				$res = mysql_query($query);

					if($res && mysql_num_rows($res)>0){
						
						while($row = mysql_fetch_assoc($res)){
							echo $row['short_description'];
							echo $row['article'];	
						}
					}else{
						header("HTTP/1.1 404 Not Found");
					}
			}else{
				header("HTTP/1.1 404 Not Found");
			}	
	}
 
	
?>