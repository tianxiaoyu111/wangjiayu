<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        #upload {
            height: 150px;
            background: #808080;
            margin: 10px;
        }
        #show {
            background: #f1b8e7;
            width: 400px;
            height: 550px;
            margin: 10px;
            float: left;
            overflow: scroll;
            white-space:nowrap;
        }
        #show_fix {
            background: #dcdcdc;
            width: 400px;
            margin: 10px;
            height: 550px;
            float:left;
            overflow: scroll;
            white-space:nowrap;
        }
        button {
            display: block;
            margin: 10px;
            padding: 3px 5px;
        }
        #txt,#submit {
            margin: 10px;
            padding: 3px 5px;
        }
    </style>
    <script>
        function funcsrcoll1()
        {
            show_fix.scrollLeft = show.scrollLeft;
            show_fix.scrollTop = show.scrollTop;
        }
        function funcsrcoll2()
        {
            show.scrollLeft = show_fix.scrollLeft;
            show.scrollTop = show_fix.scrollTop;
        }
    </script>
</head>
<body>
<div id="container">
    <div id="upload">
        {{--<button id="1">上传</button>--}}
        <form enctype="multipart/form-data" action="{{ url('up') }}" method="post">
            {{ csrf_field() }}
            <input type="file" name="txt" id="txt"/>
            <input type="submit" value="提交" id="submit" />
        </form>

        <button id="2">修改</button>
        <button id="3">下载</button>
        <button id="4">重置</button>
    </div>
    <div id="show" onscroll="funcsrcoll1()">
        <p>田晓宇田晓宇田晓宇田晓宇田晓宇田晓宇田晓宇田晓田晓宇田晓宇田晓宇田晓宇宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
    </div>
    <div id="show_fix" onscroll="funcsrcoll2()">
        <p>田晓宇田晓宇田晓宇田晓宇田晓宇田晓宇田晓宇田晓田晓宇田晓宇田晓宇田晓宇宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
        <p>田晓宇</p>
    </div>
</div>

</body>
</html>