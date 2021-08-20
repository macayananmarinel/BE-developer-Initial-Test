<table border=1px solid>
<tr>
    <th>BOOK NAME</th>
    <th>AUTHOR NAME</th>
    <th>PUBLISH DATE</th>
</tr>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_books";

	$conn = mysqli_connect($servername, $username, $password, $dbname);


	$sql = mysqli_query ($conn,"SELECT 
									books.book_name,
									authors.first_name,
									authors.last_name,
									books.publish_date 
									
									FROM books 
									INNER JOIN authors ON (books.author_id = authors.id)
									WHERE books.publish_date = '2021-1-31'
									ORDER by books.id DESC
									LIMIT 1
	");
	
	if(mysqli_num_rows($sql) > 0){
		while ($row = mysqli_fetch_array($sql)){
			echo "<tr>";
			echo "<td>$row[book_name]</td>";
			echo "<td>$row[first_name] $row[last_name]</td>";
			echo "<td>$row[publish_date]</td>";
			echo "</tr>";
			
		}
		
	}
?>

</table>