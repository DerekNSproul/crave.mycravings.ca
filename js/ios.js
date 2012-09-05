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
	} else if (event.target.id == 'step_four') {
		$('input[name=sj]').attr('checked',false).checkboxradio('refresh');
	} else if (event.target.id == 'step_three') {
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
			$('#btn_interest').button('enable');
		else
			$('#btn_interest').button('disable');
	});
	
	$('#btn_interest').click(function() {
		$.mobile.changePage('#step_four');
	});
	
	$('#btn_sj').click(function() {
		$.mobile.changePage('#step_five');
	});
	
	$('#btn_slider').click(function() {
		$.mobile.changePage('#step_seven');
	});
	
	$('#btn_data').click(function() {
		$.mobile.changePage('#step_five');
	});
	
	$('#btn_submit').click(function() {
            $.mobile.changePage('#step_six');
		submit_survey();
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
			$('#btn_interest').button('enable');
		else
			$('#btn_interest').button('disable');
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
        
        $('#input-other').hide();
        $('#crave_next').button('disable');
        
        $('#cravemost-select').change(function() {
            var en_crave_next = true;
            var show_other = false;
            
            if($(this).val() == ''){
                en_crave_next = false;
            } else if ($(this).val() == 'other') {
                show_other = true;
                if ($('#input-other').val() == '') en_crave_next = false;
                
            }
            if (en_crave_next) $('#crave_next').button('enable');
            else $('#crave_next').button('disable');
            
            if (show_other) $('#input-other').show();
            else $('#input-other').hide();
            
        });
        
	$('#input-other').keyup(function() {
            if (($this).val() != '') $('#crave_next').button('enable');
            else $('#crave_next').button('disable');
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
			$.mobile.changePage('#step_six');
			submit_survey();
		}
	}, "json").error(function () {
		$('#btn_unlock').button('enable');
		$('#btn_cell_retry').button('enable');
	});
}

function submit_survey() {
	var my_data = {
			fname :$('#fname').val(),
			lname :$('#lname').val(),
			gender : $('#gender').val(),  //('input[name=gender]:checked').val(),

			email: $('#email').val(),
			number : $('#cellphone').val(),

			cravemost : $('#cravemost-select').val(),
			spiritual : $('#spiritual_journey input:checked').val(),
			interest : $( "#interest-number" ).val(),
			// Magazine name
			magazine: $('#magazine input:checked').val(),

			major : $('#major').val(),
			year : $('#selyear').val(),

			campus : $('#campussel').val(),
			residence: $('#residence').val(),

			// International student?
			international: $('#international').attr('checked') ? 'Yes' : 'No'
		};
        //var mytable = '<table><tr><td>name</td><td>' + my_data.fname + ' ' + my_data.lname + '</td></tr><tr><td>Gender</td><td>' + my_data.gender + '</td></tr><tr><td>Email</td><td>' + my_data.email + '</td></tr><tr><td>Cellphone</td><td>' + my_data.number + '</td></tr><tr><td>Interest</td><td>' + my_data.interest + '</td></tr><tr><td>Spiritual</td><td>' + my_data.spiritual + '</td></tr><tr><td>Magazine</td><td>' + my_data.magazine + '</td></tr><tr><td>Faculty</td><td>' + my_data.major + '</td></tr><tr><td>Year</td><td>' + my_data.year + '</td></tr><tr><td>Campus</td><td>' + my_data.campus + '</td></tr><tr><td>Residence</td><td>' + my_data.residence + '</td></tr><tr><td>International</td><td>' + my_data.international + '</td></tr></table>';
        //$('#server-message-area').html(mytable);
        
	$.post(base_url + "index.php/api/journey/user", my_data
		, function(data, status, request) {
			$.mobile.changePage('#step_seven');
	}, "json").error(function() {
		$('#btn_retry').button('enable');
                
	});
}

function data_check() {
	if (
		$('#fname').val() != '' &&
		$('#lname').val() != '' &&
		$('#cellphone').val() != '' &&
		$('#email').val() != '' &&
		$('#gender').val() != 'Gender' &&
		$('#major').val() != 'Area of Study' &&
		$('#year').val() != 'Year of Study'
	)
			$('#btn_submit').button('enable');
		else
			$('#btn_submit').button('disable');
}