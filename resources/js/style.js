// // resources/js/style.js

// import SignaturePad from 'signature_pad';

// var canvas = document.getElementById("signature-pad");

// function resizeCanvas() {
//     var ratio = Math.max(window.devicePixelRatio || 1, 1);
//     canvas.width = canvas.offsetWidth * ratio;
//     canvas.height = canvas.offsetHeight * ratio;
//     canvas.getContext("2d").scale(ratio, ratio);
// }

// window.onresize = resizeCanvas;
// resizeCanvas();

// var signaturePad = new SignaturePad(canvas, {
//     backgroundColor: 'rgb(250,250,250)'
// });

// document.getElementById("clear").addEventListener('click', function() {
//     signaturePad.clear();
// });

import SignaturePad from 'signature_pad';

// Function to handle resizing of canvas elements
function resizeCanvas(canvas) {
    var ratio = Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

// Resize for each canvas
window.onresize = function() {
    resizeCanvas(ownerCanvas);
    resizeCanvas(generalCanvas);
};

// Initial resizing
var ownerCanvas = document.getElementById("owner-signature-pad");
var generalCanvas = document.getElementById("signature-pad");

resizeCanvas(ownerCanvas);
resizeCanvas(generalCanvas);

// Initialize SignaturePad for both canvas elements
var ownerSignaturePad = new SignaturePad(ownerCanvas, {
    backgroundColor: 'rgb(250, 250, 250)', // Optional background color
});

var generalSignaturePad = new SignaturePad(generalCanvas, {
    backgroundColor: 'rgb(250, 250, 250)', // Optional background color
});

// Clear owner signature pad
document.getElementById("owner-clear").addEventListener('click', function() {
    ownerSignaturePad.clear();
});

// Clear general signature pad
document.getElementById("clear").addEventListener('click', function() {
    generalSignaturePad.clear();
});
