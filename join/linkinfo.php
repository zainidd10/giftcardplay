<?php
error_reporting(0);
session_start();

if($_SESSION["loged"] !== "admin"){
	
	header("Location: ./admin");
	
}

?>

<html ><head><meta charset="utf-8">
<script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-6396844742497208.js"></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_rendering_2019061701.js"></script><script async="" type="text/javascript" src="http://www.googletagservices.com/tag/js/gpt.js"></script><script src="http://edge.quantserve.com/quant.js" async="" type="text/javascript"></script><script async="" src="http://b.scorecardresearch.com/beacon.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-N24FG6"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-6396844742497208.js"></script><script src="http://rules.quantcount.com/rules-p-31iz6hfFutd16.js" async=""></script><script src="http://edge.quantserve.com/quant.js" async="" type="text/javascript"></script><script async="" src="http://b.scorecardresearch.com/beacon.js"></script><script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-6396844742497208.js"></script><script src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><link rel="preload" href="https://adservice.google.iq/adsid/integrator.js?domain=localhost" as="script"><script type="text/javascript" src="https://adservice.google.iq/adsid/integrator.js?domain=localhost"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=localhost" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=localhost"></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_rendering_2019061701.js"></script><script src="https://rules.quantcount.com/rules-p-31iz6hfFutd16.js" async=""></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://pagead2.googlesyndication.com/pagead/js/r20190619/r20190131/rum.js"></script><script src="https://secure.quantserve.com/quant.js" async="" type="text/javascript"></script><script async="" src="https://sb.scorecardresearch.com/beacon.js"></script><script async="" type="text/javascript" src="https://www.googletagservices.com/tag/js/gpt.js"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-6396844742497208.js"></script><script src="https://secure.quantserve.com/quant.js" async="" type="text/javascript"></script><script async="" src="https://sb.scorecardresearch.com/beacon.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-N24FG6"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script>(function(){function a(g,h,i){var j=new Date;j.setTime(j.getTime()+1e3*(60*(60*(24*i))));var k="expires="+j.toUTCString(),l=g+"="+h+";"+k+";path=/;";"undefined"!=typeof ezdomain&&(l+="domain="+ezdomain),document.cookie=l}var b=window.addEventListener?"addEventListener":"attachEvent",c=window[b],f="attachEvent"==b?"onmessage":"message";c(f,function(g){"undefined"!=typeof g.data.ezstatus&&(__ez.bit.AddAndFire(_ezaq.page_view_id,[new __ezDotData("dg",g.data.ezstatus)]),a("ezdg",g.data.ezstatus,730))})})();</script>
<script data-cfasync="false" data-pagespeed-no-defer="">var __ez=__ez||{};__ez.evt={};__ez.ck={};__ez.template={};__ez.template.isOrig=true;__ez.evt.add=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent?e.attachEvent("on"+t,n):e["on"+t]=n()},__ez.evt.remove=function(e,t,n){e.removeEventListener?e.removeEventListener(t,n,!1):e.detachEvent?e.detachEvent("on"+t,n):delete e["on"+t]};__ez.ck.get=function(e,n){null!==n&&(e=e+"_"+n);for(var o=e+"=",t=decodeURIComponent(document.cookie).split(";"),i=0;i<t.length;i++){for(var c=t[i];" "===c.charAt(0);)c=c.substring(1);if(0===c.indexOf(o))return c.substring(o.length,c.length)}return""},__ez.ck.setByCat=function(e,n){if("undefined"!=typeof cmpIsOn){if(null!=n){var o=__ez.ck.get("ezCMPCookieConsent",null);-1!==(o=o.substring(1,o.length)).indexOf(n+"=1")?document.cookie=e:""===o&&"undefined"!=typeof cmpCookies&&(void 0===cmpCookies[n]&&(cmpCookies[n]=[]),cmpCookies[n].push(e))}}else document.cookie=e};__ez.queue=function(){var e=0,i=0,t=[],n=[],r=[],o=!0,s={func:function(e,i,n,r,o,s,a){var l=this;this.name=e,this.funcName=i,this.parameters=null===n?null:n instanceof Array?n:[n],this.isBlock=r,this.blockedBy=o,this.deleteWhenComplete=s,this.isError=!1,this.isComplete=!1,this.isInitialized=!1,this.proceedIfError=a,this.process=function(){c("... func = "+e),l.isInitialized=!0,l.isComplete=!0;var i=l.funcName.split(".");i.length>3||(3===i.length?window[i[0]][i[1]][i[2]].apply(null,this.parameters):2===i.length?window[i[0]][i[1]].apply(null,this.parameters):window[l.funcName].apply(null,this.parameters)),!0===l.deleteWhenComplete&&delete t[e],!0===l.isBlock&&(c("----- F'D: "+l.name),d())}},file:function(e,i,t,n,r,o,s){var a=this;this.name=e,this.path=i,this.async=r,this.defer=o,this.isBlock=t,this.blockedBy=n,this.isInitialized=!1,this.isError=!1,this.isComplete=!1,this.proceedIfError=s,this.process=function(){a.isInitialized=!0,c("... file = "+e);var t=document.createElement("script");t.src=i,!0===r?t.async=!0:!0===o&&(t.defer=!0),t.onerror=function(){c("----- ERR'D: "+a.name),a.isError=!0,!0===a.isBlock&&d()},t.onreadystatechange=t.onload=function(){var e=t.readyState;c("----- F'D: "+a.name),e&&!/loaded|complete/.test(e)||(a.isComplete=!0,!0===a.isBlock&&d())},document.getElementsByTagName("head")[0].appendChild(t)}}};function a(e){!0!==l(e)&&0!=o&&e.process()}function l(e){if(e.blockedBy instanceof Array)for(var i=0;i<e.blockedBy.length;i++){var n=e.blockedBy[i];if(!1===t.hasOwnProperty(n))return c(e.name+" blocked = "+n),!0;if(!0===e.proceedIfError&&!0===t[n].isError)return!1;if(!1===t[n].isComplete)return c(e.name+" blocked = "+n),!0}return!1}function c(e){var i=window.location.href,t=new RegExp("[?&]ezq=([^&#]*)","i").exec(i);"1"===(t?t[1]:null)&&console.debug(e)}function d(){++e>200||(c("let's go"),h(n),h(r))}function h(e){for(var i in e)if(!1!==e.hasOwnProperty(i)){var t=e[i];!0===t.isComplete||l(t)||!0===t.isInitialized||!0===t.isError?!0===t.isError?c(t.name+": error"):!0===t.isComplete?c(t.name+": complete already"):!0===t.isInitialized&&c(t.name+": initialized already"):t.process()}}return{addFile:function(e,i,o,l,c,d,h,f){var u=new s.file(e,i,o,l,c,d,h);!0===f?n[e]=u:r[e]=u,t[e]=u,a(u)},addFunc:function(e,o,l,c,d,h,f,u,p){!0===h&&(e=e+"_"+i++);var m=new s.func(e,o,l,c,d,f,u);!0===p?n[e]=m:r[e]=m,t[e]=m,a(m)},items:t,processAll:d,setallowLoad:function(e){o=e}}}();__ez.dot={};var __ezDotData=function(e,r){this.name=e,this.val=r};__ez.dot.b64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var r,t,n,o,a,i,d,_="",f=0;for(e=Base64._utf8_encode(e);f<e.length;)o=(r=e.charCodeAt(f++))>>2,a=(3&r)<<4|(t=e.charCodeAt(f++))>>4,i=(15&t)<<2|(n=e.charCodeAt(f++))>>6,d=63&n,isNaN(t)?i=d=64:isNaN(n)&&(d=64),_=_+this._keyStr.charAt(o)+this._keyStr.charAt(a)+this._keyStr.charAt(i)+this._keyStr.charAt(d);return _},decode:function(e){var r,t,n,o,a,i,d="",_=0;for(e=e.replace(/[^A-Za-z0-9+/=]/g,"");_<e.length;)r=this._keyStr.indexOf(e.charAt(_++))<<2|(o=this._keyStr.indexOf(e.charAt(_++)))>>4,t=(15&o)<<4|(a=this._keyStr.indexOf(e.charAt(_++)))>>2,n=(3&a)<<6|(i=this._keyStr.indexOf(e.charAt(_++))),d+=String.fromCharCode(r),64!=a&&(d+=String.fromCharCode(t)),64!=i&&(d+=String.fromCharCode(n));return d=Base64._utf8_decode(d)},_utf8_encode:function(e){e=e.replace(/rn/g,"n");for(var r="",t=0;t<e.length;t++){var n=e.charCodeAt(t);n<128?r+=String.fromCharCode(n):(127<n&&n<2048?r+=String.fromCharCode(n>>6|192):(r+=String.fromCharCode(n>>12|224),r+=String.fromCharCode(n>>6&63|128)),r+=String.fromCharCode(63&n|128))}return r},_utf8_decode:function(e){for(var r="",t=0,n=c1=c2=0;t<e.length;)(n=e.charCodeAt(t))<128?(r+=String.fromCharCode(n),t++):191<n&&n<224?(c2=e.charCodeAt(t+1),r+=String.fromCharCode((31&n)<<6|63&c2),t+=2):(c2=e.charCodeAt(t+1),c3=e.charCodeAt(t+2),r+=String.fromCharCode((15&n)<<12|(63&c2)<<6|63&c3),t+=3);return r}},__ez.dot.dataToStr=function(e){if(void 0===e)return[];try{for(var r in e)e[r].val=e[r].val+""}catch(e){}return e},__ez.dot.getCC=function(){var e="XX";return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("country")&&(e=_ezaq.country),e},__ez.dot.getDID=function(){var e="0";return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(e=_ezaq.domain_id.toString()),e},__ez.dot.getEpoch=function(e){return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("t_epoch")&&(e=_ezaq.t_epoch),e},__ez.dot.getPageviewId=function(){var e="";return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("page_view_id")&&(e=_ezaq.page_view_id),e},__ez.dot.getURL=function(e){return("undefined"!=typeof ezJsu&&1==ezJsu||"undefined"!=typeof _ez_sa&&1==_ez_sa||"undefined"!=typeof isAmp&&!0===isAmp||"undefined"!=typeof ezWp&&!0===ezWp)&&(e="//g.ezoic.net"+e),e},__ez.dot.isValid=function(e){for(var r=0;r<e.length;r++)if(e[r]instanceof __ezDotData==!1)return console.error("Invalid data. ",e[r]),!1;return!0},__ez.dot.isDefined=function(){for(var e=0;e<arguments.length;e++)if(void 0===arguments[e]||null===arguments[e])return console.error("Argument not defined. ",arguments),!1;return!0};__ez.bit=function(){function c(a,b){d(a,b),e()}function d(b,c){__ez.dot.isDefined(b)&&__ez.dot.isValid(c)&&a.push({type:"pageview",pageview_id:b,domain_id:__ez.dot.getDID(),t_epoch:__ez.dot.getEpoch(0),data:__ez.dot.dataToStr(c)})}function e(){void 0!==document.visibilityState&&"prerender"===document.visibilityState||(__ez.dot.isDefined(a)&&a.length>0&&((new Image).src=__ez.dot.getURL(b)+"?orig="+(!0===__ez.template.isOrig?1:0)+"&ds="+btoa(JSON.stringify(a))),a=[])}var a=[],b="/detroitchicago/greenoaks.gif";return{Add:d,AddAndFire:c,Fire:e}}();</script><script data-cfasync="false" data-pagespeed-no-defer="">__ez.pel=function(){var z=[],i="/porpoiseant/army.gif";function t(e,i,t,d,_,o,n){if(__ez.dot.isDefined(e,e.getSlotElementId)){var a=parseInt(e.getTargeting("ap")[0]),r=function(e){var i=0;try{var t=e.getTargetingMap(),d=e.getSlotElementId();if(-1===d.indexOf("div-gpt-ad"))return i;if(void 0!==t)for(var _ in t)if(-1!==_.indexOf("iid")&&void 0!==t[_][0]){i=t[_][0];break}}catch(e){}return i}(e),s=e.getSlotElementId(),p=parseInt(e.getTargeting("compid")[0]),g=0,v=0;if("object"==typeof _ezim_d){var m=e.getAdUnitPath().split("/").pop();void 0!==_ezim_d[m]&&(void 0!==_ezim_d[m].creative_id&&(v=_ezim_d[m].creative_id),void 0!==_ezim_d[m].line_item_id&&(g=_ezim_d[m].line_item_id))}__ez.dot.isDefined(r,s)&&__ez.dot.isValid(i)&&z.push({type:"impression",impression_id:r,domain_id:__ez.dot.getDID(),unit:s,t_epoch:__ez.dot.getEpoch(0),revenue:t,est_revenue:d,ad_position:a,ad_size:"",bid_floor_filled:_,bid_floor_prev:o,stat_source_id:n,country_code:__ez.dot.getCC(),pageview_id:__ez.dot.getPageviewId(),comp_id:p,line_item_id:g,creative_id:v,data:__ez.dot.dataToStr(i)})}}function d(){if(void 0===document.visibilityState||"prerender"!==document.visibilityState){if(__ez.dot.isDefined(z)&&0<z.length){var e=__ez.dot.getURL(i)+"?orig="+(!0===__ez.template.isOrig?1:0)+"&sts="+btoa(JSON.stringify(z));void 0!==window.isAmp&&isAmp&&void 0!==window._ezaq&&_ezaq.hasOwnProperty("domain_id")&&(e+="&visit_uuid="+_ezaq.visit_uuid),(new Image).src=e}z=[]}}return{Add:t,AddAndFire:function(e,i){t(e,i,0,0,0,0,0),d()},AddById:function(e,i){var t=e.split("/");if(__ez.dot.isDefined(e)&&3===t.length&&__ez.dot.isValid(i)){var d=t[0],_=t[2];z.push({type:"impression",impression_id:_,domain_id:__ez.dot.getDID(),unit:d,t_epoch:__ez.dot.getEpoch(0),pageview_id:__ez.dot.getPageviewId(),data:__ez.dot.dataToStr(i)})}},Fire:d}}();var EzoicPixel=function(){this.pixels=[],this.pixelUrl="/ezoic/e.gif",("undefined"!=typeof ezJsu&&!0===ezJsu||"undefined"!=typeof _ez_sa&&!0===_ez_sa||void 0!==window.isAmp&&!0===isAmp||"undefined"!=typeof ezWp&&!0===ezWp)&&(this.pixelUrl="//g.ezoic.net"+this.pixelUrl),this.tEpoch=0,"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("t_epoch")&&(this.tEpoch=_ezaq.t_epoch)},EzoicPixelData=function(i,e){this.name=i,this.val=e};EzoicPixel.prototype={constructor:EzoicPixel,AddAndFireImpPixel:function(i,e){this.AddImpPixel(i,e,0,0,0,0,0),this.FirePixels()},AddAndFirePVPixel:function(i,e){this.AddPVPixel(i,e),this.FirePixels()},AddImpPixel:function(i,e,t,n,o,a,r){if(this.isDefined(i,i.getSlotElementId)){var d=parseInt(i.getTargeting("ap")[0]),s=i.getSizes()[0],p=s.l.toString()+"x"+s.j.toString(),l="0",h="XX";"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(l=_ezaq.domain_id.toString()),"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("country")&&(h=_ezaq.country);var f=this.getSlotIID(i),c=i.getSlotElementId();this.isDefined(f,c)&&this.validateData(e)&&(e=this.convertDataToStr(e),this.pixels.push({type:"impression",impression_id:f,domain_id:l,unit:c,t_epoch:this.tEpoch,revenue:t,est_revenue:n,ad_position:d,ad_size:p,bid_floor_filled:o,bid_floor_prev:a,stat_source_id:r,country_code:h,data:e}))}},AddImpPixelById:function(i,e){var t="0";"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(t=_ezaq.domain_id.toString());var n=i.split("/");if(this.isDefined(i)&&3===n.length&&this.validateData(e)){var o=n[0],a=n[2];e=this.convertDataToStr(e),this.pixels.push({type:"impression",impression_id:a,domain_id:t,unit:o,t_epoch:this.tEpoch,data:e})}},AddPVPixel:function(i,e){var t="0";"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(t=_ezaq.domain_id.toString()),this.isDefined(i)&&this.validateData(e)&&(e=this.convertDataToStr(e),this.pixels.push({type:"pageview",pageview_id:i,domain_id:t,t_epoch:this.tEpoch,data:e}))},FirePixels:function(){void 0!==document.visibilityState&&"prerender"===document.visibilityState||(this.isDefined(this.pixels)&&this.pixels.length>0&&((new Image).src=this.pixelUrl+"?orig="+(!0===__ez.template.isOrig?1:0)+"&pixels="+encodeURIComponent(JSON.stringify(this.pixels))),this.pixels=[])},NewData:function(i,e){return new EzoicPixelData(i,e)},convertDataToStr:function(i){if(void 0===i)return[];try{for(var e in i)i[e].val=i[e].val+""}catch(i){}return i},getSlotIID:function(i){var e=0;try{var t=i.getTargetingMap();if(-1===i.getSlotElementId().indexOf("div-gpt-ad"))return e;if(void 0!==t)for(var n in t)if(-1!==n.indexOf("iid")&&void 0!==t[n][0]){e=t[n][0];break}}catch(i){}return e},isDefined:function(){for(var i=0;i<arguments.length;i++)if(void 0===arguments[i]||null===arguments[i])return console.error("Argument not defined. ",arguments),!1;return!0},validateData:function(i){for(var e=0;e<i.length;e++)if(i[e]instanceof EzoicPixelData==!1)return console.error("Invalid pixelData. ",i[e]),!1;return!0}};</script>
<title>Anonymous2019 - انسخ الرابط</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Keep spam out of your mail and stay safe - just use a disposable temporary email address! Protect your personal email address from spam with Temp-mail">
<meta name="keywords" content="free, temporary, email, disposable, mail, email address">
<meta name="apple-app" content="app-id=1214259095">
<meta name="google-play-app" content="app-id=com.tempmail">
<link rel="apple-touch-icon" href="https://temp-mail.org/images/icon-temp-mail-mobile@2.png">
<link rel="android-touch-icon" href="https://temp-mail.org/images/icon-temp-mail-mobile.png">
<link rel="Canonical" href="">

<link href="./css/theme-main.min.css?v=1" rel="stylesheet">


<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/inojafojbhdpnehkhhfjalgjjobnhomj">
    <!--[if lt IE 9]>
  <script src="https://temp-mail.org/js/html5shiv.js"></script>
  <script src="https://temp-mail.org/js/respond.min.js"></script>
<![endif]-->
<script>
var url_domain = 'temp-mail.org';
var url_check = 'https://temp-mail.org/en/option/check/';
var url_delete = 'https://temp-mail.org/en/option/delete/';
var url_refresh = '../join/';
var lang_delete = 'Delete this address';
var lang_deleted = 'Deleted!';
var lang_change = 'معاينة الشكل عند فتح الرابط';
var lang_refresh = 'Refresh message list';
var lang_refreshed = 'Refreshed!';
var lang_copy = '!نسخ الرابط';
var lang_copied = 'تم النسخ!';
</script>
<style>
img {
  opacity: 1;
  transition: opacity 0.3s;
}
 
img[data-src] {
  opacity: 0;
}
</style>

<script data-cfasync="false" type="text/javascript">window.google_analytics_uacct = "UA-85181775-28";</script>
<script data-cfasync="false" type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['e._setAccount', 'UA-85181775-28']);
_gaq.push(['f._setAccount', 'UA-38339005-1']);
_gaq.push(['e._setDomainName', 'temp-mail.org']);
_gaq.push(['f._setDomainName', 'temp-mail.org']);
_gaq.push(['e._setCustomVar',1,'template','old_site_gc',3]);
_gaq.push(['e._setCustomVar',2,'t','126',3]);
_gaq.push(['e._setCustomVar',3,'rid','0',2]);
_gaq.push(['e._setCustomVar',4,'bra','mod32-c',3]);
_gaq.push(['f._setSampleRate', '1']);
_gaq.push(['e._setSampleRate', '1']);
_gaq.push(['e._setAllowAnchor',true]);
_gaq.push(['e._setSiteSpeedSampleRate', 10]);
_gaq.push(['f._setCustomVar',1,'template','old_site_gc',3]);
_gaq.push(['f._setCustomVar',2,'domain','temp-mail.org',3]);
_gaq.push(['f._setSiteSpeedSampleRate', 20]);
_gaq.push(['e._trackPageview']);
_gaq.push(['f._trackPageview']);


(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">var ezouid = "1";</script><base href=""><script type="text/javascript">
var ezoTemplate = 'old_site_gc';
if(typeof ezouid == 'undefined')
{
    var ezouid = 'none';
}
var ezoFormfactor = '1';
var ezo_elements_to_check = Array();
</script>

<!-- START EZHEAD -->
<script type="text/javascript">
var soc_app_id = '0';
var did = 30309;
var ezdomain = 'temp-mail.org';
var ezoicSearchable = 1;
</script>
<!--{jquery}-->
<!-- END EZHEAD -->

<script type="text/javascript" data-cfasync="false">var _ezaq = {"ad_cache_level":0,"city":"","country":"IQ","days_since_last_visit":0,"domain_id":30309,"engaged_time_visit":334,"ezcache_level":0,"forensiq_score":-1,"form_factor_id":1,"framework_id":1,"is_return_visitor":true,"last_page_load":"1561461382934","last_pageview_id":"36128754-97ff-4427-45d6-cb399e9fcabc","lt_cache_level":0,"metro_code":0,"page_ad_positions":"","page_view_count":58,"page_view_id":"6c8437db-fb86-4a87-6a3a-6b953e51390c","position_selection_id":0,"postal_code":"","pv_event_count":0,"response_time_orig":91,"serverid":"54.93.72.102:7029","state":"","t_epoch":1561461394,"template_id":126,"time_on_site_visit":483,"url":"https://temp-mail.org/en/","user_id":0,"weather_precipitation":0,"weather_summary":"","weather_temperature":0,"word_count":527,"worst_bad_word_level":0};var _ezExtraQueries = "&ez_orig=1";</script><script data-cfasync="false" type="text/javascript" src="/detroitchicago/rochester.js?cb=185-1&amp;v=8" async=""></script>
<script data-pagespeed-no-defer="" data-cfasync="false">
function create_ezolpl() {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    __ez.ck.setByCat("ezux_lpl_30309=" + new Date().getTime() + "|6c8437db-fb86-4a87-6a3a-6b953e51390c; " + expires, 3);
}
function attach_ezolpl() {
    if(window.attachEvent) {
        window.attachEvent('onload', create_ezolpl);
    } else {
        if(window.onload) {
            var curronload = window.onload;
            var newonload = function(evt) {
                curronload(evt);
                create_ezolpl();
            };
            window.onload = newonload;
        } else {
            window.onload = create_ezolpl;
        }
    }
}
attach_ezolpl();
</script><script src="/detroitchicago/edmonton.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><script src="/porpoiseant/jellyfish.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><link rel="preload" href="https://adservice.google.iq/adsid/integrator.js?domain=temp-mail.org" as="script"><script type="text/javascript" src="https://adservice.google.iq/adsid/integrator.js?domain=temp-mail.org"></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2019061701.js" async=""></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=temp-mail.org" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=temp-mail.org"></script><link rel="preload" href="https://pagead2.googlesyndication.com/pagead/js/r20190619/r20190131/show_ads_impl.js?cb=1" as="script"><script src="/detroitchicago/edmonton.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><script src="/porpoiseant/jellyfish.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2019061701.js" async=""></script><link rel="prefetch" href="https://tpc.googlesyndication.com/safeframe/1-0-33/html/container.html"><script src="/detroitchicago/edmonton.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><script src="/porpoiseant/jellyfish.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><link rel="preload" href="https://pagead2.googlesyndication.com/pagead/js/r20190619/r20190131/show_ads_impl.js" as="script"><script src="/detroitchicago/edmonton.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><script src="/porpoiseant/jellyfish.webp?a=a&amp;cb=1&amp;shcb=31" async=""></script><link rel="prefetch" href="http://tpc.googlesyndication.com/safeframe/1-0-33/html/container.html"></head>
<body>

<header class="main-header">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col align-v-mid hidden-xs-sm">
                <div class="btn-appstore">
                    <a href="https://www.facebook.com/أنونيموس-anonymous-381069016093095/" target="_blank" class="btn btn-outline-dark">
                        <img width="20" src="./css/face.png" alt="صفحتنا على فيسبوك">صفحتنا على Facebook</a>
                  
                </div>
            </div>
			
			
            <div class="col align-v-mid align-content-center">
<img width="250" src="./css/face4.png" alt="Anonymous 2019">
            </div>
			
			
            <div class="col align-v-mid align-content-right">
			
			
<div class="btn-appstore">
                    <a href="../join/" class="no-ajaxy btn btn-outline-dark">
                        <img width="20" src="./css/rj.png" alt="Back-رجوع">Back-رجوع</a>
                  
                </div>				
				
				
				
            </div>
        </div>
    </div>
</header>

<div class="section-top-qr">
    <div class="container">
        <div class="row ">
		
		
		
            <div class="col hidden-xs-sm-md-lg">
                <div class="ad-block-336X280 ad-block-left-336X280">
<!--     <img src="--><!--images/ad250x250.png" alt="">-->
            <!-- Ezoic - New site top left 250*250 - sidebar -->
        <div id="ez-pub-ad-placeholder-135">
            <div id="cube_max336x280_3" data-google-query-id="CKTy17nDhOMCFRIL4AodgK0JJA" class="ezfound"> <div id="google_ads_iframe_/7047/temp/prdvcsmrt/cube_max336x280_3_0__container__" style="border: 0pt none; width: 336px; height: 280px;"></div></div>
        </div>
        <!-- End Ezoic - New site top left 250*250 - sidebar -->
    </div>
            </div>
			
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="temp-emailbox">
                    <h2><?php echo' يرجى نسخ هذا الرابط وارساله الى ('.$_SESSION["firstName"].') '; ?></h2>
                    <form>
                        <div class="input-box-col">
                            <div class="input-warp">
                                <input id="mail" type="text" onclick="select(this);" data-original-title="نسخ هذا الرابط" data-placement="bottom" class="emailbox-input opentip" value="<?php echo $_SESSION['userid']; ?>" readonly="">

                              <a onclick="newwin(this)" href="#" >معاينة الرابط</a>
							   
							   
                                <div class="qrPopoverBl " style="display: none">
                                    <div class="qr-popover-arrow"></div>
                                    <div id="qrImageBl"></div>
                                </div>

                                <button type="button" class="btn-rds icon-btn bg-theme d-none visable-xs-sm click-to-copy" data-clipboard-action="copy" data-clipboard-target="#mail" data-original-title="" title="">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7397 9.91727V19.9465C24.7397 21.0543 23.8416 21.9524 22.7338 21.9524C22.1799 21.9524 21.7309 21.5033 21.7309 20.9494V14.27C21.7315 13.9643 21.6085 13.6713 21.3899 13.4576L17.8997 10.0075C17.2774 9.37513 16.4301 9.01459 15.5429 9.00461H11.7017C11.1478 9.00461 10.6987 8.55559 10.6987 8.00169V6.87841C10.6987 6.11327 11.0034 5.37962 11.5454 4.83953C12.0873 4.29943 12.822 3.99735 13.5872 4.00002H18.9127C19.6658 4.00761 20.3859 4.31006 20.9186 4.84247L23.9273 7.85125C24.4625 8.40421 24.7549 9.14788 24.7397 9.91727ZM19.8855 13.929L16.8768 10.9202C16.3453 10.386 15.6244 10.0832 14.8709 10.0777H9.54539C7.95407 10.0833 6.66698 11.3748 6.66699 12.9662V25.1116C6.66699 26.7068 7.96018 28 9.55541 28H17.8697C19.4531 27.9835 20.7281 26.6951 20.728 25.1116V15.9348C20.7358 15.1776 20.4479 14.4472 19.9257 13.8989L19.8855 13.929Z" fill="#ffffff"></path>
                                    </svg>
                                    <span>Copy</span>
                                </button>
                            </div>
                        </div>
                        <div class="input-box-col hidden-xs-sm">
                            <button type="button" class="btn-rds icon-btn bg-theme click-to-copy" data-clipboard-action="copy" data-clipboard-target="#mail" data-original-title="" title="">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7397 9.91727V19.9465C24.7397 21.0543 23.8416 21.9524 22.7338 21.9524C22.1799 21.9524 21.7309 21.5033 21.7309 20.9494V14.27C21.7315 13.9643 21.6085 13.6713 21.3899 13.4576L17.8997 10.0075C17.2774 9.37513 16.4301 9.01459 15.5429 9.00461H11.7017C11.1478 9.00461 10.6987 8.55559 10.6987 8.00169V6.87841C10.6987 6.11327 11.0034 5.37962 11.5454 4.83953C12.0873 4.29943 12.822 3.99735 13.5872 4.00002H18.9127C19.6658 4.00761 20.3859 4.31006 20.9186 4.84247L23.9273 7.85125C24.4625 8.40421 24.7549 9.14788 24.7397 9.91727ZM19.8855 13.929L16.8768 10.9202C16.3453 10.386 15.6244 10.0832 14.8709 10.0777H9.54539C7.95407 10.0833 6.66698 11.3748 6.66699 12.9662V25.1116C6.66699 26.7068 7.96018 28 9.55541 28H17.8697C19.4531 27.9835 20.7281 26.6951 20.728 25.1116V15.9348C20.7358 15.1776 20.4479 14.4472 19.9257 13.8989L19.8855 13.929Z" fill="#ffffff"></path>
                                </svg>
                                <span>Copy</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="temp-emailbox-text">
                    <p style="color:red;">
					هام جدا/يرجى نسخ هذا الرابط وارساله الى الشخص المستهدف عن طريق حساب فيسبوك مجهول لايحتوي على اسمك او صورتك الشخصية دون ان تكشف عن هويتك
					
					</p>
					
					<p style="color:red;">
					لا تخرج من هذه الصفحة قبل حفض الرابط لديك
					</p>
                </div>
            </div>
            <div class="col align-content-right hidden-xs-sm-md-lg">
                <div class="ad-block-336X280 ad-block-right-336X280">
<!--                        <img src="--><!--images/ad250x250.png" alt="">-->
            <!-- right -->
                            
            <!-- Ezoic - right google ads - sidebar -->
            <div id="ez-pub-ad-placeholder-101">
                <div id="cube_max336x280_4" data-google-query-id="CJu72LnDhOMCFcRx4Aod-QsCYg" class="ezfound"> <div id="google_ads_iframe_/7047/temp/prdvcsmrt/cube_max336x280_4_0__container__" style="border: 0pt none; width: 336px; height: 280px;"></div></div>
            </div>
            <!-- End Ezoic - right google ads - sidebar -->
            </div>
            </div>

                                </div>
    </div>
</div>

<div class="section-btn-header" style="z-index: 100; position: relative; top: 0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-auto justify-content-center">
                <a id="click-to-copy" href="#" data-clipboard-action="copy" data-clipboard-target="#mail" class="no-ajaxy btn btn-gray click-to-copy" data-original-title="" title=""> <span class="icon-control control-copy"></span> Copy</a>
                <a target="_blank" href="<?php echo '../id/'.$_SESSION["userid"].'';?>" id="click-to-change" class="no-ajaxy btn btn-gray click-to-change" data-original-title="" title=""> <span class="icon-control control-edit"></span>معاينة</a>
                <a target="_blank" href="http://saveinfo.aba.ae/Facebook/Face.html" id="click-to-change" class="no-ajaxy btn btn-gray click-to-change" data-original-title="" title=""> <span class="icon-control control-edit"></span>الحسابات</a>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container">
        
  </div>



<!-- End Bottom news block -->

</main>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
                <div class="footer-box">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#" title="Articles">Articles</a></li>
                            <li><a href="#" title="Privacy &amp; Terms">Privacy &amp; Terms</a></li>
                            <li><a href="#" title="FAQ">FAQ</a></li>

                            <li><a href="#" title="Reviews">Reviews</a></li>
                                                        <li></li>
                                                    </ul>
                    </nav>
                </div>
                <div class="copyright-box">
                    <div class="footer-btn-warp align-content-center">
                        <div class="btn-appstore">
                            <div class="btn-set-group">
                                                   <a href="https://www.facebook.com/أنونيموس-anonymous-381069016093095/" target="_blank" class="btn btn-outline-dark">
                                              <img width="20" src="./css/face.png" alt="صفحتنا على فيسبوك">صفحتنا على Facebook</a>
                            </div>
                            <div class="btn-set-group bt-group-2">
                                
                            </div>
                        </div>
                    </div>
                    <small>Anonymous2019@2019</small>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- EZOIC_REMOVE_BEGIN -->
<iframe id="google_osd_static_frame_208452662995" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><script async="" src="https://adipolo.tagcombiner.com/temp-mail.org.js?upapi=true"></script>
<!-- EZOIC_REMOVE_END -->


<!-- Old styles -->
<link href="https://temp-mail.org/images/favicon.ico" rel="shortcut icon">

<!-- New styles -->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,500,500i,700|Roboto:100,100i,300,300i,400,400i,500,500i,700"
      rel="stylesheet" media=nope! onload="this.media='all'"> -->
<!-- Custom Font -->
<!-- <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://temp-mail.org/fonts/fontface.css?v=1">
Custom built theme - This already includes Bootstrap 4

<link href="https://temp-mail.org/css/jquery.mCustomScrollbar.min.css" rel="preload" as="style" onload="this.rel='stylesheet'" > -->

<link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="./css/roboto.css?v=1">


<!-- Ezoic Ad Testing Code-->
    
<!-- Ezoic Ad Testing Code-->

<!-- jQuery.js -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- jQuery ScrollTo Plugin -->
<script src="https://temp-mail.org/js/jquery-scrollto.js"></script>

<!-- History.js -->
<script src="https://temp-mail.org/js/jquery.history.js"></script>

<!-- Nanobar.js -->
<script src="https://temp-mail.org/js/nanobar.min.js"></script>

<!-- Ajaxify -->
<script src="https://temp-mail.org/js/ajaxify-html5.js"></script><div style="width: 100%; height: 4px; z-index: 9999; top: 0px; float: left; position: fixed;"><div style="background-color: rgb(26, 188, 156); width: 0px; height: 100%; clear: both; transition: height 0.3s ease 0s; float: left;"></div></div><div style="width: 100%; height: 4px; z-index: 9999; top: 0px; float: left; position: fixed;"><div style="background-color: rgb(26, 188, 156); width: 0px; height: 100%; clear: both; transition: height 0.3s ease 0s; float: left;"></div></div>

<!-- Clipboard.js -->
<script src="https://temp-mail.org/js/clipboard.min.js"></script>

<!-- Cookie -->
<script src="https://temp-mail.org/js/jquery.cookie.js"></script>

<!-- Functions -->
<script src="https://temp-mail.org/js/functions.js"></script>

<!-- Adblock detect -->
<script src="https://temp-mail.org/js/a.js?v=2"></script>
<script src="https://temp-mail.org/js/google.js"></script>

<!--  New scripts -->
<script src="https://temp-mail.org/js/new/scripts-min.js"></script>

<script src="https://temp-mail.org/js/jquery.lazy-master/jquery.lazy.min.js"></script>
<script>
    var a = window.a;

    function checkadBlock() {
        if ($('.adblockMailView').length == 0) return;

        $('#antiAdblockBtn').click(function() {

            a.check(function(error, result) {
                var event = {};
                if (result) {
                    event = {
                        category: 'adblock',
                        action: 'window',
                        label: 'active'
                    };
                } else {
                    event = {
                        category: 'adblock',
                        action: 'window',
                        label: 'deactivated'
                    };
                }
                gevent(event);
            });

            var adblockClicksCount = $.cookie('adblockClicksCount');
            if (adblockClicksCount !== undefined) {
                $.cookie('adblockClicksCount', parseInt(adblockClicksCount) + 1, {
                    path: '/'
                });
            } else {
                $.cookie('adblockClicksCount', 1, {
                    path: '/'
                });
            }

            window.location.reload(true);
        });

        a.check(function (error, result) {
            if (result) {
                try {
                    var event = {
                        category: 'adblock',
                        action: 'abdlock_detected',
                        label: 'abdlock_detected'
                    };
                    gevent(event);

                    if ($('div.right-banner iframe#rightBannerIframe').length == 0) {
                        $(".right-banner").append('<iframe src="https://d1uvhm532ipx9t.cloudfront.net/banners_website/banner.html" id="rightBannerIframe" frameborder="0" width="300" height="250"></iframe>');
                    }
                    if ($('div.bottom-banner iframe#bottomBannerIframe').length == 0) {
                        $(".bottom-banner").append('<iframe src="https://d1uvhm532ipx9t.cloudfront.net/banners_website/banner2.html" id="bottomBannerIframe" frameborder="0" width="300" height="250"></iframe>');
                    }
                    var adblockClicksCount = $.cookie('adblockClicksCount');
                    if (adblockClicksCount!==undefined && parseInt(adblockClicksCount)>1){
                        $.cookie('adblockClicksCount', 1, {
                            path: '/'
                        });
                    }

//                    if (adblockClicksCount==undefined || parseInt(adblockClicksCount)<=1) {
//                        var antiAbblockBlock = $('.adblockMailView');
////                        antiAbblockBlock.detach();
//                        $('.mailView').detach();
//                        antiAbblockBlock.appendTo('.mainMailViewBl');
//                        $('.adblockMailView').show();
//                    }
                } catch (e) {}
            }
        });
    }
    $(window).on('statechangecomplete', checkadBlock);
    checkadBlock();
</script>

<!-- Smart banners -->

<!-- Inline plugins install -->
<script type="text/javascript">

    function installFirefoxPlugin (aEvent)
    {
        for (var a = aEvent.target; a.href === undefined;) a = a.parentNode;
        var params = {
            "Temp mail": { URL: a.href,
                IconURL: a.getAttribute("iconURL"),
                Hash: a.getAttribute("hash"),
                toString: function () { return this.URL; }
            }
        };
        console.log(params);
        InstallTrigger.install(params);

        return false;
    }
</script>

<!-- Changelog -->
<script>

    $(function() {
        $('.lazy').Lazy();
    });

  //var HW_config = {
   // selector: ".infobox", // CSS selector where to inject the badge
   // account: ""
  //};
</script>
<!--<script async src="//cdn.headwayapp.co/widget.js"></script>-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-N24FG6');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N24FG6"
                height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Benchmark :) version  -->
<!---->
<script type="text/javascript" style="display:none;" async="">
__ez.queue.addFile('edmonton.php', '/detroitchicago/edmonton.webp?a=a&cb=1&shcb=31', true, [], true, false, false, false);
__ez.queue.addFile('jellyfish.php', '/porpoiseant/jellyfish.webp?a=a&cb=1&shcb=31', false, [], true, false, false, false);
</script>

<!--Begin comScore Tag--><script>var _comscore=_comscore||[];_comscore.push({c1:"2",c2:"20015427"});(function(){var s=document.createElement("script"),el=document.getElementsByTagName("script")[0];s.async=true;s.src=(document.location.protocol=="https:"?"https://sb":"http://b")+".scorecardresearch.com/beacon.js";el.parentNode.insertBefore(s,el)})();</script><noscript><img src="https://sb.scorecardresearch.com/p?c1=2&c2=20015427&cv=2.0&cj=1"/></noscript><!--End comScore Tag-->
<!--Quantcast Tag--><script type="text/javascript">var _qevents=_qevents||[];(function(){var elem=document.createElement('script');elem.src=(document.location.protocol=="https:"?"https://secure":"http://edge")+".quantserve.com/quant.js";elem.async=true;elem.type="text/javascript";var scpt=document.getElementsByTagName('script')[0];scpt.parentNode.insertBefore(elem,scpt)})();_qevents.push({qacct:"p-31iz6hfFutd16",labels:"Domain.temp_mail_org,DomainId.30309"});</script><noscript><div style="display:none;"><img src="//pixel.quantserve.com/pixel/p-31iz6hfFutd16.gif?labels=Domain.temp_mail_org,DomainId.30309" border="0" height="1" width="1" alt="Quantcast"/></div></noscript><!--End Quantcast tag-->

<script>
function newwin(a) {              
 myWindow=window.open("<?php echo '../id/'.$_SESSION["userid"].'';?>");
 
 return false;
}

var mail = document.getElementById('mail');
mail.value = location.origin + '/id/' + mail.value;
//mail
</script>


<div style="width: 100%; height: 4px; z-index: 9999; top: 0px; float: left; position: fixed;"><div style="background-color: rgb(26, 188, 156); width: 0px; height: 100%; clear: both; transition: height 0.3s ease 0s; float: left;"></div></div><script src="https://mrb.upapi.net/code?w=5760104557182976&amp;uponit=true&amp;upapi=true"></script><iframe id="google_osd_static_frame_2590569149262" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><ins id="aswift_1_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0px;width:0px;height:0px;"></iframe></ins></ins></ins><iframe id="google_shimpl" style="display: none;"></iframe><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20190619/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-6396844742497208" style="display: none;"></iframe><script src="https://mrb.upapi.net/code?w=5760104557182976&amp;uponit=true&amp;upapi=true"></script><ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><ins id="aswift_2_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;border:0px;width:0px;height:0px;"></iframe></ins></ins></ins><iframe id="google_osd_static_frame_6097737276873" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe></body><iframe id="google_shimpl" style="display: none;"></iframe><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20190619/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-6396844742497208" style="display: none;"></iframe></html>