String.prototype.trim = function(){
	return this.replace(/^\s*/,"").replace(/\s*$/,"");
	};
	var check = function(){
		var form = document.forms[0];
		var errStr = "";
		//用户名为空
		if(form.name.value == null || form.name.value.trim() == ""){
			errStr += "\n用户名不能为空！";
			form.name.focus();
		}
		var reg = /^[\u4E00-\u9FA5\uf900-\ufa2d\w]{4,16}$/;
		if(reg.test(form.name.value) == false){
			errStr += "\n用户名过短或过长！";
			form.name.focus();
		}
		//密码为空
		if(form.pwd.value == null || form.pwd.value.trim() == ""){
			errStr += "\n密码不能为空！";
			form.pwd.focus();
		}
		var reg1 = /^([a-z]+(?=[0-9])+)[a-z0-9]+$/;
		if(reg1.test(form.pwd.value) == false){
			errStr += "\密码必须是字母开头的字母数字组合！";
			form.pwd.focus();
		}
		//确认密码
		if(form.spwd.value == null || form.spwd.value.trim() == "" || form.spwd.value != form.pwd.value){
			errStr += "\n两次输入密码不一致！";
			form.spwd.focus();
		}
		if(errStr != ""){
			alert(errStr);
		}else{
			form.submit();
		}
	};

	document.getElementById("Button1").onclick = check;