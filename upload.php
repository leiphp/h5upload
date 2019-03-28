<?php
//接收base64格式图片
$postIMG = $_POST['image'];
$fileName = date('YmdHis') .'-'. mt_rand(100,999);
$imgPath = './uploads/'. $fileName . '.jpg';
$data = base64_decode($postIMG);
$fp = fopen($imgPath,'w');
fwrite($fp,$data);
fclose($fp);
$info = '上传成功';
$status ='1';
$url = '/js_upload/uploads/'.$fileName . '.jpg'; //请根据你的实际情况设置返回的路径
$return = array('info'=>$info,'status'=>$status,'url'=>$url);
echo json_encode($return);