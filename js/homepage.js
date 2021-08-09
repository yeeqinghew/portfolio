let nodelist = document.querySelectorAll("#portfolio-preview > section");
let array = Array.from(nodelist);
// console.log(array);

array.forEach(function(sec) {
	sec.onclick = sectionOnClick;
});

console.log(array);

function sectionOnClick(e) {
	if (e.target.id === 'pmid') {
		console.log('pmid');
		window.location.href = '/portfolio-pmid.php';
	}
	if (e.target.id === 'emservices') {
		window.location.href = '/portfolio-em.php';
	}
	if (e.target.id === 'shoppawholic') {
		window.location.href = '/portfolio-shoppawholic.php';
	}

}

