<?php
require(__DIR__.'/private/findPage.php');
$page = findPage();

$escaped_page_title = htmlspecialchars($page['title']);
$escaped_page_description = htmlspecialchars($page['description']);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $escaped_page_title; ?></title>
	<meta name="description" content="<?php echo $escaped_page_description; ?>">
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
<script src="/js/<?php echo $page['js']?>"></script>
</body>