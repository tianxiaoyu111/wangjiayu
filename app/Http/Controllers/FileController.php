<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function showUploaded(Request $request)
    {
//return '显示上传文件内容';
        if (!$request->hasFile('txt')) {
            echo 'POST里没有txt文件';
            exit;
        }
        $file = $request->txt;
        $filename = $file->getClientOriginalName();
        $file->storeAs('up', $filename);
//        return nl2br(Storage::get('up/'.$file->getClientOriginalName()));
        $contents = Storage::get('up/'.$filename);
        $arr = explode("\r\n", $contents);//转换成数组
        foreach ($arr as $key => $val) {
            $num = '<small style="color: #778899">' . ($key+1) . '</small>' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
            $arr[$key] = $num.$val;
        }
        $str = nl2br(implode("\r\n", $arr));
        $jsonArr = [
            'filename' => $filename,
            'content' => $str,
        ];
        return response()->json($jsonArr);
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
