window.jsPDF = window.jspdf.jsPDF;

var doc = new jsPDF();


function generatePDF() {
	const element = document.getElementById("invoice");

	doc.html(element, {
		callback: function (doc) {
			// Save the PDF
			doc.save('admission_form.pdf');
		},
		x: 10,
		y: 10,
		width: 190, //target width in the PDF document
		windowWidth: 900 //window width in CSS pixels
	});

}
