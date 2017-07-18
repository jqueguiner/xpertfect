<?php
/*
 $search = array("{");
 $replace = array("[");

 //echo 
 $a=str_replace($search,$replace,json_encode($product_list));
 $search = array("}");
 $replace = array("]");
 
$a=str_replace($search,$replace,$a);



 echo '{
 "sEcho":0,"iTotalRecords":'.$total.',"iTotalDisplayRecords":'.$page_size.',"aaData":'.$a.'

 }'; 

//echo $javascript->Object($product_list);

//debug($test);
*/
$a = '{
 "sEcho":"1","iTotalRecords":"$total","iTotalDisplayRecords":'.$page_size.',"aaData":[';
$i=0;
foreach ($test as $as):
	
	$i++;
	//echo  $as['User']['username'];
	$actions = $this->Html->link(
	                            $this->Html->image("admin/icons/actions/Actions-edit-find-user-icon.png", array("alt" => "Layout", "id" => "view")),
	                            array('action' => 'view', $as['User']['id']),
	                            array('escape'=>false)).
						$this->Html->link(
	                            $this->Html->image("admin/icons/actions/Actions-document-edit-icon.png", array("alt" => "Layout")),
	                            array('action' => 'edit', $as['User']['id']),
	                            array('escape'=>false)).
						$this->Html->link(
	                            $this->Html->image("admin/icons/actions/Actions-edit-delete-icon.png", array("alt" => "Layout")),
	                            array('action' => 'delete', $as['User']['id']),
	                             array('escape'=>false), sprintf(__('Are you sure you want to delete '.$as['User']['username'].'?', true), $as['User']['id']));

	$actions=$this->Html->link('view',                   
	                            array('action' => 'view', $as['User']['id']),
	                            array('escape'=>false)).
			$this->Html->link('edit',
	                            array('action' => 'edit', $as['User']['id']),
	                            array('escape'=>false)).
			$this->Html->link('delete',
	                            array('action' => 'delete', $as['User']['id']),
	                            array('escape'=>false), sprintf(__('Are you sure you want to delete '.$as['User']['username'].'?', true), $as['User']['id']));
	$actions="actions";
	$username=$as['User']['username'];
	$group=$as['Group']['name'];
	$name=$as['User']['name'];
	$surname=$as['User']['surname'];
	$adress=$as['User']['adress'];
	$city=$as['User']['city'];
	$zip_code=$as['User']['zip_code'];
	$country=$as['User']['country'];
	$mail=$as['User']['mail'];
	$created=$as['User']['created'];
	$modified=$as['User']['modified'];

	
		$a.="[\"$actions\",";
		$a.="\"$username\",";
		$a.="\"$group\",";
		$a.="\"$name\",";
		$a.="\"$surname\",";
		$a.="\"$adress\",";
		$a.="\"$city\",";
		$a.="\"$zip_code\",";
		$a.="\"$country\",";
		$a.="\"$mail\",";
		$a.="\"$created\",";
		$a.="\"$modified\"],";
		
	
	
	//echo '<br>';
endforeach;
$a=substr($a, 0, -1);
$a.="] }";

echo($a);



?>
