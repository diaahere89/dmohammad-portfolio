<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show QR Codes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        @include('qr_codes.partials.show-item')
    </div>

    {{-- 
        <script defer>
            // Share QR Code functionality
            function shareQRCode() {
                const qrImageUrl = document.getElementById('qrImage').src;
                // Check if the Web Share API is supported
                if (navigator.share) {
                    navigator.share({
                        title: 'QR Code',
                        text: 'Check out this QR code!',
                        url: qrImageUrl,
                    })
                    .then(() => {
                        alert('QR code shared successfully!');
                    })
                    .catch((error) => {
                        alert('Error sharing QR code: ' + error.message);
                    });
                } else {
                    // Fallback: Copy the QR code URL to the clipboard
                    navigator.clipboard.writeText(qrImageUrl)
                        .then(() => {
                            alert('QR code URL copied to clipboard!');
                        })
                        .catch(() => {
                            alert('Your browser does not support sharing or copying to clipboard.');
                        });
                }
            }
        </script>
    --}}
</body>
</html>