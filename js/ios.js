// JavaScript Document
var defaultwidth = 0;

$(document).live('pagebeforeshow', function(event) {
	if ($(document).width() <= 480) {
		if (defaultwidth == 0)
			defaultwidth = $(document).width() - 80;
		$('#' + event.target.id + '_box .img img').width(defaultwidth);
	} else {
		var top = (-$(document).height()/3);
		if(event.target.id == 'step_seven')
			top = top + (top / 2);
		$('#' + event.target.id + '_box').css({
			'margin-top' : top + 'px',
			'margin-left' : '-250px',
			'position' : 'absolute',
			'top' : '50%',
			'left' : '50%'
		});
	}
	if (event.target.id == 'step_four') {
		$('#studying').attr('checked','checked').checkboxradio('refresh');
		$('.decheck').removeAttr('checked').checkboxradio('refresh');
	} else if (event.target.id == 'step_five') {
		$('input[name=sj]').attr('checked',false).checkboxradio('refresh');
	} else if (event.target.id == 'step_six') {
		$('#interest-number').children('option').attr('selected',false).first().attr('selected',true).parent().selectmenu('refresh');
	} else if (event.target.id == 'step_seven') {
		$('#gender, #major, #year, .halls').each(function() {
			$(this).children('option').attr('selected',false).first().attr('selected',true).parent().selectmenu('refresh');
		});
	}
	$('#' + event.target.id + '_box input[type=button]').button().button('disable');
});

$(document).ready(function() {
	$('div').ajaxError(function() {
		
	});
	//$.mobile.changePage('#step_zero');
	$.mobile.touchOverflowEnabled = true;
	
	$('.img').each(function() {
		$(this).css('background-size', $(this).css('width') + ' ' + $(this).css('height'));
	});	
	
	$('#campussel').change(function() {
		$('#btn_campus').button('enable');
	});
	
	$('#btn_campus').click(function() {
		$.mobile.changePage('#step_one');
		
		if ($('#campussel').val() != "Auckland" && $('#campussel').val() != "Otago" && $('#campussel').val() != "Canterbury") {
			$('#sports').css('display', 'none');
			$('label[for=sports]').remove();
		}
		
		switch ($('#campussel').val()) {
			case 'Waikato':
				$('#c_hall, #o_hall').remove();
			break;
			case 'Canterbury':
				$('#w_hall, #o_hall').remove();
			break;
			case 'Otago':
				$('#c_hall, #w_hall').remove();
			break;
			default:
				$('#c_hall, #w_hall, #o_hall').remove();
			break;
		}
	});
	
	$('#coolest').keyup(function() {
		if ($(this).val() != '')
			$('#btn_coolest').button('enable');
		else
			$('#btn_coolest').button('disable');
	});
	
	$('#btn_coolest').click(function() {
		$.mobile.changePage('#step_four');
	});
	
	$('#btn_sj').click(function() {
		$.mobile.changePage('#step_six');
	});
	
	$('#btn_slider').click(function() {
		$.mobile.changePage('#step_seven');
	});
	
	$('#btn_data').click(function() {
		$.mobile.changePage('#step_eight');
	});
	
	$('#btn_submit').click(function() {
		if(confirm('You\'re number is '+$('#cellphone').val()+' right?'))
			numcheck();
	});
	$('#btn_cell_retry').click(function() {
		numcheck();
	});
	$('#btn_retry').click(function() {
		$('#btn_retry').button('disable');
		submit_survey();
	});
	
	$('.reset').click(function() {
		$.mobile.changePage('#step_one', { 'reverse' : true });
		$('#fname, #lname').val('');
		$('#cellphone').val('');
		$('#coolest').val('');
	});

	$("input[name='sj']").change(function(){
		if ($("input[name='sj']:checked").length != 0)
			$('#btn_sj').button('enable');
		else
			$('#btn_sj').button('disable');
	});
	
	$('#interest-number').change(function() {
		if ($('#interest-number').val() != 'Choose')
			$('#btn_slider').button('enable');
		else
			$('#btn_slider').button('disable');
	});
	
	$('#btn_unlock').click(function() {
		$('#btn_cell_retry').button('disable');
		$('#cellphone').attr('disabled',false);
		var phone = /^02\d{7,13}$/
		if(phone.test($('#cellphone').val()))
			$('#btn_submit').button('enable');
		else
			$('#btn_submit').button('disable');
	});
	
	$('#btn_cell_retry').click(function() {
		
	});
	
	$('#fname').keyup(data_check);
	$('#lname').keyup(data_check);
	$('#gender').change(data_check);
	$('#major').change(data_check);
	$('#year').change(data_check);
	$('#cellphone').keyup(function() {
		var phone = /^02\d{7,13}$/
		if(phone.test($('#cellphone').val()))
			$('#btn_submit').button('enable');
		else
			$('#btn_submit').button('disable');
	});
	
});

function numcheck() {
	$('#btn_submit').button('disable');
	$('#btn_unlock').button('disable');
	$('#cellphone').attr('disabled',true);
	$.post(base_url + 'index.php/api/journey/numcheck', {
			num : $('#cellphone').val()
	}, function(data) {
		$('#cellphone').attr('disabled',false);
		$('#btn_unlock').button('enable');
		if(data.exists) {
			alert('Sorry it seems you\'ve already got some Jandals! If this is wrong come see us at our tables.');
			$.mobile.changePage('#step_one', { 'reverse' : true });
			$('#fname, #lname').val('');
			$('#cellphone').val('');
			$('#coolest').val('');
		} else {
			$.mobile.changePage('#step_nine');
			submit_survey();
		}
	}, "json").error(function () {
		$('#btn_unlock').button('enable');
		$('#btn_cell_retry').button('enable');
	});
}

function submit_survey() {
	var halls = '';
	if ($('.halls').val() != "Halls of Residence")
		halls = $('.halls').val();
	$.post(base_url + "index.php/api/journey/user",
		{
			fname :$('#fname').val(),
			lname :$('#lname').val(),
			coolest : $('#coolest').val(),
			journey : $('input[name=sj]:checked').val(),
			interest : $( "#interest-number" ).val(),
			gender : $('#gender').val(),
			major : $('#major').val(),
			year : $('#year').val(),
			number : $('#cellphone').val(),
			campus : $('#campussel').val(),
			studying : $('#studying:checked').length,
			relation : $('#relation:checked').length,
			lifesqs : $('#lifesqs:checked').length,
			sports : $('#sports:checked').length,
			hall : halls
		}, function(data, status, request) {
			$.mobile.changePage('#step_ten');
	}, "json").error(function() {
		$('#btn_retry').button('enable');
	});
}

function data_check() {
	if (
		$('#fname').val() != '' &&
		$('#lname').val() != '' &&
		$('#gender').val() != 'Gender' &&
		$('#major').val() != 'Area of Study' &&
		$('#year').val() != 'Year of Study'
	)
			$('#btn_data').button('enable');
		else
			$('#btn_data').button('disable');
}