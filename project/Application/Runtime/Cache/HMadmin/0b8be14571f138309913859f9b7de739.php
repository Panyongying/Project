<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0045)http://cnchat.hm.com/client/home?_projectid=1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>【客服代表H&amp;M】H&amp;M在线客服</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type/">
     <link href="/Project/project/Public/CustomService/bootstrap.min.css" rel="stylesheet">
    <link href="/Project/project/Public/CustomService/bootstrap-dialog.min.css" rel="stylesheet" type="text/css">
    <link href="/Project/project/Public/CustomService/hm.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/Project/project/Public/CustomService/uploadify.css">
	<link rel="stylesheet" type="text/css" href="/Project/project/Public/CustomService/filetype.css">
	<script src="/Project/project/Public/CustomService/jquery.min.js.下载" type="text/javascript"></script>
	




<!-- <script src="/Project/project/Public/CustomService/flashutil.js.下载" type="text/javascript"></script> -->



	<style type="text/css">
		.div_information p.text-info,p.text-warning {font-size:12px;color:#000;}
		.uploadify{padding-top:0px;}
		.hot_line {cursor: pointer;font-size:12px;color:#000;font-weight:bold;}
		.fileName{font-size:12px;color:#000;font-weight:bold;}
		.acceptattach{font-size:12px;color:#9c9c9c;font-style:normal;font-weight: normal;}
		.replaceAttachment{ padding-left:0px;}
		.uploadify-queue-item {padding:0px;margin-top:0px;padding-bottom:10px;}
		#queue{margin-top:0px;left:30px;top:350px;width:520px;margin:auto;position:absolute;}
		.ul_talklist_li1 { padding-top:20px;padding-bottom:20px;}
		.ul_talklist_li2 { padding:0px;margin:0px; }
	</style>
		<!--[if IE 7]>
	<style type="text/css">
		  .ul_talklist{margin-left:-5px;}
	</style>
	<![endif]-->
  </head>
<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_basic">
  <tbody><tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="30%">&nbsp;</td>
        <td align="center"><img src="/Project/project/Public/CustomService/hm_logo.png" width="106" height="64" class="img_logo"></td>
        <td width="30%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_close">
          <tbody><tr onclick="closeChatWindow();" style="cursor: pointer;">

          </tr>
        </tbody></table></td>
      </tr>
    </tbody></table></td>
  </tr>
  <tr>
    <td height="40" align="center" class="text_title">&nbsp;</td>
  </tr>
  <tr>
    <td class="table_td_padding_20px"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_talk_common"><tbody id="talk_table_id" sid="6500" originateuser="71626"><tr> <td height="40" class="table_td_padding_20px"><a class="text_title_12px">客户服务代表 - H&amp;M </a>&nbsp;&nbsp;<a class="text_title_12px_gray" id="typing_id"></a></td></tr><tr><td height="270" valign="top">

    <div class="div_talklist">
      
    </div>
    
  
    </td>
    </tr>
    </tbody>
    </table>
    </td>
  </tr>
  <tr>
    <td class="table_tools_padding">
    	
    </td>
  </tr>
  <tr>
    <td align="center" class="table_td_padding_20px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_talk_common">
          <tbody><tr style="padding:0px;margin:0px;">
            <td class="table_talk_input" style="padding:20px 20px 20px 20px;margin:0px;"><div contenteditable name="ta2" id="msgSend" style="margin:0px;padding:0px;outline:none;width:100%;height:20px;border:0px;resize:none;overflow:auto "></div> </td>
          </tr>
        </tbody></table></td>
        <td width="152" align="right"><input name="button" type="submit" style="border: 0px; background: rgb(0, 0, 0);" class="input_132px" id="button_enter"  value="发送" ></td>
      </tr>
      <script>
            var url = "ws://120.24.57.54:8282/";  
            var ws = new WebSocket(url); 
            var s = 0;
            var cid = '';
            if (ws.readyState == 0) {
              // console.log('正在建立连接');
              $('.div_talklist').append('正在建立连接' + "<br/>");

            }

            ws.onopen = function (e) {
              // console.log('连接成功');
              $('.div_talklist').append('连接成功' + "<br/>");
              ws.send('admin');

            }

            ws.onmessage = function (e) {
              // console.log(e.data);
              s += 20;
              data = JSON.parse(e.data);
              if ( cid == '') {
                cid = data.cid;
              }

              if (data.cid == cid) {
                $('.div_talklist').append('你:'+ data.content + "<br/>");
                $('.div_talklist').scrollTop(s);
              } else {
                toId = data.cid;
                $('.div_talklist').append('用户:'+ data.content + "<br/>");
                $('.div_talklist').scrollTop(s);
              }

              
            }
  
            $('#button_enter').on('click', function() {
              data.content = $('#msgSend').text();
              data.to = '<?php echo ($cid); ?>';
              data.cid = cid;

              ws.send(JSON.stringify(data));

              $('#msgSend').text('');
            });

      </script>
      <script>
        
      </script>
    </tbody></table></td>
  </tr>
  <tr>
    <td height="70" align="center" class="text_common">&nbsp;</td>
  </tr>
</tbody></table>

<div id="queue"></div>




<embed src="./Project/project/Public/CustomServiceandom=25e9671b-004b-44c3-9214-e5ea4f165cdf" width="0" height="0" align="middle" id="VisionIM" quality="high" bgcolor="#99CCFF" name="VisionIM" allowscriptaccess="always" pluginspage="http://www.adobe.com/go/getflashplayer" type="application/x-shockwave-flash"> </body></html>