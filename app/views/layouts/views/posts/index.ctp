<?php $this->set('title_for_layout',$post['title']); ?>
<div class="post">
    <div class="labels">
        <div class="date"><span class="month"><?php echo date('M',strtotime($post['date'])); ?> <?php echo date('d',strtotime($post['date'])); ?></span> <span class="year"><?php echo date('Y',strtotime($post['date'])); ?></span></div>

	<div id="navigation" style="position: absolute; top: 0pt; right: 0pt;">
               <?php if(isset($next)): ?><a href="<?php echo $html->url($next); ?>">« Cosplay suivant</a><?php endif; ?>
               <?php if(isset($prev)): ?><a href="<?php echo $html->url($prev); ?>">Cosplay précédent »</a><?php endif; ?>
        </div>
    </div>

    <div class="photo">
        <div class="img" style="width:<?php echo floor($post['width']/2); ?>px; height:<?php echo $post['height']; ?>px;">
            <?php echo $html->image('cosplays/'.$post['image']); ?>
        </div>
        <div class="caption"><?php echo $post['description']; ?></div>
    </div>
 </div>