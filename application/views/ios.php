
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" manifest="ios.appcache">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon" href="img/ios/logo.png" />
<link rel="stylesheet" href="css/jquery.mobile-1.0.1.min.css" />
<link rel="stylesheet" media="screen" type="text/css" href="css/ios/main.css" />
<link rel="stylesheet" media="only screen and (min-width:900px)" href="css/ios/ipad.css" />
<link rel="stylesheet" href="css/ios/add2home.css">
<title>Cravings</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.mobile-1.0.1.min.js"></script>
<script type="text/javascript">
document.ontouchmove = function(e) {
	if($('.ui-page-active').attr('id') != 'terms')
		e.preventDefault();
	};
var base_url = "<?php echo base_url(); ?>";
</script>
<script type="text/javascript" src="js/ios.js"></script>
</head>

<body>
<div id="step_zero" data-role="page">
  <div id="step_zero_box" class="box">
    <div class="img"><img src="img/ios/getstarted.png" width="460" /></div>
    <select id="campussel">
        <option value="" selected="selected">Choose One</option>
        <option value="30413">Acadia University - Wolfville</option>
        <option value="30414">Algonquin College</option>
        <option value="30415">Bishops University - Lennoxville-Sherbrooke</option>
        <option value="18">Brock University</option>
        <option value="19">Carleton University</option>
        <option value="4867">Cégep François-Xavier-Garneau</option>
        <option value="22459">Cégep St. Lawrence</option>
        <option value="30416">Cégep St. Limoilou</option>
        <option value="22457">Cégep Ste-Foy</option>
        <option value="22469">Centennial College</option>
        <option value="50">College of the Rockies</option>
        <option value="47">Concordia University</option>
        <option value="30417">Conestoga College</option>
        <option value="29">Dalhousie University</option>
        <option value="30418">Dawson College</option>
        <option value="48">Fanshawe College</option>
        <option value="22466">George Brown College</option>
        <option value="22465">Grant MacEwan University</option>
        <option value="22467">Humber College</option>
        <option value="54">Lakehead University</option>
        <option value="30419">Lakehead University - Orillia</option>
        <option value="22470">Langara College</option>
        <option value="30420">Laurentian University - Sudbury</option>
        <option value="39">McGill University</option>
        <option value="20">McMaster University</option>
        <option value="30421">Memorial University</option>
        <option value="22472">Mohawk College</option>
        <option value="49">Mount Allison University</option>
        <option value="30408">Mount Royal University</option>
        <option value="38329">Mount Saint Vincent University</option>
        <option value="30422">Niagara College - Welland Campus</option>
        <option value="30423">Nipissing University</option>
        <option value="4954">Ontario College of Art &amp; Design</option>
        <option value="21">Queen's University</option>
        <option value="36">Ryerson University</option>
        <option value="34">Saint Mary's University</option>
        <option value="22468">Seneca College</option>
        <option value="30424">Sheridan College - Brampton</option>
        <option value="51">Sheridan College - Oakville</option>
        <option value="12">Simon Fraser University</option>
        <option value="5451">Simon Fraser University - Surrey</option>
        <option value="38028">Simon Fraser University - Vancouver</option>
        <option value="30425">St. Francis Xavier - Antigonish</option>
        <option value="56987">St. Thomas University</option>
        <option value="52">Trent University</option>
        <option value="30426">Trent University - Oshawa</option>
        <option value="56">Trinity Western University</option>
        <option value="40">Universite de Montreal</option>
        <option value="42">Universite de Sherbrooke</option>
        <option value="41">Universite du Quebec</option>
        <option value="30129">Université du Québec à Montréal</option>
        <option value="30409">Université du Québec à Rimouski</option>
        <option value="30428">Université du Québec à Trois-Rivières</option>
        <option value="30427">Université du Québec en Outaouais</option>
        <option value="43">Universite Laval</option>
        <option value="13">University of Alberta</option>
        <option value="22462">University of Alberta - Augustana</option>
        <option value="17443">University of Alberta - Faculty Saint-Jean</option>
        <option value="14">University of British Columbia</option>
        <option value="22471">University of British Columbia - Okanagan</option>
        <option value="15">University of Calgary</option>
        <option value="22">University of Guelph</option>
        <option value="16">University of Manitoba</option>
        <option value="53">University of New Brunswick - Fredericton</option>
        <option value="22460">University of New Brunswick - Saint John</option>
        <option value="57">University of Ontario Institute of Technology</option>
        <option value="23">University of Ottawa</option>
        <option value="44">University of Regina</option>
        <option value="17">University of Saskatchewan</option>
        <option value="30429">University of the Fraser Valley</option>
        <option value="37">University of Toronto</option>
        <option value="4871">University of Toronto - Mississauga</option>
        <option value="17387">University of Toronto - Scarbourough</option>
        <option value="24">University of Victoria</option>
        <option value="25">University of Waterloo</option>
        <option value="30410">University of Waterloo School of Pharmacy</option>
        <option value="26">University of Western Ontario</option>
        <option value="38">University of Windsor</option>
        <option value="30430">University of Winnipeg</option>
        <option value="27">Wilfrid Laurier University</option>
        <option value="30411">Wilfrid Laurier University - Brantford</option>
        <option value="28">York University</option>
        <option value="22415">York University - Glendon</option>
        <option value="30412">Other</option>
    </select>
    <a href="#step_one" id="btn_campus" data-role="button" data-icon="arrow-r" data-iconpos="right"  data-theme="b">Next Question</a>
  </div>
</div>
<div id="step_one" data-role="page">
  <div id="step_one_box" class="box">
            <div class="Question">The one thing I crave the most is...</div>
        <div id="cravemost">
            <select id="cravemost-select">
                <option disabled="disabled" selected="selected" value="">Choose</option>
                <option value="warmup-fun">fun</option>
                <option value="warmup-relationship">relationship</option>
                <option value="warmup-money">money</option>
                <option value="warmup-grades">good grades</option>
                <option value="">other</option>
            </select>
                <input id="input-other" type="text" value="" placeholder="If other, please specify" class="input-other" />
                
        </div>
    <a href="#step_two" id="crave_next" data-role="button" data-icon="arrow-r" data-iconpos="right"  data-theme="b">Next Question</a></div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" disabled="disabled" data-icon="arrow-l" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_two" data-role="page">
  <div id="step_two_box" class="box">
      <div class="Question">I'd like a <strong>Free Magazine by Personal Delivery</strong> to help me explore my craving for...</div>
        <div id="magazine">
            <select id="magazine-select">
                <option disabled="disabled" selected="selected" value="">Choose</option>
                <option value="magazine-spiritual">spiritual connection</option>
                <option value="magazine-justice">a real justice</option>
                <option value="magazine-love">love without conditions</option>
                <option value="magazine-escape">escape from the dreariness of life</option>
                <option value="magazine-success">achievement &amp; success</option>
                <option value="magazine-no">no, thanks</option>
            </select>
        </div>
    <a href="#step_three" id="btn_who" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="b">Next Question</a> </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="arrow-l" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_three" data-role="page">
  <div id="step_three_box" class="box">
      <div class="Question"><strong>Power to Change</strong> loves to help students discover Jesus.<br /><br />
      How interested are you in having a chat about how to begin a journey with Jesus Christ?</div>
    <select id="interest-number">
      <option disabled="disabled" selected="selected">Choose</option>
      <option value="1">1 - Not Interested</option>
      <option value="2">2 - Maybe Not</option>
      <option value="3">3 - Maybe</option>
      <option value="4">4 - Yes</option>
      <option value="5">5 - Very Interested</option>
    </select>
    <a href="#step_four" id="btn_interest" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="b">Next Question</a>
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="arrow-l" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_four" data-role="page">
  <div id="step_four_box" class="box">
      <div class="Question">On my spiritual journey I'd like to...</div>
        <div id="spiritual_journey">
            <select id="sj-select">
                <option disabled="disabled" selected="selected" value="">Choose</option>
                <option value="journey-explore">explore the deeper meaning of my cravings</option>
                <option value="journey-online">get connected to online resources about my cravings</option>
                <option value="journey-p2c">hear more about Power to Change</option>
                <option value="journey-grow">grow in my relationship with Jesus</option>
                <option value="journey-nothing">do nothing right now</option>
            </select>
        </div>
    <a id="btn_sj" href="#step_five" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="b">Next Question</a> </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="arrow-l" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_five" data-role="page">
  <div id="step_five_box" class="box">
      <div class="Question">Tell us a little about yourself. (1/2)</div>
        <div>
            <input placeholder="First Name" type="text" name="fname" id="fname" value="" maxlength="20"  />
            <input placeholder="Last Name" type="text" name="lname" id="lname" value="" maxlength="20"  />
            <select id="gender">
                <option disabled="disabled" selected="selected">Gender</option>
                <option value="2">Male</option>
                <option value="1">Female</option>
            </select>
          <input id="cellphone" name="cellphone" type="tel" placeholder="Cellphone" value="" maxlength="15" />
          <input id="email" name="email" type="email" placeholder="Email" value="" maxlength="150" />
        </div>
    <a id="btn_info" href="#step_six" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="b">Next</a> </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="arrow-l" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_six" data-role="page">
    <div id="step_six_box" class="box">
      <div class="Question">Tell us a little about yourself. (2/2)</div>
        <div>
          <input id="major" name="major" type="text" placeholder="Faculty/Degree" value="" maxlength="150" />
            <select id="selyear" name="year">
            <option value="" disabled="disabled" selected="selected">Year of Study</option>
            <option value="1">First Year</option>
            <option value="2">Second Year</option>
            <option value="3">Third Year</option>
            <option value="4">Fourth Year</option>
            <option value="5">Fifth Year</option>
            <option value="grad">Graduate</option>
            <option value="zDoctoral">Doctoral</option>
            <option value="zFaculty">Faculty</option>
            <option value="zOther">Other</option>
          </select>
          <input type="checkbox" id="residencecheck" value="international student" /><label for="residencecheck"> I live on campus</label>
          <input id="residence" name="residence" type="text" placeholder="Which building?" value="" maxlength="80" />
          <input type="checkbox" id="international" value="yes" /><label for="international"> I am an international student</label>
        </div>
    <input type="button" id="btn_submit" data-role="button" data-icon="arrow-r" data-iconpos="right" value="Submit" data-theme="b" />
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="arrow-l" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_seven" data-role="page">
  <div id="step_seven_box" class="box">
          <div class="Question">Communicating with the server, please wait...</div>
    <p id="server-message-area" ></p>
  </div>

  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" id="btn_retry" disabled="disabled" data-icon="refresh" value="Retry" />
    </span></div>
</div>
<div id="step_eight" data-role="page">
  <div id="step_eight_box" class="box">
          <div class="Question">THANKS FOR SHARING YOUR CRAVINGS WITH US! </div>
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="arrow-l" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>

<div id="terms" data-role="page">
  <div data-role="header">
    <h1>Cravings</h1>
  </div>
  <div data-role="content" id="content-box">
    <div id="tnc">
      By giving us your email or phone number you grant permisison to Power to Change Ministries to contact you based on the information you requested. Full details of our privacy policy are online at <a href="http://powertochange.com/organization/privacy-policy">powertochange.com/organization/privacy-policy</a>      <p>Power to Change © 2012 All Rights Reserved.</p>
    </div>
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a">
    <h1>Copyright &copy; 2012 Power to Change</h1>
  </div>
</div>
</body>
</html>
