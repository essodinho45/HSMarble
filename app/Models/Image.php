<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\File;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
    ];
    protected $appends = ['is_video'];
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
    public function getIsVideoAttribute()
    {
        $type = File::mimeType(public_path($this->url));
        return (substr($type, 0, 5) == 'video');
    }
}
