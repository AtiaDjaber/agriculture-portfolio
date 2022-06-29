<?php

namespace App\Http\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    public function uploadFile(UploadedFile $file, $folder = 'attachments')
    {
        if (!$file->isValid())
            return response()->json(['error_file_upload'], 400);

        $filename = $file->hashName();
        $file->storeAs('public/' . $folder, $filename);

        return $filename;
    }
}
