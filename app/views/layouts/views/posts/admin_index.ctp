<h2>Gérer les cosplays</h2>
<div class="content-box">
    <div class="content-box-header">
        <h3>Gérer les cosplays</h3>
    </div>
    <div class="content-box-content">
            <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id');?></th>
                    <th><?php echo $this->Paginator->sort('Titre','title');?></th>
                    <th>Image</th>
                    <th>Description</th>
                    <th><?php echo $this->Paginator->sort('Date','date');?></th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                    <td><?php echo $post['Post']['id']; ?>&nbsp;</td>
                    <td><?php echo $post['Post']['title']; ?>&nbsp;</td>
                    <td><?php echo $post['Post']['image']; ?>&nbsp;</td>
                    <td><?php echo $post['Post']['description']; ?>&nbsp;</td>
                    <td><?php echo $post['Post']['date']; ?>&nbsp;</td>
                    <td class="actions">
                       <?php
                       echo $html->link(
                               $html->image('admin/icons/edit.png'),
                               array('action'=>'edit',$post['Post']['id']),
                               array('escape'=>false)
                       );
                       echo $html->link(
                               $html->image('admin/icons/delete.png'),
                               array('action'=>'delete',$post['Post']['id']),
                               array('escape'=>false),
                               'Vous vous vraiment supprimer ce contenu'
                       );?>
                    </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>

            <div class="pagination">
               <?php echo $paginator->prev('Précédents ', array('class' => 'prev'), null, array('class' => 'disable')); ?>
               <?php echo $paginator->numbers(array("separator"=>false,"before"=>false,"after"=>false)); ?>
               <?php echo $paginator->next(' Suivants', array('uclass' => 'next'), null, array('class' => 'disable')); ?>
            </div>
    </div>
</div>