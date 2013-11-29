login=function(base_url){
	$.dialog.open(base_url+'/login',{
				title : '提示'
			});
};
logout=function(base_url){
	$.dialog.open(base_url+'/login/logout',{
				title : '正在退出登录'
			});
};