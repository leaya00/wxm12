
/*格式化字符串
 * 两种调用方式 
var template1="我是{0}，今年{1}了"; 
var template2="我是{name}，今年{age}了"; 
var result1=template1.format("loogn",22); 
var result2=template1.format({name:"loogn",age:22}); 
两个结果都是"我是loogn，今年22了" 
*/
String.prototype.format = function(args) {
	if (arguments.length > 0) {
		var result = this;
		if (arguments.length == 1 && typeof (args) == "object") {
			for ( var key in args) {
				var reg = new RegExp("({" + key + "})", "g");
				result = result.replace(reg, args[key]);
			}
		} else {
			for ( var i = 0; i < arguments.length; i++) {
				if (arguments[i] == undefined) {
					return "";
				} else {
					var reg = new RegExp("({[" + i + "]})", "g");
					result = result.replace(reg, arguments[i]);
				}
			}
		}
		return result;
	} else {
		return this;
	}
}
