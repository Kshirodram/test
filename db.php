<?php  
//Connection string.  
$con = mysql_connect("localhost","root","");
    
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

//Connect/Select the DB.
mysql_select_db('cake_blog_tutorial');

//Query to be exicuted.
$query = 'select * from posts';

//Process the query.
$result = mysql_query($query, $con);

//Array initialization.
$result_array = array();

//Assign indivisual record to a array.
while ($row = mysql_fetch_array($result))
{
	$result_array[] = $row;
}

//Print the result.
print_r($result_array);
mysql_close($con); 
?>