function redirect(){
	location.href='panel.php';
}

$(function(){
	var button = $('#buttonLogin');
	button.on('click',function(){
		var param = {
			username : $('#username').val(),
			password : $('#password').val()
		};
		$.ajax({
			url: '../index.php/login/',
			data: param,
			type: 'post',
			success: function(result){
				console.log(result["loginTrue"]);
				var message = $('.alert');
				var text = '';
				if (result["loginTrue"]) {
					divClass = 'alert-info';
					text = 'Espere un momento ya será redireccionado...';
					setTimeout('redirect()',2000);
				}else{
					divClass = 'alert-danger';
					text = 'El usuario o contraseña no es correcto';
				}
				message.attr('class','alert ' + divClass);
				message.text(text);
			}
		})
	});
});