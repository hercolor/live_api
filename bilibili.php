<?php
    require_once 'common.php';
    $common = new common();
    $html = json_decode($common->curl('https://api.live.bilibili.com/xlive/web-room/v1/playUrl/playUrl?cid='.$_GET['id'].'&qn=1000&platform=h5&https_url_req=1&ptype=16'),true);
    $url = array('原画'=>$html['data']['durl']['0']['url'],'蓝光'=>$html['data']['durl']['1']['url'],'超清'=>$html['data']['durl']['2']['url'],'高清'=>$html['data']['durl']['3']['url']);
    $json = array('code'=>200,'msg'=>'success','data'=>$url);
    die(json_encode($json));
