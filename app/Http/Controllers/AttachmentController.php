<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadTrait;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    use UploadTrait;


    public function upload(Request $request)
    {
        $filename = $this->uploadFile($request->file('file'));
        // $list = $request->session()->get('images');
        // $list[] = $filename;
        $request->session()->push('attachments', $filename);
        return response()->json(['success' => $filename]);
    }
}
