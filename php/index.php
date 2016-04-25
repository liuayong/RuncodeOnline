<!DOCTYPE html>
<html lang="zh-cn">
  <head>
	<title>php代码在线测试工具</title>
	<meta content="text/html; charset=utf-8" http-equiv=content-type>
	<meta name=robots content=index,follow>
	<meta name=keywords content="php在线测试,php代码在线执行">
	<meta name=description content="php代码在线测试，这工具是为了测试工小段php代码执行结果而诞生的。">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<style>
	body {
	  padding-top: 10px;
	}
	.starter-template {
	  padding: 10px 15px;
	}
	</style>
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="./">php代码测试</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">主页</a></li>
            <li><a href="#about">关于</a></li>
            <li><a href="#contact">联系</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
	  <div class='bs-callout bs-callout-warning'>
        	<p class="lead">禁止io操作</p>
		</div>
<textarea rows="20" cols="100" id='txt'>
<?php
$aa=60;
echo 'hello '.'xxx'.$aa."<br>\r\n";
echo date('Y-m-d H:i:s',time());
?>
</textarea> 
			<button type="submit" class="btn btn-default" id='btn'>run</button>
			<div id='cc'></div>
			<textarea rows="20" cols="100" id='kk'></textarea> 
			<script>
			$('#btn').click(function(){
				var html=$('#txt').val();
				$('#cc').html('load...');
				$('#kk').val('load...');
				//alert(html);
				$.ajax({
					type: "POST",
					url: "run.php",
					data: {"code": html},
					success : function(msg){
						$('#cc').html(msg);
						$('#kk').val(msg);
					}
				});
			});
			</script>

      </div>
      <div class="footer">
	  <p><a id='about'></a><b>关于php在线代码测试工具：</b>经常有这样的情况，取特定时间，或正则处理，或想测试一小段代码的结果，都要新建一个php文件打代码保存，修改保存，相当麻烦。就想要一个php在线代码测试的工具，搜了一下没有在线的，所以就自己弄了一个，大家有什么改进意见可以发信息给我。</p>
      <p><a id='contact'></a><b>联系:</b>x</p>
	  <p>&copy; Company 2014</p> <a href="http://www.mcqyy.com/RunCode/php/" >php代码在线测试</a>
      </div>
    </div>
	


  </body>
</html>



