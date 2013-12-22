<h1>Below are the users you are following <?=$user->first_name;?></h1>

<?php foreach($posts as $post): ?>

<article>

	<div>
		<img src='/uploads/<?=$post['post_user_id']?>.jpg' width='50' height='50' />
		<?=$post['first_name']?> <?=$post['last_name']?> posted at:
	</div>


	<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?><br /> 
    </time>

    <p><?=$post['content']?></p>

    
</article>

<?php endforeach; ?>