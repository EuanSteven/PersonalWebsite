// Design by Euan Steven

function openAndPrintPDF(pdfUrl) {
    const newWindow = window.open(pdfUrl, '_blank');
    newWindow.onload = function() {
        newWindow.print();
    };
}