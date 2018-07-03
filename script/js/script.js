$(document).ready(function(){   
	$('body').on('click','#show__feedback__window', function(){
		$("#send__feedback").css('top','42px');
	}).on('click','#show__privacy__policy', function(){
		$("#privacy__policy").css('top','42px');
	}).on('click','#close__privacy__policy', function(){
		$("#privacy__policy").css('top','-1000px');
	}).on('click','#close__feedback__window', function(){
		$("#send__feedback,#privacy__policy").css('top','-1000px');
		$('#name__fb,#phone__fb,#msg__fb').attr('style','').val('');
	});
	
	// валидация и обработка формы
	$('body').on("submit", "#send__feedback", function(e){
		e.preventDefault();
		var true__form = true;
		$('#name__fb,#phone__fb').attr('style','');
		$('#phone__fb').keyup(function(){$('#phone__fb').attr('style', '');});
		$('#name__fb').keyup(function(){$('#name__fb').attr('style', '');});
		
		if($('#phone__fb').val() == ''){$('#phone__fb').css('borderColor','red').focus(); true__form = false;} 
		else {
			var regular = /^((8|\+7)[\- ]?)?(\(?\d{3,4}\)?[\- ]?)?[\d\- ]{5,10}$/;
			if(!regular.test($.trim($('#phone__fb').val()))){
				$('#phone__fb').css('borderColor','red').focus();
				true__form = false;
			}
		}
		if($('#name__fb').val() == ''){$('#name__fb').css('borderColor','red').focus(); true__form = false;}
		
		if(true__form){
			$.post(
				"/script/php/send__feedback.php",
				{name:$('#name__fb').val(),phone:$('#phone__fb').val(),msg:$('#msg__fb').val()},
				function(data){
					if(data){
						$("#send__feedback,#privacy__policy").css('top','-1000px');
						$('#name__fb,#phone__fb,#msg__fb').attr('style','').val('');
						alert('Сообщение отправлено. Менеджер свяжется с Вами в ближайшее время');
					}
					else alert('Сообщение не отправлено. Попробуйте немного позже.');
				}
			);
		}
	});
	
	// показываем, скрываем карту
	$('body').on('click','#show__map', function(){
		$("#map").css('top','0');
	}).on('click','#my__button__map', function(){
		$("#map").css('top','100%');
	});
});

