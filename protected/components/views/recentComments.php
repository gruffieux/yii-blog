<?php
$recentComments = Comment::model()->findRecentComments(10);
?>
<ul>
	<?php foreach ($recentComments as $comment): ?>
		<li><a href="<?php echo $comment->getUrl(); ?>"><?php echo $comment->author; ?> a écrit le <?php echo date('d.m.Y', $comment->create_time); ?></a></li>
	<?php endforeach; ?>
</ul>