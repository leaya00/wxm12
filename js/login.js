login=function(base_url){
	$.dialog.open(base_url+'/site/login?type=pop',{
				title : '提示',
				width:400
			});
};
logout=function(base_url){
	$.dialog.open(base_url+'/site/logout?type=pop',{
				title : '正在退出登录'
			});
};