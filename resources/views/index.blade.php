<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        #header {
            /*height: 150px;*/
            background: #808080;
            margin: 10px;
        }
        #left {
            float: left;
            margin: 10px;
        }
        #right {
            float: left;
            margin: 10px;
        }

        #show {
            background: #f1b8e7;
            width: 400px;
            height: 550px;
            overflow: scroll;
            white-space:nowrap;
        }

        #show_fix {
            background: #dcdcdc;
            width: 400px;
            height: 550px;
            overflow: scroll;
            white-space:nowrap;
        }
        button {
            /*display: block;*/
            margin: 10px;
            padding: 3px 5px;
        }
        #txt,#submit {
            margin: 10px;
            padding: 3px 5px;
        }
    </style>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
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

        function uploadPic() {
          var form = document.getElementById('upload'),
            formData = new FormData(form);
          $.ajax({
               url:"{{ url('up') }}",   //js函数内部也可以调用php函数
               type:"post",
               data:formData,
               processData:false,
               contentType:false,
               success:function(res){
        //            if(res){
        //             alert("上传成功！");
        //            }
                    console.log(res);
                    $("#txt").val("");
                    $("#filename").html(res.filename);
                    $("#show").html(res.content);
        //            $(".showUrl").html(res);
        //            $(".showPic").attr("src",res);
               },
               error:function(err){
                    alert("网络连接失败,稍后重试",err);
               }

          })

         }
    </script>
</head>
<body>
<div id="container">
    <div id="header">
        {{--<button id="1">上传</button>--}}
        <form id="upload" enctype="multipart/form-data" action="{{ url('up') }}" method="post">
            {{ csrf_field() }}
            <input type="file" name="txt" id="txt"/>
            <input type="button" value="提交" id="submit" onclick="uploadPic()"/>
        </form>

        <button id="2">修改</button>
        <button id="3">下载</button>
        <button id="4">重置</button>
    </div>
    <div id="left">
        <span id="filename">filename</span>：
        <div id="show" onscroll="funcsrcoll1()">
            <p>王佳雨传文件，点击提交后你会在这里看见文件内容</p>
        </div>
    </div>
    <div id="right">
        <span id="filename1">filename1</span>：
        <div id="show_fix" onscroll="funcsrcoll2()">
            <p>然后点修改，这里显示修改后的文件内容</p>
            <p>确认没问题点下载，重新开始点重置</p>
        </div>
    </div>


</div>

</body>
</html>