<!DOCTYPE HTML>

<html lang="it">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Othello: corso interattivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
			<a class="navbar-brand h1" href="#">Othello: corso interattivo</a>
		</div>
	</nav>

	<div id="othello-content" class="container-xxl">
		<div class="row">
			<div class="col-lg-2 bg-primary-subtle text-center">
				<a class="" href="http://www.fngo.it">
					<img class="mt-3" src="images/fngologo.gif" width="126" height="123" alt="Federazione Nazionale Gioco Othello">
				</a>
				<h5>Federazione Nazionale Gioco Othello</h5>
				<a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="presentazione-del-corso.html">Presentazione del corso</a>
			</div>
			<div class="col-lg-10 py-3 px-5">
				<div id="index-content" class="row">

                    <?php
                    $file = file_get_contents('index.json');
                    $json = json_decode($file, true);

                    foreach ($json['sections'] as $section) {
                        $section_href = $section['href'];
                        $title = $section['title'];
                        $a_class = "class='link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover'";
                        echo "<h1><a {$a_class} href='{$section_href}section.php'>{$title}</a></h1>";

                        foreach ($section['chapters'] as $chapter) {
                            $chapter_href = $chapter['href'];
                            $title = $chapter['title'];

                            echo "<div class='col-lg-3 py-3'>";
                            echo "<ul class='nav flex-column'>";
                            echo "<li class='nav-item'>";
                            echo "<h4>";
                            echo "<a {$a_class} href='{$section_href}{$chapter_href}chapter.php'>{$title}</a>";
                            echo "</h4>";
                            echo "<ul>";

                            foreach ($chapter['pages'] as $page) {
                                $page_href = $page['href'];
                                $title = $page['title'];
                                echo "<li class='nav-item'>";
                                echo "<a {$a_class} href='{$section_href}{$chapter_href}{$page_href}'>{$title}</a>";
                                echo "</li>";
                            }

                            echo "</ul>";
                            echo "</li>";
                            echo "</ul>";
                            echo "</div>";
                        }

                        echo "<hr>";
                    }
                    ?>
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
