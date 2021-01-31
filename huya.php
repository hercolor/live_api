<?php
    require_once 'common.php';
    $common = new common();
    $html = $common->curl('https://m.huya.com/'.$_GET['id']);
    $preg_url = '~liveLineUrl = "([\s\S]*?)";~';
    preg_match_all($preg_url,$html,$fanhao);
    $url = array('腾讯'=>'https:'.$fanhao[1][0],'百度'=>'https:'.str_replace('tx.hls.huya.com', 'bd.hls.huya.com',$fanhao[1][0]),'咪咕'=>'https:'.str_replace('tx.hls.huya.com', 'migu-bd.hls.huya.com',$fanhao[1][0]));
    $json = array('code'=>200,'msg'=>'success','data'=>$url);
    if($_GET['type'] == 'json'){
        die(json_encode($json));
    }
    header('Location:https:'.$fanhao[1][0]);
