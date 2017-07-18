<?php extract($this->requestAction(array('controller'=>'administration','action'=>'getPlanned'))); ?>
<div class="ical">
               <?php $years = $date->getMonthsArray(3); ?>
               <?php foreach($years as $year=>$months): ?>
                  <?php foreach($months as $month=>$days): ?>
		<table cellspacing="0">
			<thead>
                                 <tr class="cal-navi">
                                    <td><a href="#" class="prev">&lt;&lt;</a></td>
                                    <td colspan="5">
                                       <?php echo $date->mois[$month-1]." ".$year; ?>
                                    </td>
                                    <td><a href="#" class="next">&gt;&gt;</a></td>
                                </tr>
				<tr>
				<th>Lun</th><th>Mar</th><th>Mer</th>
				<th>Jeu</th><th>Ven</th><th>Sam</th>
				<th>Dim</th>
				</tr>
			</thead>
			<tbody>
                              <tr>
                              <?php
                              foreach($days as $day=>$dayOfWeek):
                              $isToday = (date("d") == $day && date("m")==$month && date("Y")==$year );
                              ?>
                                <?php if($day==1): ?>
					<?php if($dayOfWeek!=1){ ?>
                                          <td class="padding" colspan="<?php echo $dayOfWeek-1; ?>"></td>
                                        <?php } ?>
                                <?php endif; ?>
                                       <?php if(isset($planned["$year-$month-$day"])): $post = $planned["$year-$month-$day"]; ?>

                                       <td class="date_has_event <?php if($isToday) echo "today"; ?>">
                                          <?php echo $day; ?>
                                          <div class="events">
                                             <ul>
                                                <li>
                                                <a href="<?php echo $html->url(array('controller'=>'posts','action'=>'edit',$post['id'])); ?>">
                                                    <?php echo $html->webroot('/img/cosplays/'.sprintf($post['imagef'],'_0x140')); ?>
                                                </a>
                                                </li>
                                             </ul>
                                          </div>

                                          <?php else: ?>
                                           
                                            <td<?php if($isToday) echo " class=\"today\""; ?>>
                                            <?php echo $day; ?>

                                          <?php endif; ?>
                                       </td>
                                <?php if($dayOfWeek==7): ?>
                                </tr>
				<tr>
                                 <?php endif; ?>
                                 <?php endforeach; ?>
				 <?php if($dayOfWeek!=7){ ?>
                                    <td class="padding" colspan="<?php echo 7-$dayOfWeek; ?>"></td>
                                 <?php } ?>
                                 </tr>
                         </tbody>
                         <tfoot>
                                 <th>Lun</th><th>Mar</th><th>Mer</th>
                                 <th>Jeu</th><th>Ven</th><th>Sam</th>
                                 <th>Dim</th>
                         </tfoot>
                 </table>

               <?php endforeach; endforeach; ?>
</div><!-- FIN #ical -->