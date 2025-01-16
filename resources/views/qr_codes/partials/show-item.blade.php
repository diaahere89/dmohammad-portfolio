<h1 class="text-2xl font-bold mb-6">QR Code Details</h1>
<div class="bg-white p-8 rounded-lg shadow-md">
    @if ( Route::currentRouteName() == 'qr_codes.show' && session('success') )
        <div class="my-4 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- Flex container for QR image and details -->
    <div class="flex flex-col md:flex-row gap-8">
        <!-- QR Image (Left Side) -->
        <div class="w-full md:w-1/3 flex flex-col items-center">
            <!-- QR Image Container with Hover Effect -->
            <div class="relative group">
                <!-- Loading Spinner -->
                <div id="loadingSpinner" class="absolute inset-0 flex justify-center items-center bg-gray-200 bg-opacity-75 rounded-lg">
                    <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>

                <!-- QR Image id="qrImage" -->
                <img src="{{ $qrImage->createDataUri() ?? '' }}" alt="QR Code" class="w-48 h-48 rounded-lg shadow-inner" onload="document.getElementById('loadingSpinner').style.display = 'none'">
            </div>

            <!-- Buttons (Download and Share) -->
            <div class="mt-4 flex gap-4">
                <!-- Download Button -->
                <a href="{{ $qrImage->createDataUri() ?? '#' }}" download="qr-code.png" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 shadow-md flex items-center gap-2">
                    <i class="fas fa-download"></i>
                    Download
                </a>

                {{-- 
                    <!-- Share Button -->
                    <button onclick="shareQRCode()" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 shadow-md flex items-center gap-2">
                        <i class="fas fa-share-alt"></i>
                        Share
                    </button>
                --}}

                <!-- Create New Button -->
                @if (Route::currentRouteName() == 'qr_codes.show')
                <a href="{{ route('qr_codes.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 shadow-md flex items-center gap-2">
                    <i class="fas fa-plus"></i>
                    Create New
                </a>
                @endif
            </div>
        </div>

        <!-- Details (Right Side) -->
        <div class="w-full md:w-2/3">
            <!-- Grid layout for labels and values -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- <!-- Desired URL -->
                <div class="font-bold text-gray-700">Desired URL:</div>
                <div class="text-gray-900 break-words">{{ $qrImage->desired_url }}</div> --}}

                <!-- Created By -->
                <div class="font-bold text-gray-700">Created By:</div>
                <div class="text-gray-900">{{ $qrImage->created_by }}</div>

                <!-- Title -->
                <div class="font-bold text-gray-700">Title:</div>
                <div class="text-gray-900">{{ $qrImage->title }}</div>

                <!-- Description -->
                <div class="font-bold text-gray-700">Description:</div>
                <div class="text-gray-900">{{ $qrImage->description }}</div>

                <!-- Active Status -->
                <div class="font-bold text-gray-700">Active:</div>
                <div class="text-gray-900">{{ $qrImage->status == 'active' ? 'Yes' : 'No' }}</div>

                <!-- Expiration Date -->
                <div class="font-bold text-gray-700">Expires At:</div>
                <div class="text-gray-900">{{ $qrImage->expires_at }}</div>

                <!-- Scan Count -->
                <div class="font-bold text-gray-700">Scan Count:</div>
                <div class="text-gray-900">{{ $qrImage->scan_count ?? 0 }}</div>
            </div>
        </div>
    </div>
</div>
