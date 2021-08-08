<?php

$SITE_URL = ( (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] )? 'https://' : 'http://') . $_SERVER['SERVER_NAME'];
if ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {
	$SITE_URL .= ':' . $_SERVER['SERVER_PORT'];
}
require(__DIR__.'/private/findPage.php');
$page = findPage();

echo "<script>console.log('Debug Pages: " . $page['php'] . "' );</script>";
echo "<script>console.log('Debug Pages: " . $page['css'] . "' );</script>";
echo "<script>console.log('Debug Pages: " . $page['js'] . "' );</script>";

$escaped_page_title = htmlspecialchars($page['title']);
$escaped_page_description = htmlspecialchars($page['description']);

// Prevent Click-jacking: only need this on initial page load
header("Content-Security-Policy: frame-ancestors 'none';");
header('X-Frame-Options: Deny');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $escaped_page_title; ?></title>
	<meta name="description" content="<?php echo $escaped_page_description; ?>">
	<meta property="og:url" content="<?php echo $SITE_URL. '/' . $page['name']; ?>" />
	<link rel="icon" href="../../img/star.svg">
	<link rel="stylesheet" type="text/css" href="/css/<?php echo $page['css']?>?v=1" data-page="<?php echo $page['name'];?>">
</head>
<body>
	<div id="page" data-page="<?php echo $page['name'];?>">
		<?php include __DIR__.'/php/common/1-header.php'; ?>
		
		<section id="page-main">
			<?php require __DIR__.'/php/'.$page['php'];?>
		</section>
	
		<?php include __DIR__.'/php/common/2-footer.php'; ?>
	</div><!-- end of page -->
<script src="/js/<?php echo $page['js']?>"></script>
</body>