<?php
/**
 * Created by PhpStorm.
 * User: luhuajun
 * Date: 2016/10/14
 * Time: 16:20
 */

?>
<html>
<head>
    <meta name="robots" content="noindex,nofollow" />
    <style>
        /* Copyright (c) 2010, Yahoo! Inc. All rights reserved. Code licensed under the BSD License: http://developer.yahoo.com/yui/license.html */
        html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:text-top;}sub{vertical-align:text-bottom;}input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit;}input,textarea,select{*font-size:100%;}legend{color:#000;}
        html { background: #eee; padding: 10px }
        img { border: 0; }
        #sf-resetcontent { width:970px; margin:0 auto; }


    </style>
</head>
<body>

<p><?php echo $name;?></p>

<div id="sf-resetcontent" class="sf-reset">exception:<?php print_r($exception);?></div>;

<p><?php echo isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'';?></p>

</body>
</html>