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

<script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://partner.googleadservices.com/gampad/cookie.js?domain=demos.codingcage.com&amp;callback=_gfp_s_&amp;client=ca-pub-6782606993374574&amp;cookie=ID%3D90a211bf503c4765-2249e08855c6007b%3AT%3D1615438324%3ART%3D1615438324%3AS%3DALNI_MboSU73H-MheKJmB1ToMw1VV2ebzA"></script><script src="https://pagead2.googlesyndication.com/pagead/js/r20210309/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>

<meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><link rel="preload" href="https://adservice.google.com.mm/adsid/integrator.js?domain=demos.codingcage.com" as="script"><script type="text/javascript" src="https://adservice.google.com.mm/adsid/integrator.js?domain=demos.codingcage.com"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=demos.codingcage.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=demos.codingcage.com"></script></head>


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
    <div class="ad" style="text-align:center;">
            <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- demo 728 x 90 -->
<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-6782606993374574" data-ad-slot="5246648647" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:728px;height:90px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="728" height="90" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6782606993374574&amp;output=html&amp;h=90&amp;slotname=5246648647&amp;adk=799110754&amp;adf=3175363789&amp;pi=t.ma~as.5246648647&amp;w=728&amp;lmt=1615439036&amp;psa=0&amp;format=728x90&amp;url=http%3A%2F%2Fdemos.codingcage.com%2Fajax-login%2Findex.php&amp;flash=0&amp;wgl=1&amp;dt=1615439036004&amp;bpp=4&amp;bdt=101&amp;idt=30&amp;shv=r20210309&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D90a211bf503c4765-2249e08855c6007b%3AT%3D1615438324%3ART%3D1615438324%3AS%3DALNI_MboSU73H-MheKJmB1ToMw1VV2ebzA&amp;prev_slotnames=5002106647&amp;correlator=1915012043603&amp;frm=20&amp;pv=1&amp;ga_vid=1417427867.1615438313&amp;ga_sid=1615439036&amp;ga_hid=1442898058&amp;ga_fc=0&amp;u_tz=390&amp;u_his=3&amp;u_java=0&amp;u_h=864&amp;u_w=1536&amp;u_ah=824&amp;u_aw=1536&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=404&amp;ady=506&amp;biw=1536&amp;bih=754&amp;scr_x=0&amp;scr_y=0&amp;eid=44737536%2C21066922&amp;oid=3&amp;pvsid=2629387368365813&amp;pem=729&amp;ref=http%3A%2F%2Fdemos.codingcage.com%2Fajax-login%2Fhome.php&amp;rx=0&amp;eae=0&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1536%2C0%2C1536%2C824%2C1536%2C754&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=8192&amp;bc=23&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=8QesFcarWh&amp;p=http%3A//demos.codingcage.com&amp;dtd=33" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!2" data-load-complete="true"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
    
</div>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!-- analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55983115-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- alalytics -->



<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_2_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6782606993374574&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1615439036&amp;plat=1%3A32776%2C2%3A32776%2C9%3A32776%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1081344%2C32%3A32&amp;format=0x0&amp;url=http%3A%2F%2Fdemos.codingcage.com%2Fajax-login%2Findex.php&amp;ea=0&amp;flash=0&amp;pra=7&amp;wgl=1&amp;dt=1615439036008&amp;bpp=1&amp;bdt=105&amp;idt=44&amp;shv=r20210309&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D90a211bf503c4765-2249e08855c6007b%3AT%3D1615438324%3ART%3D1615438324%3AS%3DALNI_MboSU73H-MheKJmB1ToMw1VV2ebzA&amp;prev_fmts=728x90&amp;prev_slotnames=5002106647&amp;nras=1&amp;correlator=1915012043603&amp;frm=20&amp;pv=1&amp;ga_vid=1417427867.1615438313&amp;ga_sid=1615439036&amp;ga_hid=1442898058&amp;ga_fc=0&amp;u_tz=390&amp;u_his=3&amp;u_java=0&amp;u_h=864&amp;u_w=1536&amp;u_ah=824&amp;u_aw=1536&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=1536&amp;bih=754&amp;scr_x=0&amp;scr_y=0&amp;eid=44737536%2C21066922&amp;oid=3&amp;pvsid=2629387368365813&amp;pem=729&amp;ref=http%3A%2F%2Fdemos.codingcage.com%2Fajax-login%2Fhome.php&amp;rx=0&amp;eae=2&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1536%2C0%2C1536%2C824%2C1536%2C754&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=8192&amp;bc=23&amp;ifi=3&amp;uci=a!3&amp;fsb=1&amp;dtd=47" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!3" data-load-complete="true"></iframe></ins></ins></ins><iframe id="google_osd_static_frame_3901442845496" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe></body>

<iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20210309/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-6782606993374574" style="display: none;"></iframe>

</html>