<?php $gitUser = isset($item['gitUser']) ? $item['gitUser'] : 'palacealex'; ?>

<article id="<?php echo $id; ?>" class="item">
	<header>
		<h3><?php echo $item['name']; ?></h3>
	</header>

	<div class="img"><img src="/media/images/portfolio/<?php echo $item['image']; ?>"></div>

	<p><?php echo $item['abstract']; ?></p>

	<section class="links">
		<a id="<?php echo $id . '_more';?>" class="more blue">See More</a>
		<a href="<?php echo $item['uri']; ?>" class="blue" target="_blank">View Project</a>
	</section>
</article>