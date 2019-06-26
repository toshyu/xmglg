<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\ad\add_ad.html";i:1561342127;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561340064;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\footer.html";i:1561340164;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/xmglg/public/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th {
        text-align: center
    }

    .long-td td {
        text-align: center
    }
    </style>
</head>
<link rel="stylesheet" type="text/css" media="all" href="/xmglg/public/sldate/daterangepicker-bs3.css" />
<script type="text/javascript" src="/xmglg/public/sldate/moment.js"></script>
<script type="text/javascript" src="/xmglg/public/sldate/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/xmglg/public/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/xmglg/public/static/admin/webupload/style.css">
<script type="text/javascript">
$(document).ready(function() {
    $('#reservation').daterangepicker(null, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
});
</script>
<style>
    .file-item{float: left; position: relative; width: 110px;height: 110px; margin: 0 20px 20px 0; padding: 4px;}
.file-item .info{overflow: hidden;}
.uploader-list{width: 100%; overflow: hidden;}
</style>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加广告</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" name="add" id="add" method="post" action="add_ad">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">标题：</label>
                                <div class="input-group col-sm-4">
                                    <input id="title" type="text" class="form-control" name="title" placeholder="请输入广告标题">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">广告位：</label>
                                <div class="input-group col-sm-4">
                                    <select class="form-control m-b chosen-select" name="ad_position_id" id="ad_position_id">
                                        <option value="">==请选择==</option>
                                        <?php if(!empty($position)): if(is_array($position) || $position instanceof \think\Collection || $position instanceof \think\Paginator): if( count($position)==0 ) : echo "" ;else: foreach($position as $key=>$vo): ?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">链接地址：</label>
                                <div class="input-group col-sm-4">
                                    <input id="link_url" type="text" class="form-control" name="link_url" placeholder="请输入广告链接地址">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">广告图片：</label>
                                <div class="input-group col-sm-4">
                                    <input type="hidden" id="data_photo" name="images">
                                    <div id="fileList" class="uploader-list" style="float:right"></div>
                                    <div id="imgPicker" style="float:left">选择图片</div>
                                    <img id="img_data" height="100px" style="float:left;margin-left: 50px;margin-top: -10px;" src="/xmglg/public/static/admin/images/no_img.jpg" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">广告日期：</label>
                                <div class="input-group col-sm-8">
                                    <input type="text" name="start_date" onclick="laydate()" id="reservation" class="form-control layer-date" placeholder="开始日期" />
                                    <input type="text" name="end_date" onclick="laydate()" id="reservation" class="form-control layer-date" placeholder="结束日期" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">状&nbsp;态：</label>
                                <div class="col-sm-6">
                                    <div class="radio i-checks">
                                        <input type="radio" name='status' value="1" checked="checked" />开启&nbsp;&nbsp;
                                        <input type="radio" name='status' value="0" />关闭
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">排序：</label>
                                <div class="input-group col-sm-4">
                                    <input id="orderby" type="text" value="100" class="form-control" name="orderby">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/xmglg/public/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/xmglg/public/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/xmglg/public/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/xmglg/public/static/admin/js/plugins/chosen/chosen.jquery.js"></script>
<script src="/xmglg/public/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/xmglg/public/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/xmglg/public/static/admin/js/plugins/switchery/switchery.js"></script>
<!--IOS开关样式-->
<script src="/xmglg/public/static/admin/js/jquery.form.js"></script>
<script src="/xmglg/public/static/admin/js/layer/layer.js"></script>
<script src="/xmglg/public/static/admin/js/laypage/laypage.js"></script>
<script src="/xmglg/public/static/admin/js/laytpl/laytpl.js"></script>
<script src="/xmglg/public/static/admin/js/lunhui.js"></script>
<script>
$(document).ready(function() { $(".i-checks").iCheck({ checkboxClass: "icheckbox_square-green", radioClass: "iradio_square-green", }) });
</script>
    <script type="text/javascript" src="/xmglg/public/static/admin/webupload/webuploader.min.js"></script>
    <script type="text/javascript">
    var $list = $('#fileList');
    //上传图片,初始化WebUploader
    var uploader = WebUploader.create({

        auto: true, // 选完文件后，是否自动上传。   
        swf: '/xmglg/public/static/admin/webupload/Uploader.swf', // swf文件路径 
        server: "<?php echo url('Upload/upload'); ?>", // 文件接收服务端。
        duplicate: true, // 重复上传图片，true为可重复false为不可重复
        pick: '#imgPicker', // 选择文件的按钮。可选。

        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png'
        },

        'onUploadSuccess': function(file, data, response) {
            $("#data_photo").val(data._raw);
            $("#img_data").attr('src', '/uploads/images/' + data._raw).show();
        }
    });

    uploader.on('fileQueued', function(file) {
        $list.html('<div id="' + file.id + '" class="item">' +
            '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">正在上传...</p>' +
            '</div>');
    });

    // 文件上传成功
    uploader.on('uploadSuccess', function(file) {
        $('#' + file.id).find('p.state').text('上传成功！');
    });

    // 文件上传失败，显示上传出错。
    uploader.on('uploadError', function(file) {
        $('#' + file.id).find('p.state').text('上传出错!');
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('#add').ajaxForm({
            beforeSubmit: checkForm, // 此方法主要是提交前执行的方法，根据需要设置
            success: complete, // 这是提交后的方法
            dataType: 'json'
        });

        function checkForm() {
            if ('' == $.trim($('#title').val())) {
                layer.msg('标题不能为空', { icon: 5 }, function(index) {
                    layer.close(index);
                });
                return false;
            }

        }

        function complete(data) {
            if (data.code == 1) {
                layer.msg(data.msg, { icon: 6, time: 1500, shade: 0.1 }, function(index) {
                    layer.close(index);
                    window.location.href = "<?php echo url('Ad/index'); ?>";
                });
            } else {
                layer.msg(data.msg, { icon: 5, time: 1500, shade: 0.1 }, function(index) {
                    layer.close(index);
                });
                return false;
            }
        }

    });


    //IOS开关样式配置
    var elem = document.querySelector('.js-switch');
    var switchery = new Switchery(elem, {
        color: '#1AB394'
    });
    var config = {
        '.chosen-select': {},
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
    </script>
</body>

</html>