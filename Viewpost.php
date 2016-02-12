<?php require('includes/config.php'); 


if($db->connect_errno > 0){
    
    die('unabl to connect ['. $db->connect_errno .']');
}



$stmt = $db->query('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID ="'.$_GET['id'].'"');


//if post does not exists redirect user.
/*if($row['postID'] == ''){
	header('Location: ./index.php');
	exit;
}*/


    
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

	<div id="wrapper">

		<h1>Blog</h1>
		<hr />
                <p><a href="./index.php">Blog Index</a></p>


		<?php	
                
                       while($row = $stmt-> fetch_assoc()){
                       
                        echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
                           
                           
                       }
			
		?>

	</div>

</body>
</html>