<?php

namespace App\Http\Controllers;

use App\Models\QrImage;
use Illuminate\Http\Request;

class QrImageController extends Controller
{
    public function create()
    {
        return view('qr_codes.create');
    }

    public function store(Request $request)
    {
        /*
            $table->string('desired_url');
                $table->string('redirect_url')->nullable(); // Custom redirect URL
                $table->boolean('is_active')->default(true);
                $table->string('status')->default('active'); // Status of the QR code
            $table->string('qr_code')->unique(); // Unique identifier for the QR code
                $table->unsignedBigInteger('user_id')->nullable(); // Associated user
            $table->string('created_by')->nullable(); // Creator name or ID
                $table->timestamp('expires_at')->default(DB::raw('CURRENT_TIMESTAMP + INTERVAL 1 MONTH')); // Expiration date
                $table->integer('scan_count')->default(0); // Number of scans
                $table->timestamp('last_scanned_at')->nullable(); // Last scan timestamp
            $table->string('title')->nullable(); // Human-readable title
            $table->text('description')->nullable(); // Description or notes
                $table->string('type')->default('url'); // Type of QR code (e.g., URL, Wi-Fi)
                $table->string('slug')->unique()->nullable(); // Custom slug
                $table->json('metadata')->nullable(); // Additional metadata
                $table->string('foreground_color')->default('#000000'); // QR code color
                $table->string('background_color')->default('#FFFFFF'); // Background color
                $table->json('tags')->nullable(); // Tags or categories
        */

        $request->validate([
            'desired_url' => 'required|url',
            'created_by'  => 'nullable|string',
            'title'       => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        //qr_code uuid 
        $qrImage = QrImage::create([
            'desired_url' => $request->desired_url,
            'created_by'  => $request->created_by,
            'title'       => $request->title,
            'description' => $request->description,
            'qr_code'     => \Illuminate\Support\Str::uuid(),
            'expires_at'  => now()->addMonth(),
        ]);

        session()->flash('success', 'QR code created successfully!');

        return redirect()->route('qr_codes.show', $qrImage->qr_code);
    }

    public function show($qr_code)
    {
        $qrImage = QrImage::where('qr_code', $qr_code)->firstOrFail();
        return view('qr_codes.show', compact('qrImage'));
    }

    public function download($qr_code) 
    {
        $qrImage = QrImage::where('qr_code', $qr_code)->firstOrFail();

        // Generate the QR code image
        $dataUri = $qrImage->createDataUri();
        $data    = explode(',', $dataUri)[1];
        return response()->streamDownload(function() use ($data) {
            echo base64_decode($data);
        }, 'qrcode.png');
    }

    public function scan($qr_code)
    {
        $qrImage = QrImage::where('qr_code', $qr_code)->firstOrFail();

        $qrImage->increment('scan_count');
        $qrImage->update(['last_scanned_at' => now()]);
        if ( ! $qrImage->is_active || $qrImage->expires_at < now()) {
            return redirect()->route('qr_codes.show', $qr_code);
        }
        return redirect($qrImage->desired_url);
    }

}
