<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	
	<script>
	$(document).ready(function(){
    $("button").click(function(){
		var x = $(this).attr('id');									
        $("."+ x).animate({opacity: '0.2'}, "fast");
	    $("."+ x).animate({opacity: '1'}, "fast");
	    $("."+ x).animate({opacity: '0.2'}, "fast");
	    $("."+ x).animate({opacity: '1'}, "fast");
	    $("."+ x).animate({opacity: '0.2'}, "fast");
	    $("."+ x).animate({opacity: '1'}, "fast");
    	});
	});
	</script>

<title>php test</title>
</head>
<body>

<table>
<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
$arr_length = count($people);

?>
<tr><th><?php echo "<table border><tr><th>Send Alert</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>"?> </th></tr><?php
	for($row = 0; $row < $arr_length; $row++){
		foreach($people[$row] as $key => $value){
			$col = 0;
			if ($col <> $value){
			?><tr><td><button <?php echo "id=".$row ?> >Alert</button></td> <?php ;
			$col++;
			}
			else {
				?> <td> <?php echo "<p class=".$row.">" .$value. "</p>" ?></td> <?php ;
			}"</tr>";
		}
	}
"</table>";

?>
</table>
</body>
</html>
