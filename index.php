<?php
/*
 plugin name: 打赏
 description: 打赏文章作者
 */

//如果是请求页面，返回模板html后直接退出
if ( $_GET['page'] == 'donation-lite' ) {
    require('donate.php');
    exit;
}

//添加过滤器，在文章后面增加打赏按钮
add_filter('the_content', 'donate', 100);
function donate($content) {
    return $content.'<p><button class="donation">打赏</button></p>';
}

//载入javascript
wp_enqueue_script( 'donate', plugin_dir_url( __FILE__ ).'/donate.js', array(), null, true);

//载入css
wp_enqueue_style( 'donate', plugin_dir_url( __FILE__ ).'/donate.css');
