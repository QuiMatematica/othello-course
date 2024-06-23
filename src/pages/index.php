<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php
        if ($_SERVER['HTTP_HOST'] == 'othello.quimatematica.it') {
            include 'google-tag.php';
        }
    ?>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Othello: corso interattivo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"enableFadp":true,"enableLgpd":true,"enableUspr":true,"fadpApplies":true,"floatingPreferencesButtonDisplay":"bottom-right","perPurposeConsent":true,"preferenceCookie":{"expireAfter":180},"siteId":3661950,"usprApplies":true,"whitelabel":false,"cookiePolicyId":42856203,"lang":"it", "banner":{ "acceptButtonDisplay":true,"closeButtonDisplay":false,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"position":"float-top-center","rejectButtonDisplay":true,"showTitle":false,"showTotalNumberOfProviders":true }};
    </script>
    <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3661950.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
		<div class="container-xxl">
			<a class="navbar-brand h1" href="/">Othello: corso interattivo</a>
		</div>
	</nav>

	<div id="othello-content" class="container-xxl">
		<div class="row">
			<div class="col-lg-2 bg-primary-subtle text-center">
				<a class="" href="https://www.fngo.it">
					<img class="mt-3" src="images/fngologo.gif" width="126" height="123" alt="Federazione Nazionale Gioco Othello">
				</a>
				<h5>Federazione Nazionale Gioco Othello</h5>
				<a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="presentazione-del-corso.php">Presentazione del corso</a>
			</div>
			<div class="col-lg-10 py-3 px-5">
				<div id="index-content" class="row">
                    <!-- REPLACE WITH INDEX -->
                </div>
            </div>
		</div>
	</div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="https://www.iubenda.com/privacy-policy/42856203" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
            </div>
            <div class="col-auto">
                <a href="https://www.iubenda.com/privacy-policy/42856203/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
            </div>
        </div>
    </div>

</body>
</html>
