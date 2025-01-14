<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('qr_images', function (Blueprint $table) {
            $table->id();
            $table->string('desired_url');
            $table->string('redirect_url')->nullable(); // Custom redirect URL
            $table->boolean('is_active')->default(true);
            $table->string('status')->default('active'); // Status of the QR code
            $table->string('qr_code')->unique(); // Unique identifier for the QR code
            $table->unsignedBigInteger('user_id')->nullable(); // Associated user
            $table->string('created_by')->nullable(); // Creator name or ID
            $table->timestamp('expires_at')->nullable(); // Expiration date
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_images');
    }
};
