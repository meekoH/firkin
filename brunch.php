<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>Firkin Pubs | Brunch</title>
        <meta name="title" content="Firkin Pubs | Brunch" />
        <meta name="description" content="" />
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/header.html'); ?>
            <?php require_once('components/slider.php'); ?>
    		<div class="content-wrapper with-banner" id="brunch">
                <div class="content">
                    <h2 class="blue-heading" style="line-height:inherit;position:relative;">Firkin Brunch
                        <span class="smaller" style="display:block;">The Most Important Meal of the Weekend!</span>
                        <span class="brunch-header">Saturday &amp; Sunday until 3pm</span></h2>

                    <div id="menu-widget-cc152b2934bf04897e3b215a22e1ef33"></div>

                    <div class="clear" style="height:15px;"></div>

                    <div class="main-container">
                        <p style="margin:0 0 15px;font-style:italic;font-weight:700;">The average adult requires approximately 2,000 to 2,400 calories per day; however, individual calorie needs may vary.</p>

                        <div class="firkin-btn">
                            <a href="https://images.unoapp.com/boxdata/asset67959/images/Firkin_Brunch_A.pdf" target="_blank">
                                Download our Brunch Menu
                            </a>
                        </div><!--
                        --><div class="firkin-btn">
                            <a href="https://images.unoapp.com/boxdata/asset67959/images/Nutritional_Guide_2017.pdf" target="_blank">
                                Nutritional Information
                            </a>
                        </div>
                    </div>
                </div>
            <?php require_once('components/footer.html'); ?>
    	</div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#brunchBtn').addClass('selected');
        $('#resBrunchBtn').addClass('selected');
        unoapp_widget({"id":"cc152b2934bf04897e3b215a22e1ef33","selector":"#menu-widget-cc152b2934bf04897e3b215a22e1ef33","plugins":["menu"]});
    </script>
</html>