(function($){
     $(window).load(function () {
         $('.donation').click(async function(){

             //异步加载页面
             let response = await fetch('/index.php?page=donation-lite');
             let text = await response.text();
             $("body").append(text);

             //关闭按钮动作绑定
             $('.dap-close').click(function(){
                $("#donate-author-post__wrapper").remove();
             });
         });
     });
}(jQuery));
