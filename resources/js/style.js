

// import SignaturePad from 'signature_pad';

// // Function to handle resizing of canvas elements
// function resizeCanvas(canvas) {
//     var ratio = Math.max(window.devicePixelRatio || 1, 1);
//     canvas.width = canvas.offsetWidth * ratio;
//     canvas.height = canvas.offsetHeight * ratio;
//     canvas.getContext("2d").scale(ratio, ratio);
// }

// // Resize for each canvas
// window.onresize = function() {
//     resizeCanvas(ownerCanvas);
//     resizeCanvas(generalCanvas);
// };

// // Initial resizing
// var ownerCanvas = document.getElementById("owner-signature-pad");
// var generalCanvas = document.getElementById("signature-pad");

// resizeCanvas(ownerCanvas);
// resizeCanvas(generalCanvas);

// // Initialize SignaturePad for both canvas elements
// var ownerSignaturePad = new SignaturePad(ownerCanvas, {
//     backgroundColor: 'rgb(250, 250, 250)', // Optional background color
// });

// var generalSignaturePad = new SignaturePad(generalCanvas, {
//     backgroundColor: 'rgb(250, 250, 250)', // Optional background color
// });

// // Clear owner signature pad
// document.getElementById("owner-clear").addEventListener('click', function() {
//     ownerSignaturePad.clear();
// });

// // Clear general signature pad
// document.getElementById("clear").addEventListener('click', function() {
//     generalSignaturePad.clear();
// });


import SignaturePad from 'signature_pad';

document.addEventListener("DOMContentLoaded", function () {
    // Initialize SignaturePad for owner and partner signature pads
    var ownerCanvas = document.getElementById("owner-signature-pad");
    var partnerCanvas = document.getElementById("signature-pad");

    // Resize function to ensure proper canvas scaling on different devices
    function resizeCanvas(canvas) {
        var ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }

    // Resize canvases initially and whenever window is resized
    resizeCanvas(ownerCanvas);
    resizeCanvas(partnerCanvas);
    window.onresize = function () {
        resizeCanvas(ownerCanvas);
        resizeCanvas(partnerCanvas);
    };

    // Initialize SignaturePad for both owner and partner signature pads
    var ownerSignaturePad = new SignaturePad(ownerCanvas, {
        backgroundColor: 'rgb(250, 250, 250)', // Optional: Set background color
    });

    var partnerSignaturePad = new SignaturePad(partnerCanvas, {
        backgroundColor: 'rgb(250, 250, 250)', // Optional: Set background color
    });

    // Handle form submission to capture signature data
    document.querySelector('form').addEventListener('submit', function (e) {
        // Check if the owner signature pad is not empty
        if (!ownerSignaturePad.isEmpty()) {
            // Set the hidden input value with the Base64 encoded signature data
            document.getElementById('owner_signature').value = ownerSignaturePad.toDataURL();
        } else {
            alert("Please provide the owner signature.");
            e.preventDefault(); // Prevent form submission
            return;
        }

        // Check if the partner signature pad is not empty
        if (!partnerSignaturePad.isEmpty()) {
            document.getElementById('partner_signature').value = partnerSignaturePad.toDataURL();
        } else {
            alert("Please provide the partner signature.");
            e.preventDefault(); // Prevent form submission
            return;
        }
    });

    // Clear button functionality for Owner Signature pad
    document.getElementById('owner-clear').addEventListener('click', function () {
        ownerSignaturePad.clear();
        document.getElementById('owner_signature').value = ''; // Clear hidden input field
    });

    // Clear button functionality for Partner Signature pad
    document.getElementById('clear').addEventListener('click', function () {
        partnerSignaturePad.clear();
        document.getElementById('partner_signature').value = ''; // Clear hidden input field
    });
});
