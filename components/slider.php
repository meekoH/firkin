		<?php
			date_default_timezone_set("America/New_York");

			function showSlide($startTime, $endTime) {
				$startTimeStamp = strtotime($startTime);
				$endTimeStamp = strtotime($endTime);

				$currentTimeStamp = time();

				if ($currentTimeStamp > $startTimeStamp && $currentTimeStamp < $endTimeStamp) {
					return true;
				} else {
					return false;
				}
			}
		?>
		<div class="slider">
			<ul class="slides">
				<?php if (showSlide('2017-03-30 00:00:00', '2017-05-01 00:00:00')) { ?>
				<li>
					<img src="img/slider/2017/burger-palooza.png" alt="April is Burger Palooza at your local Firkin Pub">
				</li>
				<?php } else { ?>
				<li>
					<img src="img/slider/slider-img12-large.png" alt="Caesar Bar">
				</li>
				<?php } ?>
				<li>
					<img src="img/slider/2017/brunch.png" alt="Brunch - The Most Important Meal of the Day">
				</li>
				<?php if (showSlide('2017-04-05 00:00:00', '2017-07-01 00:00:00')) { ?>
				<li>
					<img src="img/slider/2017/game-day-specials.png" alt="Playoff Game Day Specials">
				</li>
				<?php } else { ?>
				<li>
					<img src="img/slider/2017/Firkin_Menu2017_WebSlider1.jpg" alt="Bevvy and Bites Menu">
				</li>
				<?php } ?>
			</ul>
			<div class="custom-navigation">
				<a href="#" class="flex-prev"><img src="img/left-arrow.png"></a>
				<a href="#" class="flex-next"><img src="img/right-arrow.png"></a>
				<div class="clear"></div>
			</div>
		</div>