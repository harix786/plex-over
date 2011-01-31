<div id="content" class="fit">
	
	<?= $views->top_nav ?>
	
	<div class="details">
		<div id="details-main">
			<div id="details-cover" class="left">
			 <?= cover($this->thumb->get($this->plex_url.thumb($item))) ?>
			 </div>
			<div id="details-text" class="left">
				<h1 class="txt-shadow ">
					<?=$item->title2?>
					<small><?= pluralize(childs_count($item->size), lang('album')) ?></small>
				</h1>
				<div class="summary"><?= nl2br(@$item->summary) ?></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	<div id="details-sub" class="left">
	<?php foreach ($item->content as $album): if (@$album->ratingKey): ?>
			<div class="left jacket">
				<a href="<?=site_url($links->item.'/'.$album->ratingKey.$artist_link)?>" />
			  	<?= cover(array(
			  		'src'				=> $this->thumb->get($this->plex_url.$album->thumb),
			  		'size'			=> 130,
			  		'fallback'	=> $this->plex_url.$item->art
			  	)) ?>
			  	<h4 class="h4">
			  		<?= character_limiter($album->title, 15)?>
			  	</h4>
			  	<span><?=$album->year?> : <?=pluralize($album->leafCount, lang('track'))?></span>
			  </a>
			</div>
	<?php endif; endforeach ?>
	</div>
	
	<div id="content-bottom" class="dark-gradient"></div>
<div style="display:none"><div id="sum-hide"></div></div>

</div>