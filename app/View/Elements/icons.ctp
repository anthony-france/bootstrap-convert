<?php //echo $this->element('icons', array('tagOptionIcon' => $tagOptionIcon)); ?> 	

	<div>
			<?php 
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon( $tagOptionIcon['TagOptionIcon']['name'], "white" ) . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "important"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
					
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon($tagOptionIcon['TagOptionIcon']['name'], "black") . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "important"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
			?>	</div><div>		<?php 
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon( $tagOptionIcon['TagOptionIcon']['name'], "white" ) . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "warning"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
					
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon($tagOptionIcon['TagOptionIcon']['name'], "black") . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "warning"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
			?>	</div><div>		<?php 
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon( $tagOptionIcon['TagOptionIcon']['name'], "white" ) . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "success"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
					
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon($tagOptionIcon['TagOptionIcon']['name'], "black") . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "success"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
			?>	</div><div>		<?php 
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon( $tagOptionIcon['TagOptionIcon']['name'], "white" ) . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "default"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
					
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon($tagOptionIcon['TagOptionIcon']['name'], "black") . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "default"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
			?>	</div><div>		<?php 
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon( $tagOptionIcon['TagOptionIcon']['name'], "white" ) . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "inverse"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
					
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon($tagOptionIcon['TagOptionIcon']['name'], "black") . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "inverse"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
			?> </div><div>
			<?php 
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon( $tagOptionIcon['TagOptionIcon']['name'], "white" ) . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "info"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
					
				echo $this->Html->link( $this->TwitterBootstrap->label( $this->TwitterBootstrap->icon($tagOptionIcon['TagOptionIcon']['name'], "black") . ' ' . $tagOptionIcon['TagOptionIcon']['name'], "info"), 
					array('action' => 'view', $tagOptionIcon['TagOptionIcon']['id']),
					array('escape'=>false)
				); 
			?>		
			</div>
			
			