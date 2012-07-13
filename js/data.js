// JavaScript Document
$(document).ready(function() {
    $('#campussel').change(function() {
		if($('#campussel').val() != "Choose your Campus")
			$('#btn_campus').attr('disabled', false);
		else
			$('#btn_campus').attr('disabled', true);
	});
	$('#btn_campus').click(function() {
		$('#myform').slideDown(500);
		$('#btn_campus, #campussel').attr('disabled',true);
		
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
	
	$('#myform').submit(function() {
		submit_survey();
		return false;
	});
	
	$('#cellphone, #homephone').keydown(function(event) {
        // Allow: backspace, delete, tab and escape
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
	
	$('div').ajaxError(function() {
		
	});
});

function submit_survey() {
	$('.pausable').attr('disabled',true);
	$('#loading').show();
	$('#errors').html('');
	var halls = '';
	var degree = '';
	if ($('.halls').val() != "Halls of Residence")
		halls = $('.halls').val();
	if ($('#major').val() != "Area of Study")
		degree = $('#major').val();
	var phone = $('#cellphone').val();
	if (phone == '') {
		phone = $('#homephone').val();
	}
	$.post(base_url + "index.php/api/journey/user",
		{
			fname :$('#fname').val(),
			lname :$('#lname').val(),
			coolest : $('#coolest').val(),
			journey : $('input[name=sj]:checked').val(),
			interest : $('input[name=interested]:checked').val(),
			gender : $('input[name=gender]:checked').val(),
			major : degree,
			year : $('input[name=year]:checked').val(),
			number : phone,
			campus : $('#campussel').val(),
			studying : $('#studying:checked').length,
			relation : $('#relation:checked').length,
			lifesqs : $('#lifesqs:checked').length,
			sports : $('#sports:checked').length,
			hall : halls,
			data : 'data'
		}, function(data, status, request) {
			$('#loading').hide();
			$('#successes').fadeIn().delay(1000).fadeOut();
			$('#myform')[0].reset();
			$('.pausable').attr('disabled',false);
			$('#errors').html('');
	}, "json").error(function(data) {
		
		$('#loading').hide();
		$('.pausable').attr('disabled',false);
		if(data.responseText != '"Phone Number already exists in the system."') {
			data.responseText = data.responseText.replace(/(<\\\/p>\\n)|(<p>)|\.|(The)|(is required)/g, '').replace(/ field/g, ', ');
			data.responseText = data.responseText.substr(0, data.responseText.length - 3) + " field(s) are required.";
		}
		data.responseText = data.responseText.replace(/"/g, '');
		$('#errors').html(data.responseText);
	});
}