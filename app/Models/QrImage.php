<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'desired_url',
        'redirect_url',
        'is_active',
        'status',
        'qr_code',
        'user_id',
        'created_by',
        'expires_at',
        'scan_count',
        'last_scanned_at',
        'title',
        'description',
        'type',
        'slug',
        'metadata',
        'foreground_color',
        'background_color',
        'tags',

    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'qr_code'; // Use the `qr_code` column for route binding
    }

    public function createDataUri()
    {
        $qr_link = route('qr_codes.scan', $this->qr_code); //https://dmohammad.com/qr-codes/uuid/scan
        return 'data:image/png;base64,' . base64_encode(QrCode::format('png')->size(200)->generate($qr_link));
    }
}
