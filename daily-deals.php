<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>Firkin Pubs | Best Drink Specials | Best Happy Hour | Firkin Pubs</title>
        <meta name="title" content="Firkin Pubs | Best Drink Specials | Best Happy Hour | Firkin Pubs" />
        <meta name="description" content="Our new Bevvy &amp; Bites menu contains uneatable specials for every day of the week! find a location near you on our Firkin Map" />
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/header.html'); ?>
            <?php require_once('components/slider.php'); ?>
    		<div class="content-wrapper with-banner" id="dailyDeals">
                <div class="content">
                    <h1 class="blue-heading"><span>Firkin</span> Daily Deals</h1>

                    <p>At Firkin Group of Pubs, we combine our tastiest dishes and brews into daily features that are sure to satisfy both your appetite and your pocket book. For every day of the week, we offer exciting and affordable Bevvy &amp; Bites specials that have made the "happy hour" obsolete. At Firkin, every hour is a happy hour - with daily drink specials that are available from morning 'til night.</p>
                    
                    <div class="available-deals">
                        <div class="deal-section">
                            <h4>Mondays</h4>
                            <img alt="Monday" class="firkin-img-left" src="img/brews-content/monday.png">
                        </div><!--
                        --><div class="deal-section">
                            <h4>Tuesdays</h4>
                            <img alt="Tuesday" class="firkin-img-right" src="img/brews-content/tuesday.png">
                        </div><!--
                        --><div class="deal-section">
                            <h4>Wednesdays</h4>
                            <img alt="Wednesday" class="firkin-img-left" src="img/brews-content/wednesday.png">
                        </div><!--
                        --><div class="deal-section">
                            <h4>Thursdays</h4>
                            <img alt="Thursday" class="firkin-img-right" src="img/brews-content/thursday.png">
                        </div><!--
                        --><div class="deal-section">
                            <h4>Fridays</h4>
                            <img alt="Friday" class="firkin-img-left" src="img/brews-content/friday.png">
                        </div><!--
                        --><div class="deal-section">
                            <h4>Saturdays</h4>
                            <img alt="Saturday" class="firkin-img-right" src="img/brews-content/saturday.png">
                        </div><!--
                        --><div class="deal-section">
                            <h4>Sundays</h4>
                            <img alt="Sunday" class="firkin-img-left" src="img/brews-content/sunday.png">
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <?php require_once('components/footer.html'); ?>
    	</div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#dailyBtn').addClass('selected');
        $('#resDailyBtn').addClass('selected');
    </script>
</html>