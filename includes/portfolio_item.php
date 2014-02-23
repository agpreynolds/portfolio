<?php $gitUser = isset($item['gitUser']) ? $item['gitUser'] : 'palacealex'; ?>

<article id="<?php echo $item['id']; ?>">
	<header>
		<h3><?php echo $item['name']; ?></h3>
	</header>

	<div class="img"><img src="/media/images/portfolio/<?php echo $item['image']; ?>"></div>

	<p><?php echo $item['abstract']; ?></p>

	<a class="more">See More</a>
	<a href="<?php echo $item['uri']; ?>" target="_blank">View Project</a>

	<iframe src="http://ghbtns.com/github-btn.html?user=<?php echo $gitUser; ?>&repo=<?php echo $item['gitRepo']; ?>&type=watch&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="62" height="20"></iframe>
	<iframe src="http://ghbtns.com/github-btn.html?user=<?php echo $gitUser; ?>&repo=<?php echo $item['gitRepo']; ?>&type=fork&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="62" height="20"></iframe>
</article>