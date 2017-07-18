<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR">
    <head>
        <style type="text/css" media="screen">
            #bonjourcosplay *{ margin:0!important; padding:0!important; font-family:Arial,Helvetica; }
            #bonjourcosplay{ width:160px; height:250px; position:relative; border:solid 1px #f8161d; overflow:hidden; }
                #bonjourcosplay #bc-link{ background:#f8161d; position:absolute; bottom:0; right:0;}
                     #bonjourcosplay #bc-link a{ color:#FFF; text-decoration:underline; padding:3px 3px 4px 3px!important; font-size:12px; }
                #bonjourcosplay #bc-date{ line-height:15px; text-align:center; background:#f8161d; position:absolute; top:0; left:10px; color:#FFF; font-size:14px; padding:3px!important;}
                #bonjourcosplay #bc-date span{ display:block; font-size:10px; text-align:center;}
                #bonjourcosplay #bc-visuel img{ position:absolute; top:0; left:0;}
        </style>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript">
        $(function(){
               // On trouve la largeur de l'image'
               var visuel = $('#bc-visuel img');
               var largeur = 160;
               var left = parseInt(visuel.css('left'));
               // Quand on passe dessus/en dehors
               visuel.hover(function(){
                   visuel.stop().animate({left:3*left-largeur},500);
               },function(){
                   visuel.stop().animate({left:left},500);
               });
        });
        </script>
    </head>
    <body>
        <div id="bonjourcosplay">
            <div id="bc-visuel">
                <?php $ratio = $post['width'] / $post['height']; ?>
                <?php if($ratio<(320/250)):  // La largeur doit être adapté ?>
                    <?php echo $html->image('cosplays/'.sprintf($post['imagef'],'_320x0'),array('width'=>320,'height'=>round(320/$ratio))); ?>
                <?php else: ?>
                    <?php echo $html->image('cosplays/'.sprintf($post['imagef'],'_0x250'),array('width'=>round(250*$ratio),'height'=>250,'style'=>'left:-'.round((250*$ratio/2-160)/2).'px')); ?>
                <?php endif; ?>
            </div>
            <div id="bc-date"><?php echo date('d',strtotime($post['date'])); ?><span><?php echo $date->mois[1*date('m',strtotime($post['date']))]; ?></span></div>
            <div id="bc-link"><a href="http://bonjourcosplay.com">Voir tous les cosplay</a></div>
        </div>
    </body>
</html>