<div class="content-box">
    <div class="content-box-header">
        <h3>Editer un Cosplay</h3>
    </div>
    <div class="content-box-content relative">
        <fieldset>
            <?php echo $this->Form->create('Post',array('url'=>array('action'=>'edit'),'enctype'=>'multipart/form-data'));?>
            <table>
                <tr></tr>
                <tr>
                    <td>
                        <?php echo $this->Form->input('id'); ?>
                        <?php echo $this->Form->input('title',array('label'=>'Titre: ')); ?>
                        <?php echo $this->Form->input('url',array('label'=>'URL: ')); ?>
                        <div class="input">
                            <label>Image</label>
                            <?php echo $this->Form->file('visuel'); ?>
                        </div>
                        <?php echo $this->Form->input('date',array('label' => 'Date:'));    ?>
                    </td>
                    <td>
                        <?php echo $html->image('cosplays/'.$this->data['Post']['image'],array('style'=>'width:auto; max-height:350px;')); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php echo $this->Form->input('description',array('label'=>'Description: ')); ?>
                        <div class="submit">
                            <input type="submit" value="Envoyer"/>
                        </div>
                    </td>
                </tr>
            </table>
            </form>
        </fieldset>
    </div>
</div>