<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'path', 'type', 'news_id'];

    protected static function booted(): void
    {
        static::saving(function (File $file) {
            if ($file->path) {
                $ext = strtolower(pathinfo($file->path, PATHINFO_EXTENSION));

                $map = [
                    'image' => ['png', 'jpg', 'jpeg', 'gif'],
                    'video' => ['mp4', 'avi'],
                    'document' => ['pdf', 'docx'],
                    'audio' => ['mp3'],
                ];

                foreach ($map as $type => $exts) {
                    if (in_array($ext, $exts, true)) {
                        $file->type = $type;
                        break;
                    }
                }
            }
        });
    }

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
