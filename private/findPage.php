<?php
/***
 * Front End Web App Framework
 * ===========================
 *
 * Server-side function to retrieve meta and file names of a page
 *
 * Called by:
 * - index.php
 * - meta.php
 ***/

/***
 * Determine:
 * - $page['title', 'description', 'php', 'css', 'js', 'img']
 * - $page['canonical'] and other optional meta
 * @input: $_GET['page']
 * @return: {array}
 */
function findPage() {

	// Read pages.json
	$json = file_get_contents(__DIR__.'/pages.json');
	$metas = json_decode($json, TRUE); // format to associate array

	// Get meta for page
	$name = $_GET['page'] ?? $metas['']; // default page: ''

	$last_slash_index = strpos($name, '/');

	if ($last_slash_index === FALSE) {
		// Check if meta for this page is defined
		$result = $metas[$name];
		
		// Derive defaults for HTML, CSS, JS
		if (!isset($result['name'])) {
			$result['name'] = $name;
		}
		if (!isset($result['php'])) {
			$result['php'] = $name .'.php';
		}
		if (!isset($result['css'])) {
			$result['css'] = $name .'.css';
		}
		if (!isset($result['js'])) {
			$result['js'] = $name .'.js';
		}
	} // normal page

	return $result;
} // findPage()
?>