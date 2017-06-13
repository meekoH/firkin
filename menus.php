<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>Firkin Pubs | Menus</title>
        <meta name="title" content="Firkin Pubs | Menus" />
        <meta name="description" content="" />
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/header.html'); ?>
            <?php require_once('components/slider.php'); ?>
    		<div class="content-wrapper with-banner" id="brunch">
                <div class="content">
                    <h2 class="blue-heading" style="line-height:inherit;position:relative;">Our Firkin Menu</h2>

                    <div id="menu-widget-c35ec77479d923d8ad8f25146ef62876"></div>

                    <div class="clear" style="height:15px;"></div>

                    <div class="main-container">
                        <p style="margin:0 0 15px;font-style:italic;font-weight:700;">The average adult requires approximately 2,000 to 2,400 calories per day; however, individual calorie needs may vary.</p>

                        <div class="firkin-btn">
                            <a href="https://images.unoapp.com/boxdata/asset67959/images/Firkin_Main_Menu_A.pdf" target="_blank">
                                Download our Menu
                            </a>
                        </div><!--
                        --><div class="firkin-btn">
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
        $('#menusBtn').addClass('selected');
        $('#resMenusBtn').addClass('selected');
        unoapp_widget({"id":"c35ec77479d923d8ad8f25146ef62876","selector":"#menu-widget-c35ec77479d923d8ad8f25146ef62876","plugins":["menu"]});
    </script>
</html>