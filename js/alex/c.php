<?php
/**
 * Created by PhpStorm.
 * User: huanglintian
 * Date: 2018/11/2
 * Time: 17:42
 */

require_once  __DIR__ . "/../../wechat/jssdk.php";
$config = [
    'app_id' => 'wxcabcd3ef09aa6bcf',
    'app_secret' => '3b595cfb67deac485cf984af8e622e36'
];
@$jssdk = new JSSDK($config['app_id'], $config['app_secret']);
@$signPackage = $jssdk->GetSignPackage($_REQUEST['url']);
$a=array('eqr799.cn','abo2017.com');
$random_keys=array_rand($a);
$host = $a[$random_keys];
$config = array(
    'share' => array(
        0 => array(
            'title' => '邀你加入{diqu}学妹群',
            'desc' => '“DANNY”邀你加入{diqu}骚女⚡泡友群，有17个附近800米内的女生，进入可查看详情。',
            'link' => "http://qq.{$host}/eisl.php",
            'img_url' => 'http://poi.yut.geartchina.com.cn/Public/j5/img/qun.jpg',
        ),
        1 => array(
            'title' => '邀你加入{diqu}学妹群',
            'desc' => '“DANNY”邀你加入{diqu}骚女⚡泡友群，有17个附近800米内的女生，进入可查看详情。',
            'link' => "http://qq.{$host}/eisl.php",
            'img_url' => 'http://poi.yut.geartchina.com.cn/Public/j5/img/qun.jpg',
        ),
        2 => array(
            'title' => '邀你加入{diqu}私密群',
            'link' => "http://qq.{$host}/eisl.php",
            'img_url' => 'http://poi.yut.geartchina.com.cn/Public/j5/img/qun.jpg',
        ),
    ),
    'c_url_back' => '', 
    'c_url' => '',
    'config' => array(
        'debug' => false,
        'appId' => $signPackage['appId'],
        'timestamp' => $signPackage['timestamp'],
        'nonceStr' => $signPackage['nonceStr'],
        'signature' => $signPackage['signature'],
        'jsApiList' => array(
            0 => 'checkJsApi',
            1 => 'onMenuShareTimeline',
            2 => 'hideOptionMenu',
            3 => 'onMenuShareAppMessage',
            4 => 'hideMenuItems',
            5 => 'showMenuItems',
        ),
    ),
);

echo json_encode($config);

