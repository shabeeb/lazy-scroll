<?php
/**
 * Created by PhpStorm.
 * User: shabeeb
 * mail: mail@shabeebk.com
 */



 $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;

$perpage = 10;
$starting = $page*$perpage;
$ending = $starting+$perpage;
$arr = array();
$j = 1;
for($i =$starting;$i<=$ending;$i++){
    $arr[] = array("id"=>$i,"name"=>"name".$i,'imsrc'=>'images/'.$j.'.jpg');

        $j++;

}
$data['status'] = "ok";
$data['result'] = $arr;
$data['nextpage'] = $page+1;
$data['lastpage'] = 10;

echo json_encode($data);

