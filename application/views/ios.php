
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
                <option value="" disabled="disabled" selected="selected">Choose One</option>
                <option value="Acadia University - Wolfville">Acadia University - Wolfville</option>
                <option value="Algonquin College">Algonquin College</option>
                <option value="Bishops University - Lennoxville-Sherbrooke">Bishops University - Lennoxville-Sherbrooke</option>
                <option value="Brock University">Brock University</option>
                <option value="Carleton University">Carleton University</option>
                <option value="Cégep Dawson">Cégep Dawson</option>
                <option value="Cégep François-Xavier-Garneau">Cégep François-Xavier-Garneau</option>
                <option value="Cégep St. Lawrence">Cégep St. Lawrence</option>
                <option value="Cégep St. Limoilou">Cégep St. Limoilou</option>
                <option value="Cégep Ste-Foy">Cégep Ste-Foy</option>
                <option value="Centennial College">Centennial College</option>
                <option value="College of the Rockies">College of the Rockies</option>
                <option value="Concordia University">Concordia University</option>
                <option value="Conestoga College">Conestoga College</option>
                <option value="Dalhousie University">Dalhousie University</option>
                <option value="Fanshawe College">Fanshawe College</option>
                <option value="George Brown College">George Brown College</option>
                <option value="Grant MacEwan University">Grant MacEwan University</option>
                <option value="Humber College">Humber College</option>
                <option value="Lakehead University">Lakehead University</option>
                <option value="Lakehead University - Orillia">Lakehead University - Orillia</option>
                <option value="Langara College">Langara College</option>
                <option value="Laurentian University - Sudbury">Laurentian University - Sudbury</option>
                <option value="McGill University">McGill University</option>
                <option value="McMaster University">McMaster University</option>
                <option value="Memorial University">Memorial University</option>
                <option value="Mohawk College">Mohawk College</option>
                <option value="Mount Allison University">Mount Allison University</option>
                <option value="Mount Royal University">Mount Royal University</option>
                <option value="Niagara College - Welland Campus">Niagara College - Welland Campus</option>
                <option value="Nipissing University">Nipissing University</option>
                <option value="Ontario College of Art &amp; Design">Ontario College of Art &amp; Design</option>
                <option value="Queen's University">Queen's University</option>
                <option value="Ryerson University">Ryerson University</option>
                <option value="Saint Mary's University">Saint Mary's University</option>
                <option value="Seneca College">Seneca College</option>
                <option value="Sheridan College - Brampton">Sheridan College - Brampton</option>
                <option value="Sheridan College - Oakville">Sheridan College - Oakville</option>
                <option value="Simon Fraser University">Simon Fraser University</option>
                <option value="Simon Fraser University - Surrey">Simon Fraser University - Surrey</option>
                <option value="Simon Fraser University - Vancouver">Simon Fraser University - Vancouver</option>
                <option value="St. Francis Xavier - Antigonish">St. Francis Xavier - Antigonish</option>
                <option value="Trent University">Trent University</option>
                <option value="Trent University - Oshawa">Trent University - Oshawa</option>
                <option value="Trinity Western University">Trinity Western University</option>
                <option value="Universite de Montreal">Universite de Montreal</option>
                <option value="Universite de Sherbrooke">Universite de Sherbrooke</option>
                <option value="Universite du Quebec">Universite du Quebec</option>
                <option value="Université du Québec à Montréal">Université du Québec à Montréal</option>
                <option value="Université du Québec à Rimouski">Université du Québec à Rimouski</option>
                <option value="Université du Québec à Trois-Rivières">Université du Québec à Trois-Rivières</option>
                <option value="Université du Québec en Outaouais">Université du Québec en Outaouais</option>
                <option value="Universite Laval">Universite Laval</option>
                <option value="University of Alberta">University of Alberta</option>
                <option value="University of Alberta - Augustana">University of Alberta - Augustana</option>
                <option value="University of Alberta - Faculty Saint-Jean">University of Alberta - Faculty Saint-Jean</option>
                <option value="University of British Columbia">University of British Columbia</option>
                <option value="University of British Columbia - Okanagan">University of British Columbia - Okanagan</option>
                <option value="University of Calgary">University of Calgary</option>
                <option value="University of Guelph">University of Guelph</option>
                <option value="University of Manitoba">University of Manitoba</option>
                <option value="University of New Brunswick - Fredericton">University of New Brunswick - Fredericton</option>
                <option value="University of New Brunswick - Saint John">University of New Brunswick - Saint John</option>
                <option value="University of Ontario Institute of Technology">University of Ontario Institute of Technology</option>
                <option value="University of Ottawa">University of Ottawa</option>
                <option value="University of Regina">University of Regina</option>
                <option value="University of Saskatchewan">University of Saskatchewan</option>
                <option value="University of the Fraser Valley">University of the Fraser Valley</option>
                <option value="University of Toronto">University of Toronto</option>
                <option value="University of Toronto - Mississauga">University of Toronto - Mississauga</option>
                <option value="University of Toronto - Scarbourough">University of Toronto - Scarbourough</option>
                <option value="University of Victoria">University of Victoria</option>
                <option value="University of Waterloo">University of Waterloo</option>
                <option value="University of Waterloo School of Pharmacy">University of Waterloo School of Pharmacy</option>
                <option value="University of Western Ontario">University of Western Ontario</option>
                <option value="University of Windsor">University of Windsor</option>
                <option value="University of Winnipeg">University of Winnipeg</option>
                <option value="Wilfrid Laurier University">Wilfrid Laurier University</option>
                <option value="Wilfrid Laurier University - Brantford">Wilfrid Laurier University - Brantford</option>
                <option value="York University">York University</option>
                <option value="York University - Glendon">York University - Glendon</option>
                <option value="Other">Other</option>
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
                <option value="fun">fun</option>
                <option value="relationship">relationship</option>
                <option value="money">money</option>
                <option value="good grades">good grades</option>
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
                <option value="spiritual connection">spiritual connection</option>
                <option value="a real justice">a real justice</option>
                <option value="love without conditions">love without conditions</option>
                <option value="escape from the dreariness of life">escape from the dreariness of life</option>
                <option value="achievement &amp; success">achievement &amp; success</option>
                <option value="no, thanks">no, thanks</option>
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
                <option value="explore the deeper meaning of my cravings">explore the deeper meaning of my cravings</option>
                <option value="get connected to online resources about my cravings">get connected to online resources about my cravings</option>
                <option value="hear more about Power to Change">hear more about Power to Change</option>
                <option value="grow in my relationship with Jesus">grow in my relationship with Jesus</option>
                <option value="do nothing right now">do nothing right now</option>
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
                <option value="Male">Male</option>
                <option value="Female">Female</option>
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
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Fourth Year</option>
            <option value="Fifth Year">Fifth Year</option>
            <option value="Graduate">Graduate</option>
            <option value="Doctoral">Doctoral</option>
            <option value="Faculty">Faculty</option>
            <option value="Other">Other</option>
          </select>
          <input type="checkbox" id="residencecheck" value="international student" /><label for="residencecheck"> I live on campus</label>
          <input id="residence" name="residence" type="text" placeholder="Which building?" value="" maxlength="80" />
          <input type="checkbox" id="international" value="international student" /><label for="international"> I am an international student</label>
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
