<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>XSSASSINATE | XSS Weaponization Tool | Precisely</title>
   <link href="/styles/main.css" rel="stylesheet" />
   <script src="/scripts/prism.js"></script>
 </head>
 
<?php
$HijackCookies = file_get_contents("/payloads/hijackCookies.js");
$SpearPhish = file_get_contents("/payloads/spearPhish.js");
$BrowserFingerprint = file_get_contents("/payloads/fingerprint.js");
$InfoStealer = file_get_contents("/payloads/infoStealer.js");
$CookieOverflow = file_get_contents("/payloads/cookieOverflow.js");
$CookieBomb = file_get_contents("/payloads/cookieBomb.js");
$PageGrab = file_get_contents("/payloads/pageGrab.js");
$PageSnapshot = file_get_contents("/payloads/pageSnapshot.js");
$PopupBlock = file_get_contents("/payloads/popupBlock.js");
$HasVisited = file_get_contents("/payloads/hasVisited.js");
$LocalFileSteal = file_get_contents("/payloads/LocalFileSteal.js");
$XSShell = file_get_contents("/payloads/xsshell.js");
$KeyLogger = file_get_contents("/payloads/keylogger.js");
$jQueryKeylogger = file_get_contents("/payloads/jQueryKeylogger.js");
$SessionAwareKeylogger = file_get_contents("/payloads/sessionAwareKeylogger.js");
$CamPic = file_get_contents("/payloads/camPic.js");
$CSRFrame = file_get_contents("/payloads/csrframe.js");
$FakeLoginUIRedress = file_get_contents("/payloads/fakeLoginUIRedress.js");
$DOMSanitizer = file_get_contents("/payloads/DOMSanitizer.js");
$OneLineDataGrab = file_get_contents("/payloads/oneLineDataGrab,js");
$WPRCE = file_get_contents("/payloads/WPRCE.js");
$WPNewPost = file_get_contents("/payloads/WPNewPost.js");
$WPNewPage = file_get_contents("/payloads/WPNewPage.js");
$WPAdmin = file_get_contents("/payloads/WPAdmin.js");
$JoomlaRCE = file_get_contents("/payloads/joomlaRCE.js");
$DrupalRCE = file_get_contents("/payloads/drupalRCE.js");
$MyBBRCE = file_get_contents("/payloads/mybbRCE.js");
$BypassSOP = file_get_contents("/payloads/bypassSOP.js");
$WebRTCLeak = file_get_contents("/payloads/WebRTCLeak.js");
$IPLeak = file_get_contents("/payloads/IPLeak.js");
$ForceDownload = file_get_contents("/payloads/ForceDownload.js");
$PortScan = file_get_contents("/payloads/PortScan.js");
$XSSDoS = file_get_contents("/payloads/xssDoS.js");
$DotNetExec = file_get_contents("/payloads/DotNetExec.js");
$CacheCorrupt = file_get_contents("/payloads/CacheCorrupt.js");
$FormRedirect = file_get_contents("/payloads/FormRedirect.js");
$FormPost = file_get_contents("/payloads/FormPost.js");
$LSLeak = file_get_contents("/payloads/localStorageLeak.js");
$RmHistory = file_get_contents("/payloads/removeBrowserHistory.js");
$ChromeSpoof = file_get_contents("/payloads/chromeSpoof.js");
$EdgeSpoof = file_get_contents("/payloads/edgeSpoof.js");
$PassIntercept = file_get_contents("/payloads/passIntercept.js");
$HSTS = file_get_contents("/payloads/bypassHSTS.js");
$xform = file_get_contents("/payloads/xform.js");
$EventCapture = file_get_contents("/payloads/eventCapture.js");
$XHRCapture = file_get_contents("/payloads/XHRCapture.js");
$TwitC2 = file_get_contents("/payloads/TwitC2.js");
$WebWorker = file_get_contents("/payloads/HTML5InlineWebWorker.js");
$VibrateAPI = file_get_contents("/payloads/HTML5VibrateAPIAbuse.js");
$Geolocate = file_get_contents("/payloads/geolocation.js");
$LANScan = file_get_contents("/payloads/localNetworkScanner.js");
$RedirTricks = file_get_contents("/payloads/redirectionTricks.js");
$Office = file_get_contents("/payloads/getOfficeVersion.js");
$ApacheHttpOnly = file_get_contents("/payloads/httponlyBypass.js");
$FormJack = file_get_contents("/payloads/formHijacker.js");
$FormSubmit = file_get_contents("/payloads/formSubmitter.js");
$BEEF = file_get_contents("/payloads/beefHookIntegration.js");
$UNCHash = file_get_contents("/payloads/UNCHashStealer.js");
$StagedXSS = file_get_contents("/payloads/StagedXSSExploitation.js");
$XFOBypass = file_get_contents("/payloads/bypassXFrame.js");
?>

  <div id="logout">
  <a href="logout.php">Log Out</a>
  </div>
  
 <body>
  <hr><center><img src="XSSASSINATE.png" width="20%" height="20%" alt="xssassinate" /></center><hr>
 
 <form action="#">
      <label for="payload"><p><u><b>Payload Type:</b></u></p></label>
      <select name="payloads" id="payload">
        <option value="HijackCookies">Hijack Session Cookies</option>
        <option value="SpearPhish">Create Spear Phishing Page</option>
        <option value="BrowserFingerprint">Extensive Browser Fingerprinting</option>
        <option value="InfoStealer">JS Info Stealer</option>
        <option value="CookieOverflow">Cookie Jar Overflow</option>
        <option value="CookieBomb">Cookie Bomb Generator</option>
        <option value="PageGrab">Grab HTML Page Contents</option>
        <option value="PageSnapshot">Grab Snapshot of page</option>
		<option value="PopupBlock">Detect Popup Blocker</option>
		<option value="HasVisited">Grab Visited Domains</option>
		<option value="LocalFileSteal">Steal Local Files</option>
		<option value="XSShell">XSS-Based Backdoor</option>
		<option value="Keylogger">Log Keystrokes</option>
		<option value="jQueryKeylogger">jQuery-based keylogging</option>
		<option value="SessionAwareKeylogger">"session-aware" keylogging</option>
		<option value="CamPic">Take photo via webcam</option>
		<option value="CSRFrame">Bypass CSRF Token via injected iframe</option>
		<option value="FakeLoginUIRedress">Generate fake login via UI redressing</option>
		<option value="DOMSanitizer">AngularJS DomSanitizer Bypass</option>
		<option value="OneLineDataGrab">one-liner Data Grabber</option>
		<option value="WPRCE">WordPress XSS->RCE</option>
		<option value="WPNewPost">WordPress Create New Post</option>
		<option value="WPNewPage">WordPress Create New Page</option>
		<option value="WPAdmin">WordPress Create Admin User</option>
		<option value="JoomlaRCE">Joomla XSS->RCE</option>
		<option value="JoomlaAdmin">Joomla Create Admin User</option>
		<option value="DrupalRCE">Drupal XSS->RCE</option>
		<option value="DrupalAdmin">Drupal Create Admin User</option>
		<option value="MyBBRCE">MyBB XSS->RCE</option>
		<option value="MyBBAdmin">MyBB Create Admin User</option>
		<option value="BypassSOP">Bypass SOP</option>
		<option value="WebRTCLeak">WebRTC Browser-based IP leak</option>
		<option value="IPleak">Alternative IP leak methods</option>
		<option value="ForceDownload">Forced Download</option>
		<option value="PortScan">Scan Ports Locally</option>
		<option value="XSSDoS">Launch (D)DoS attacks via XSS</option>
		<option value="DotNetExec">.NET Shell Execution</option>
		<option value="CacheCorrupt">Webapp Cache Corruption</option>
		<option value="FormRedirect">Form Redirect</option>
		<option value="FormPost">Post Form</option>
		<option value="LSLeak">Local Storage Leak</option>
		<option value="RmHistory">Remove Browser History</option>
		<option value="ChromeSpoof">Chrome Address Bar Spoof</option>
		<option value="EdgeSpoof">MS Edge Address Bar Spoof</option>
		<option value="PassIntercept">Intercept Passwords</option>
		<option value="HSTS">HSTS Bypass</option>
		<option value="xform">jQuery xform (attribute override)</option>
		<option value="EventCapture">Capture Events</option>
		<option value="XHRCapture">Capture XHR</option>
		<option value="TwitC2">Twitter-based C2</option>
		<option value="HTMLWebWork">HTML5 Inline Web Worker</option>
		<option value="Vibrate">HTML5 Vibrate API Abuse</option>
		<option value="geolocate">Geolocation</option>
		<option value="LANScan">Local Network Scanner</option>
		<option value="RedirTricks">Redirection Tricks</option>
		<option value="Office">Determine MS Office version</option>
		<option value="ApacheHttpOnly">Apache HttpOnly Bypass</option>
		<option value="FormJack">Form Hijacker</option>
		<option value="FormSubmit">Form Submitter</option>
		<option value="BEEF">BEEF Hook Integration</option>
		<option value="UNCHash">UNC Hash Stealer</option>
		<option value="StagedXSS">Staged XSS Exploitation</option>
		<option value="XFOBypass">Clickjacking X-Frame-Options Bypass</option>
      </select>
	  &nbsp;
   <br />
  <input type="checkbox" id="obfuscate" name="obfuscate" value="Bike">
  <label for="obfuscate">Obfuscate Payload</label><br>
  <input type="checkbox" id="urlencode" name="urlencode" value="Car">
  <label for="urlencode">Encode Generated URL</label><br>
  <input type="checkbox" id="filters" name="filters" value="Boat">
  <label for="filters">Attempt Filter Evasion</label>
   <br />
   <input type="submit" value="Submit" />
 </form>

<?php

error_reporting(0);

if (isset($_GET['payloads'])) {
	$payloadz = $_GET['payloads'];
	switch ($payloadz) {
	case "HijackCookies":
	  $payload_output = $HijackCookies;
      break;
    case "SpearPhish":
      $payload_output = $SpearPhish;
      break;
    case "BrowserFingerprint":
      $payload_output = $BrowserFingerprint;
      break;
    case "InfoStealer":
      $payload_output = $InfoStealer;
      break;
    case "CookieOverflow":
      $payload_output = $CookieOverflow;
      break;
    case "CookieBomb":
      $payload_output = $CookieBomb;
      break;
    case "PageGrab":
      $payload_output = $PageGrab;
      break;
    case "PageSnapshot":
      $payload_output = $PageSnapshot;
      break;
    case "PopupBlock":
      $payload_output = $PopupBlock;
      break;
	case "HasVisited":
	  $payload_output = $HasVisited;
      break;
    case "LocalFileSteal":
      $payload_output = $LocalFileSteal;
      break;
    case "XSShell":
      $payload_output = $XSShell;
      break;
    case "keylogger":
      $payload_output = $KeyLogger;
      break;
    case "jQueryKeylogger":
      $payload_output = $jQueryKeylogger;
      break;
    case "SessionAwareKeylogger":
      $payload_output = $SessionAwareKeylogger;
      break;
    case "CamPic":
      $payload_output = $CamPic;
      break;
    case "CSRFrame":
      $payload_output = $CSRFrame;
      break;
    case "FakeLoginUIRedress":
      $payload_output = $FakeLoginUIRedress;
      break;
	case "DOMSanitizer":
      $payload_output = $DOMSanitizer;
      break;
	case "OneLineDataGrab":
      $payload_output = $OneLineDataGrab;
      break; 
	case "WPRCE":
      $payload_output = $WPRCE;
      break; 
  default:
    $error = "<p><b>ERROR:</b> You did not input a valid payload ID!</p>";
	}
}
?>
<br />
<br />

 <form action="#"> 
    <p><u>Input any blacklisted keywords into the form below* :</u></p>
    <textarea name="keywords" cols="40" rows="2"></textarea>
    <p><u>Input any blacklisted characters into the form below* :</u></p>
    <textarea name="chars" cols="40" rows="2"></textarea>
    <br /><i>* Note that the above inputs must be separated by commas</i><br />
    <input type="submit" value="Submit" /><br /><br />
 </form>
 
<!-- PHP TO GO HERE w/ scandir() -->

 <form action="#">
    <p><u>Attempt bypasses using custom wordlist:</u></p>
    <textarea name="payloadURL" cols="40" rows="2">PATH TO WORDLIST HERE</textarea>
    <br />
    <input type="submit" value="Submit" />
 </form>

 <form action="#">
  <center>
    <br />
	
     <div id="outputz">
     <p><label for="jscode"><u>Source Output:</u></label></p>
	  <pre class="line-numbers">
      <code class="language-javascript">
	  
		<?php echo $payload_output; ?>
		
      </code>
	  </pre>
    <br />
	
    <p><label for="jscode"><u>Generated URL for JavaScript payload:</u></label></p>
    <textarea id="jscode" name="jscode" rows="1" cols="35">input to go here</textarea>
      </div>	  
  </center>
 </form> 
 
 </body>
</html>
