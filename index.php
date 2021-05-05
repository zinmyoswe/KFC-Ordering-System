<?php
	session_start();
 	require_once 'confs/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> 

<link rel="shortcut icon" href="kfc.png" type="image/x-icon" width="100%">     

<script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://partner.googleadservices.com/gampad/cookie.js?domain=demos.codingcage.com&amp;callback=_gfp_s_&amp;client=ca-pub-6782606993374574&amp;cookie=ID%3D90a211bf503c4765-2249e08855c6007b%3AT%3D1615438324%3ART%3D1615438324%3AS%3DALNI_MboSU73H-MheKJmB1ToMw1VV2ebzA"></script><script src="https://pagead2.googlesyndication.com/pagead/js/r20210309/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>

</head>


<body>

    
<div class="signin-form">

        <div class="ad" style="text-align:center; margin-top:20px;"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- link ad 728 X 15 -->
<ins class="adsbygoogle" style="display:inline-block;width:728px;height:15px" data-ad-client="ca-pub-6782606993374574" data-ad-slot="5002106647" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:15px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_0_anchor" style="display:block;border:none;height:15px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:728px;height:15px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="728" height="15" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6782606993374574&amp;output=html&amp;h=15&amp;slotname=5002106647&amp;adk=1312017335&amp;adf=683863926&amp;pi=t.ma~as.5002106647&amp;w=728&amp;lmt=1615439036&amp;psa=0&amp;url=http%3A%2F%2Fdemos.codingcage.com%2Fajax-login%2Findex.php&amp;flash=0&amp;wgl=1&amp;dt=1615439036001&amp;bpp=3&amp;bdt=98&amp;idt=17&amp;shv=r20210309&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D90a211bf503c4765-2249e08855c6007b%3AT%3D1615438324%3ART%3D1615438324%3AS%3DALNI_MboSU73H-MheKJmB1ToMw1VV2ebzA&amp;correlator=1915012043603&amp;frm=20&amp;pv=2&amp;ga_vid=1417427867.1615438313&amp;ga_sid=1615439036&amp;ga_hid=1442898058&amp;ga_fc=1&amp;u_tz=390&amp;u_his=3&amp;u_java=0&amp;u_h=864&amp;u_w=1536&amp;u_ah=824&amp;u_aw=1536&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=404&amp;ady=20&amp;biw=1536&amp;bih=754&amp;scr_x=0&amp;scr_y=0&amp;eid=44737536%2C21066922&amp;oid=3&amp;pvsid=2629387368365813&amp;pem=729&amp;ref=http%3A%2F%2Fdemos.codingcage.com%2Fajax-login%2Fhome.php&amp;rx=0&amp;eae=0&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1536%2C0%2C1536%2C824%2C1536%2C754&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=8192&amp;bc=23&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;xpc=7Y0Wd47PlE&amp;p=http%3A//demos.codingcage.com&amp;dtd=28" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-load-complete="true"></iframe></ins></ins></ins><br>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>
</div>        

	<div class="container">
     
        
        <form class="form-signin" method="post" id="login-form" novalidate="novalidate">
      
        <h2 class="form-signin-heading">Log In to WebApp.</h2><hr>
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="alert alert-info">
        	<ul>
            <li>useremail : test@gmail.com</li>
            <li>password  : test</li>
            </ul>
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email">
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
        </div>
       
     	<hr>
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
        </div>  
      
      </form>

    </div>
     
    <br>
   
    
</div>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>






</body>



</html>