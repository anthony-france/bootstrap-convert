<div class="tags">
	<?php
		foreach($tags as $tag) {
			echo $this->element('tag', array('tag'=>$tag));
		}
	?>
</div>