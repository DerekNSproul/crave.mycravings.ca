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
	
	$(document).keyup(function(e) {
        if (e.keyCode == 13 && mode < 8 && $('#overlay:visible').length == 0)
			move(true, false);
    }).keydown(function(e){
		if (e.keyCode == 13)
			e.preventDefault();
	});
	

    // Initialize combo box widget functionality
    $.widget( "ui.combobox", {
        _create: function() {
            var input,
                self = this,
                select = this.element,
                selected = select.children( ":selected" ),
                value = selected.val() ? selected.text() : "",
                wrapper = $( "<span>" )
                    .addClass( "ui-combobox" )
                    .insertAfter( select );
                    
            input = $( "<input>" )
                .appendTo( wrapper )
                .val( value )
                .addClass( "ui-state-default" )
                .autocomplete({
                    delay: 0,
                    minLength: 0,
                    source: function( request, response ) {
                        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
                        response( select.children( "option" ).map(function() {
                            var text = $( this ).text();
                            if ( this.value && ( !request.term || matcher.test(text) ) )
                                return {
                                    label: text.replace(
                                        new RegExp(
                                            "(?![^&;]+;)(?!<[^<>]*)(" +
                                            $.ui.autocomplete.escapeRegex(request.term) +
                                            ")(?![^<>]*>)(?![^&;]+;)", "gi"
                                        ), "<strong>$1</strong>" ),
                                    value: text,
                                    option: this
                                };
                        }) );
                    },
                    select: function( event, ui ) {
                        ui.item.option.selected = true;
                        self._trigger( "selected", event, {
                            item: ui.item.option
                        });
                    },
                    change: function( event, ui ) {
                        if ( !ui.item ) {
                            var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $(this).val() ) + "$", "i" ),
                                valid = false;
                            select.children( "option" ).each(function() {
                                if ( $( this ).text().match( matcher ) ) {
                                    this.selected = valid = true;
                                    return false;
                                }
                            });
                            if ( !valid ) {
                                // remove invalid value, as it didn't match anything
                                $( this ).val( "" );
                                select.val( "" );
                                input.data( "autocomplete" ).term = "";
                                return false;
                            }
                        }
                    }
                })
                .addClass( "ui-widget ui-widget-content ui-corner-left" );

            input.data( "autocomplete" )._renderItem = function( ul, item ) {
                return $( "<li></li>" )
                    .data( "item.autocomplete", item )
                    .append( "<a>" + item.label + "</a>" )
                    .appendTo( ul );
            };

            $( "<a>" )
                .attr( "tabIndex", -1 )
                .attr( "title", "Show All Items" )
                .appendTo( wrapper )
                .button({
                    icons: {
                        primary: "ui-icon-triangle-1-s"
                    },
                    text: false
                })
                .removeClass( "ui-corner-all" )
                .addClass( "ui-corner-right ui-button-icon" )
                .click(function() {
                    // close if already visible
                    if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
                        input.autocomplete( "close" );
                        return;
                    }

                    // work around a bug (likely same cause as #5265)
                    $( this ).blur();

                    // pass empty string as value to search for, displaying all results
                    input.autocomplete( "search", "" );
                    input.focus();
                });

        },

        destroy: function() {
            this.wrapper.remove();
            this.element.show();
            $.Widget.prototype.destroy.call( this );
        }
    });

    // Activate the campus select combo box widget
    $( "#campussel" ).combobox();

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
	$('#terms').click(function() {
		$('#terms, #reload, #break').fadeOut();
		$('#close').show();	
		$('#overlay').fadeIn(function() {
			if (app) {
				$('#termsbox').fadeIn();
			} else {
				$('#termsbox').slideDown(function() {
					
				});
			}
		});
	});
	
	/*
	// This probably should not need to happen since we are not doing cellphone number checking
	$('#reverify').click(function() {
		$('#reverify').fadeOut();
		$.post(base_url + 'index.php/api/journey/numcheck', {
				num : $('#cellphone').val()
		}, function(data) {
			$('#cellphone').attr('disabled', false);
			if(data.exists) {
				$('#contact-error').fadeIn(200).css('top','182px').children('.msg').html('<strong>Sorry it seems you\'ve already got some Jandals!</strong><br />If this is wrong come see us at our tables' );
				$('#navright').fadeOut();
				if (app) {
					setTimeout(reset_page, 5000);
				}
			} else {
				obj.stop().animate({left: -6086},500);
				$('#navstage').children().fadeOut(500);
				$('#navleft, #navright').fadeOut(500);
				$('#terms, #break').fadeOut();
				submit_survey();
			}
		}, "json").error(function () {
			$('#reverify').fadeIn();
		});
	});
    */

    // Close the "Terms & Conditions" box
	$('#close').click(function() {
		if (app) {
			$('#termsbox').fadeOut(function() {
				$('#overlay').fadeOut();
			});
		} else {
			$('#termsbox').slideUp(function() {
				$('#overlay').fadeOut();
			});
		}
		$('#terms, #break').fadeIn();
		if(mode != 0 && mode < 8)
			$('#reload').fadeIn();
	});
	$('#resubmit').click(submit_survey);
	
    // Click on GO after selecting campus
	$('#go').click(function() {
		if ($('#campussel').get(0).selectedIndex > 0) {
			$('#overlay, #campus').fadeOut();
    		$('#magazine').css('top','142px');
		}
	});
	
	/*
	
	// NZ's cellphone confirmation & server side validation
	
	$('#no_change').click(function() {
		$('#cellphone_confirm').fadeOut();
		$('#cellphone').attr('disabled', false);
	});
	
	$('#yes_ready').click(function() {
		$('#cellphone_confirm').fadeOut();
		
		$.post(base_url + 'index.php/api/journey/numcheck', {
				num : $('#cellphone').val()
		}, function(data) {
			$('#cellphone').attr('disabled', false);
			if (data.exists) {
				$('#cellphone').fadeOut(100);
				$('#cell').fadeIn(200).css('top','182px').children('.msg').html(
					'<strong>Sorry it seems you\'ve already got some Jandals!</strong><br />If this is wrong come see us at our tables'
				);
				$('#navright').fadeOut();
				if (app) {
					setTimeout(reset_page, 5000);
				}
			} else {
				obj.stop().animate({left: -6086},500);
				$('#navstage').children().fadeOut(500);
				$('#navleft, #navright').fadeOut(500);
				$('#terms, #break').fadeOut();
				submit_survey();
			}
		}, "json").error(function () {
			$('#reverify').fadeIn();
		});
	});
	*/
    
    // Reveal the main interface
	$('#overlay, #campus').show();
	$('textarea').hide();
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
				obj.stop().animate({left: -460},500);
				break;
			case 2:
			 // The one thing I crave most is
				$('#navleft').stop().fadeOut();
				$("#cravemost input").show();
				$('#cravemost').stop().show();
				$('#stagename').text('Crave Most');
				obj.stop().animate({left: -1470},500,function() {
					//$('#coolest').focus();
				});
				$('#navstage').children().fadeIn();
				break;
			case 3:
				$('#cravemost').fadeOut(500);
				$('#stagename').text('Our Magazine');
				$('#magazine input').stop().show();
				obj.stop().animate({left: -2170},500,function() {
					$('#magchk').focus();
				});
				break;
			case 4:
				$('#stagename').text('Your Spiritual Journey');
				$('input[name=sj]').stop().show();
				obj.stop().animate({left: -2970},500,function() {
					$('input[name=sj]:first').focus();
				});
				break;
			case 5:
				$('#stagename').text('Beginning Your Journey');
				$('#jslide').stop().show();
				obj.stop().animate({left: -3870},500);
				break;
			case 6:
				$('#navstage').children().fadeOut();
				$('#navleft').stop().fadeOut();
				obj.stop().animate({left: -4830},500,function() {
					$('#name').focus();
				});
				$('#fname,#lname').stop().show();
				$('#you input, #you select, #you textarea').stop().show();
				break;
			case 7:
                $('#email').show();
				$('#cellphone, #yes_ready, #no_change').stop().show();
				$('#cellphone').attr('disabled', false);
				$('#cellphone_confirm').hide();
				obj.stop().animate({left: -5240},500,function() {
					$('#cellphone').focus();
				});
				break;
			case 8:
				$('#cellphone').attr('disabled', true).stop().show();
            /*
				$('#cellphone_confirm').children('input').stop().show();
				$('#cellphone_confirm').fadeIn();
            */
				mode = 7;

				$('#navstage').children().fadeOut(500);
				$('#navleft, #navright').fadeOut(500);
				$('#terms, #break').fadeOut();
				submit_survey();
				break;
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
			year : $('input[name=year]:checked').val(),

			campus : $('#campussel').val(),
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
	obj.stop().animate({left: -7086},500);
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
		case 2:
			if ($('#cravemost input:checked').val() == '') {
				$('#cravemost-error').fadeIn(200);
				return false;
			}
			break;
		case 4:
			if($('input[name=sj]:checked').length == 0){
				$('#spirit').fadeIn(200);
				return false;
			}
			break;
		case 5:
			if($( "#interest-number" ).text() == '0'){
				$('#slidererr').fadeIn(200);
				return false;
			}
			break;
		case 6:
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
			} else if($('#degree').val() == ''){
				$('#deterr').text('Select your Degree');
				$('#detail').fadeIn(200);
				return false;
			} else if($('#major').val() == 'Select an area of study'){
				$('#deterr').text('Select your Major');
				$('#detail').fadeIn(200);
				return false;
			} else if($('input[name=year]:checked').length == 0){
				$('#deterr').text('Select your Year at Uni');
				$('#detail').fadeIn(200);
				return false;
			}
			break;
		case 7:
			var phone = /^[\d\(\)-]{7,14}$/;
			if (!phone.test($('#cellphone').val())){
				$('#contact-error').fadeIn(200).css('top','199px').children('.msg').html('<strong>Forgetting something?</strong> Type in a valid number');
				return false;
			}
			var email = /^[\w.%-]+@[\w.-]+\.\w{2,5}$/;
			if (!email.test($('#email').val())){
				$('#contact-error').fadeIn(200).css('top','291px').children('.msg').html('<strong>Forgetting something?</strong> Type in a valid email address');
				return false;
			}
	}
	$('.error').fadeOut(100);
	return true;
}

function touchMove(event) {
	// Prevent scrolling on this element
	event.preventDefault();
}