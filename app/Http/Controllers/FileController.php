<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index()
    {
        return '显示页面';
    }

    public function showUploaded()
    {
        return '显示上传文件内容';
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
