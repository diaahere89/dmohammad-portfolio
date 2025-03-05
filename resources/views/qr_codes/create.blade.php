<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create FREE QR Code</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create FREE QR Code</h1>
        <form action="{{ route('qr_codes.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @honeypot
            
            <div class="mb-4">
                <label for="desired_url" class="block text-gray-700">Desired URL</label>
                <input type="url" name="desired_url" id="desired_url" placeholder="Enter the desired URL" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="created_by" class="block text-gray-700">Owner</label>
                <input type="text" name="created_by" id="created_by" placeholder="Enter your full name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="title" class="block text-gray-700">QR Code Title</label>
                <input type="text" name="title" id="title" placeholder="What you would like to call the QR code" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">QR Code Description</label>
                <textarea name="description" id="description" placeholder="Describe your QR code" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            {{-- <div class="mb-4">
                <label for="is_active" class="block text-gray-700">
                    <input type="checkbox" name="is_active" id="is_active" class="mr-2" checked>
                    Active
                </label>
            </div> --}}
            <!-- Submit Button and Loading Spinner -->
            <div class="flex items-center gap-4">
                <button type="submit" id="submitButton" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Create QR Code
                </button>
                <!-- Loading Spinner (Hidden by Default) -->
                <div id="loadingSpinner" class="hidden">
                    <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </div>
        </form>
    </div>
</body>
</html>