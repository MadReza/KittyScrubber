<?php include_once("header.php"); ?>

<div id="banner">

	<div id="jssor_1">

        <div data-u="slides" class="img_slider">
            <div data-p="112.50">
                <img data-u="image" src="img/fairytail_cover.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/fairytail_cover.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/fairytail_cover.jpg" />
            </div>
        </div>
    </div>
</div>

<section class="sub_nav">
	<ul>
		<a href=""><li>Sub 1</li></a>
		<a href=""><li>Sub 2</li></a>
		<a href=""><li>Sub 3</li></a>
		<a href=""><li>Sub 4</li></a>
		<a href=""><li>Sub 5</li></a>
		<a href=""><li>Sub 6</li></a>
		<a href=""><li>Sub 7</li></a>
	</ul>
</section>

<section class="browse">

	<div class="genre">
		<div class="genre_header">
			<h3>title</h3>
			<a href="">read more</a>
		</div>
		<?php include("slider.php"); ?>
	</div>

</section>

<?php include_once("footer.php"); ?>