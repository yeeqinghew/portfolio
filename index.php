<?php
require(__DIR__.'/private/findPage.php');
$page = findPage();

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Yee Qing</title>
	<link rel="icon" href="../../img/star.svg">
	<link rel="stylesheet" type="text/css" href="/css/<?php echo $page['css']?>?v=1" data-page="<?php echo $page['name'];?>">
</head>
<body>
	<div id="page" data-page="<?php echo $page['name'];?>">
		<?php include __DIR__.'/html/common/1-header.html'; ?>
		
		<section id="page-main">
			<?php require __DIR__.'/html/'.$page['html'];?>
		</section>
	
		<?php include __DIR__.'/html/common/2-footer.html'; ?>
	</div><!-- end of page -->
<!-- <?php echo file_get_contents("html/homepage.html"); ?>  -->
</body>