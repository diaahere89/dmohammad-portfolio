<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of QR Codes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold px-4 py-2 mb-5">List of QR Codes 
            <span class="float-right">
                <a href="{{ route('qr_codes.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 shadow-md flex items-center gap-2">
                    <i class="fas fa-plus"></i>
                    Create New
                </a>
            </span>
        </h1>
        @foreach ($qrCodes as $qrImage)
            @include('qr_codes.partials.show-item')
            <hr class="my-4">
        @endforeach
    </div>
</body>
</html>