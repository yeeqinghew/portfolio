let nodelist = document.querySelectorAll("#portfolio-preview > section");
let array = Array.from(nodelist);

array.forEach(function(sec) {
	sec.addEventListener("click", sectionOnClick);
});

function sectionOnClick(e) {
	if (e.target.id === 'pmid') {
		console.log('pmid');
		window.location.href = 'portfolio-pmid';
	}
	if (e.target.id === 'emservices') {
		window.location.href = 'portfolio-em';
	}
	if (e.target.id === 'shoppawholic') {
		window.location.href = 'portfolio-shoppawholic';
	}

}

