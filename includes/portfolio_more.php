<?php 

$config = include($_SERVER['DOCUMENT_ROOT'] . '/php/configuration/portfolio.php');
$id = preg_replace('/_more/','',$_REQUEST['id']);
$item = $config[$id];

$gitUser = isset($item['gitUser']) ? $item['gitUser'] : 'palacealex'; 

?>

<article id="<?php echo $id; ?>" class="item">
	<header>
		<a class='close-link blue'>X</a>
		<h3><?php echo $item['name']; ?></h3>
	</header>

	<div class="img"><img src="/media/images/portfolio/<?php echo $item['image']; ?>"></div>

	<section class="git">
		<iframe src="http://ghbtns.com/github-btn.html?user=<?php echo $gitUser; ?>&repo=<?php echo $item['gitRepo']; ?>&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
		<iframe src="http://ghbtns.com/github-btn.html?user=<?php echo $gitUser; ?>&repo=<?php echo $item['gitRepo']; ?>&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="95" height="20"></iframe>
  	</section>

	<p><?php echo $item['content']; ?></p>

	<section class="links">
		<a class="blue" href="<?php echo $item['uri']; ?>" target="_blank">View Project</a>
	</section>

</article>