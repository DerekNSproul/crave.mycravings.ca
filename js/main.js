// JavaScript Document
var mode = 0;
var obj;
$(document).ready(function() {
	$('div').ajaxError(function() {
		
	});
	
	$('input, select, #jslide').hide();
	for (i=4;i>=1;i--)
	{
		$('#navstage').prepend('<div class="navcounter">'+i+'</div>');
	}
	$('#navstage').children().hide();
	$('.navcounter').click(function() {
		if($(this).hasClass('active')) {
			if(validation()) {
				$('.navcounter').removeClass('selected');
				$(this).addClass('selected');
				mode = $(this).text();
				mode++;
				move(true, true);
			}
		}
	});
	
	$('.navcounter').first().addClass('selected active');
	obj = $('#slider');
	
	$(document).keyup(function(e) {}).keydown(function(e){
		if (e.keyCode == 13)
			e.preventDefault();
	});
	

    //// The one thing I crave the most is...
	// User clicked on the "other" textbox itself
	$("#cravemost .input-other").click(function() {
	   $('#cravemost input.radio-other').click();
       $('#cravemost .input-other')
           .removeAttr('disabled')
           .focus();
	});
	// User clicked on one of the radio buttons
	$("#cravemost input[type='radio']").click(function() {
	   if ($(this).hasClass('radio-other')) {
	       $('#cravemost .input-other')
	           .val('')
	           .focus();
	   } else {
	       $('#cravemost .input-other')
	           .val('');
	   }
	});
	// User typed in the "other" textbox
	$('#cravemost input.input-other').change(function() {
	   // Set the radio button's value to the textbox's new text
	   $('#cravemost .radio-other').val(this.value);
	});
	
	$('#cellphone').keydown(function(event) {
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

	
	$('textarea[maxlength]').keyup(function(){  
        //get the limit from maxlength attribute  
        var limit = parseInt($(this).attr('maxlength'));  
        //get the current text inside the textarea  
        var text = $(this).val();  
        //count the number of characters in the text  
        var chars = text.length;  
  
        //check if there are more characters then allowed  
        if(chars > limit){  
            //and if there are use substr to get the text before the limit  
            var new_text = text.substr(0, limit);  
  
            //and change the current text with the new text  
            $(this).val(new_text);  
        }  
    });
	
	$('#reload').click(reset_page);
	$('#navright').click(function() {
		move(true, false);
	});
	$('#navleft').click(function() {
		if(mode > 2)
			move(false, false);
	}).mouseenter(function() {
		if(mode > 2)
			$(this).stop().fadeTo(100,0.8);
	}).mouseleave(function() {
		if(mode > 2)
			$(this).stop().fadeTo(100,0.5);
	});
	$('#jslide').slider({
			value: 0,
			min: 0,
			max: 5,
			step: 1,
			slide: function( event, ui ) {
				$( "#interest-number" ).text( ui.value );
			}
	});
	$( "#interest-number" ).text('0');
        
	$('#resubmit').click(submit_survey);
        
});

function move(advance, selection) {
	
	if (validation()) {
		if (!selection) {
			if (advance) {
				if (mode > 1) {
					$('div.selected').removeClass('selected').next().addClass('selected active');
				}
				mode++;
			} else if (mode != 0) {
				$('div.selected').removeClass('selected').prev().addClass('selected');
				mode--;
			}
		}
		$('textarea').fadeOut();
		if(mode > 1 && mode < 6)
			$('#navleft').fadeTo(100,0.5);
		if(mode != 0 && mode < 8)
			$('#reload').fadeIn();
		else
			$('#reload').fadeOut();
		//$('input, select, #jslide').fadeOut(500);
		switch(mode)
		{
			case 0:
				$('#navleft').stop().fadeOut();
				obj.stop().animate({left: 0},500);
				break;
			case 1:
				$('#navleft').stop().fadeOut();
				$("#campusbox select").show();
				$('#stagename').text('Your Campus');
				obj.stop().animate({left: -950},500);
				//$('#navstage').children().fadeIn();
				break;
			case 2:
			 // The one thing I crave most is
				$('#navleft').stop().fadeOut();
				$("#cravemost input").show();
				$('#cravemost').stop().show();
				$('#stagename').text('Crave Most');
				obj.stop().animate({left: -1900},500,function() {
					//$('#coolest').focus();
				});
				break;
			case 3:
				$('#cravemost').fadeOut(500);
				$('#stagename').text('Our Magazine');
				$('#magazine input').stop().show();
				obj.stop().animate({left: -2850},500,function() {
					$('#magchk').focus();
				});
				break;
			case 4:
				$('#stagename').text('Beginning Your Journey');
				$('#jslide').stop().show();
				obj.stop().animate({left: -3800},500);
				break;
			case 5:
				$('#stagename').text('Your Spiritual Journey');
				$('input[name=sj]').stop().show();
				obj.stop().animate({left: -4750},500,function() {
					$('input[name=sj]:first').focus();
				});
				break;
			case 6:
				$('#navstage').children().fadeOut();
				$('#navleft').stop().fadeOut();
				obj.stop().animate({left: -5700},500,function() {
					$('#name').focus();
				});
				$('#fname,#lname').stop().show();
				$('#you input').stop().show();
				$('#you select').stop().show();
				$('#you textarea').stop().show();
				$('#email').stop().show();
				$('#cellphone, #yes_ready, #no_change').stop().show();
				$('#cellphone').attr('disabled', false);
				$('#cellphone_confirm').hide();
				break;
			case 7:
                //$('#email').show();
				obj.stop().animate({left: -6650},500,function() {
				});
                                mode = 6;
				$('#navstage').children().fadeOut(500);
				$('#navleft, #navright').fadeOut(500);
				$('#terms, #break').fadeOut();
				submit_survey();
				break;
			case 8:
				$('#cellphone').attr('disabled', true).stop().show();
            /*
				$('#cellphone_confirm').children('input').stop().show();
				$('#cellphone_confirm').fadeIn();
				mode = 7;

				$('#navstage').children().fadeOut(500);
				$('#navleft, #navright').fadeOut(500);
				$('#terms, #break').fadeOut();
				submit_survey();
				break;
            */
		}
	}
}
function submit_survey() {
	$('#resubmit').fadeOut();
    
    // AJAX form submit. This controls what fields and values are sent back to 
    // the server.
	$.post(base_url + "index.php/api/journey/user",
		{
			fname :$('#fname').val(),
			lname :$('#lname').val(),
			gender : $('#gender input:checked').val(),  //('input[name=gender]:checked').val(),

			email: $('#email').val(),
			number : $('#cellphone').val(),

			cravemost : $('#cravemost input:checked').val(),
			spiritual : $('input[name=sj]:checked').val(),
			interest : $( "#interest-number" ).text(),
			// Magazine name
			magazine: $('#magazine input:checked').val(),

			major : $('#major').val(),
			year : $('#selyear').val(),

			campus : $('#campusselect').val(),
			residence: $('#residence').val(),

			// International student?
			international: $('#international').attr('checked') ? 'Yes' : 'No'

		}, function(data, status, request) {
			finish();
	}, "json").error(function() {
		$('#resubmit').fadeIn();
	});
}
function finish() {
	$('#right').hide();
	//obj.stop().animate({left: -7086},500);
	if (app) {
		$('#white').hide();
		setTimeout(reset_page, 5000);
	} else
		$('#terms, #break').fadeIn();
}
function reset_page() {
	$('#myform')[0].reset();
	$('#navstage').children().fadeOut();
	$('#jslide').slider("value",0);
	$('#interest-number').text('0');
	$('#navright').fadeIn();
	$('.active').removeClass('active').removeClass('selected');
	$('.navcounter:first').addClass('selected').addClass('active');
	$('#terms, #break').fadeIn();
	mode = 0;
	move(true, true);	
}
function validation() {
	//return true; //DEBUG
	switch(mode)
	{
		case 1:
			if ($('#campusbox select').val() == "") {
				$('#campus-error').fadeIn(200);
				return false;
			}
			break;
		case 2:
			if ($('#cravemost input:checked').val() == undefined) {
				$('#cravemost-error').fadeIn(200);
				return false;
			}
			break;
		case 3:
			if ($('#magazine input:checked').val() == undefined) {
				$('#mag-error').fadeIn(200);
				return false;
			}
			break;
		case 4:
			if($( "#interest-number" ).text() == '0'){
				$('#slidererr').fadeIn(200);
				return false;
			}
			break;
		case 5:
			if($('input[name=sj]:checked').length == 0){
				$('#spirit').fadeIn(200);
				return false;
			}
			break;
		case 6:
                        var phone = /^[\d\(\)-]{7,14}$/;
                        var email = /^[\w.%-]+@[\w.-]+\.\w{2,5}$/;
			if($('#fname').val() == ''){
				$('#deterr').text('Enter your First Name');
				$('#detail').fadeIn(200);
				return false;
			} else if($('#lname').val() == ''){
				$('#deterr').text('Enter your Last Name');
				$('#detail').fadeIn(200);
				return false;
			} else if($('input[name=gender]:checked').length == 0){
				$('#deterr').text('Select your Gender');
				$('#detail').fadeIn(200);
				return false;
			} else if(!phone.test($('#cellphone').val())){
				$('#deterr').text('Enter a valid cellphone number');
				$('#detail').fadeIn(200);
				return false;
			} else if(!email.test($('#email').val())){
				$('#deterr').text('Enter a valid email');
				$('#detail').fadeIn(200);
				return false;
			} else if($('#major').val() == ''){
				$('#deterr').text('Enter your Faculty/Degree');
				$('#detail').fadeIn(200);
				return false;
			} else if($('#selyear').val() == ''){
				$('#deterr').text('Select your Year in School');
				$('#detail').fadeIn(200);
				return false;
			}
			break;
		case 7:
/*			var phone = /^[\d\(\)-]{7,14}$/;
			if (!phone.test($('#cellphone').val())){
				$('#contact-error').fadeIn(200).css('top','199px').children('.msg').html('<strong>Forgetting something?</strong> Type in a valid number');
				return false;
			}
			var email = /^[\w.%-]+@[\w.-]+\.\w{2,5}$/;
			if (!email.test($('#email').val())){
				$('#contact-error').fadeIn(200).css('top','291px').children('.msg').html('<strong>Forgetting something?</strong> Type in a valid email address');
				return false;
			}
*/	}
	$('.error').fadeOut(100);
	return true;
}

function touchMove(event) {
	// Prevent scrolling on this element
	event.preventDefault();
}