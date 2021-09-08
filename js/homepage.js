let nodelist = document.querySelectorAll("#page-main #portfolio-preview > section");
let array = Array.from(nodelist);

array.forEach(function(sec) {
	sec.onclick = sectionOnClick;
});

console.log(array);

function sectionOnClick(e) {
	// if (e.target.id === 'pmid') {
	// 	window.location.href = '/portfolio-pmid.php';
	// }
	// if (e.target.id === 'emservices') {
	// 	window.location.href = '/portfolio-em.php';
	// }
	// if (e.target.id === 'shoppawholic') {
	// 	window.location.href = '/portfolio-shoppawholic.php';
	// }
}

