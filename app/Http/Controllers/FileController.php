<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function showUploaded(Request $request)
    {
//        return '显示上传文件内容';
        if (!$request->hasFile('txt')) {
            echo 'POST里没有txt文件';
        }
        $file = $request->txt;
        $file->storeAs('up',$file->getClientOriginalName());
        return $file->extension();
    }

    public function showFixed()
    {
        return '显示修改后的文件';
    }

    public function downLoad()
    {
        return '下载文件';
    }

    public function cleanUp()
    {
        return '清空';
    }
}
