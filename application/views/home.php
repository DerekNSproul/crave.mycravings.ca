<?php
date_default_timezone_set('America/Toronto');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cravings</title>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet">
<?php if ($app == 't') { ?>
<link type="text/css" href="css/app.css" rel="stylesheet">
<?php } ?>
<script type="text/javascript">
<!--[CDATA]-->
var base_url = "<?php echo base_url(); ?>";

<?php if ($app == 't') { ?>
	var app = true;
<?php } else { ?>
	var app = false;
<?php } ?>
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</head>

<body ontouchmove="touchMove(event);">
<div class="box" ontouchmove="touchMove(event);">
  <div class="container">
      <div id="debugmessage"></div>
    <div id="navstage">
      <div id="stagename">Welcome</div>
    </div>
    <form id="myform">
      <div id="slider">
        <!--<div id="white"></div>-->
        <div id="campus-error" class="error">
          <div class="msg"><strong>Forgetting something?</strong> Please make a selection</div>
        </div>
        <div id="cravemost-error" class="error">
          <div class="msg"><strong>Forgetting something?</strong> Please make a selection</div>
        </div>
        <div id="mag-error" class="error">
          <div class="msg"><strong>Forgetting something?</strong> Please make a selection</div>
        </div>

        <div id="spirit" class="error">
          <div class="msg"><strong>Forgetting something?</strong> Make a selection</div>
        </div>
        <div id="detail" class="error">
          <div class="msg"><strong>Forgetting something?</strong> <span id="deterr">Enter your name</span></div>
        </div>
        <div id="contact-error" class="error">
          <div class="msg"><strong>Forgetting something?</strong> Type in a valid mobile number</div>
        </div>
        <div id="slidererr" class="error">
          <div class="msg"><strong>Forgetting something?</strong> Move the slider to the right</div>
        </div>
        <div id="campusbox">
            <select id="campusselect" size="7">
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
        </div>

        <div id="cravemost">

            <input type="radio" value="warmup-fun" name="cravemost" id="crave-fun" />
                <label for="crave-fun">fun</label>

            <input type="radio" value="warmup-relationship" name="cravemost" id="crave-relationship" />
                <label for="crave-relationship">relationship</label>

            <input type="radio" value="warmup-money" name="cravemost" id="crave-money" />
                <label for="crave-money">money</label>

            <input type="radio" value="warmup-grades" name="cravemost" id="crave-grades" />
                <label for="crave-grades">good grades</label>
                
            <input type="radio" value="" name="cravemost" id="crave-other" class="radio-other" />
                <label for="crave-other">other
                <input type="text" value="" class="input-other" />
                </label>
                
        </div>
        
        <div id="magazine">
            <table>
                <tr>
                    <td><input type="radio" name="mag" value="magazine-spiritual" id="mag-spiritual" /><label for="mag-spiritual">spiritual connection</label></td>
                    <td><input type="radio" name="mag" value="magazine-justice" id="mag-justice" /><label for="mag-justice">a real justice</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="mag" value="magazine-success" id="mag-success" /><label for="mag-success">achievement &amp; success</label></td>
                    <td><input type="radio" name="mag" value="magazine-love" id="mag-love" /><label for="mag-love">love without conditions</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="mag" value="magazine-escape" id="mag-escape" /><label for="mag-escape">escape from the dreariness of life</label></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="radio" name="mag" value="magazine-no" id="mag-no" /><label for="mag-no">no, thanks</label></td>
                    <td></td>
                </tr>
            </table>
         </div>
        
        <div id="interest">
          <div id="jslide"></div>
        </div>

        <div id="journey">
          <input type="radio" id="options" name="sj" value="journey-explore" />
          <label for="options">explore the deeper meaning of my cravings</label>
          <br />
          <input type="radio" id="online" name="sj" value="journey-online" />
          <label for="online">get connected to online resources about my cravings</label>
          <br />
          <input type="radio" id="hear" name="sj" value="journey-p2c" />
          <label for="hear">hear more about Power to Change</label>
          <br />
          <input type="radio" id="grow" name="sj" value="journey-grow" />
          <label for="grow">grow in my relationship with Jesus</label>
          <br />
          <input type="radio" id="nowhere" name="sj" value="journey-nothing" />
          <label for="nowhere">do nothing right now</label>
        </div>

        <div id="you">
          <div class="half_field"><textarea id="fname" placeholder="First Name" maxlength="17"></textarea></div>
          <div class="half_field"><textarea id="lname" placeholder="Last Name" maxlength="17"></textarea></div>
          <br />
          <div class="half_field">
              <div id="gender"> 
	          <input type="radio" id="male" name="gender" value="2" />
	          <label for="male">Male</label>
	          <input type="radio" id="female" name="gender" value="1" />
	          <label for="female"> Female</label>
	      </div>
          </div>
          <div class="half_field"><textarea id="cellphone" placeholder="Cellphone" maxlength="15"></textarea></div>

            <div class="full_field"><textarea id="email" placeholder="Email" name="email" maxlength="150"></textarea></div>
          <br />
            <div class="half_field"><textarea id="major" name="major" placeholder="Faculty/Degree" maxlength="80"></textarea></div>
            <div class="half_field"><select id="selyear" name="year">
            <option value="" selected="selected">Year of Study</option>
            <option value="1">First Year</option>
            <option value="2">Second Year</option>
            <option value="3">Third Year</option>
            <option value="4">Fourth Year</option>
            <option value="5">Fifth Year</option>
            <option value="grad">Graduate</option>
            <option value="zDoctoral">Doctoral</option>
            <option value="zFaculty">Faculty</option>
            <option value="zOther">Other</option>
          </select></div>
          <br />
          <div class="half_field"><input type="checkbox" id="residencecheck" value="international student" /><label for="residencecheck"> I live on campus</label></div>
          <div class="half_field"><textarea id="residence" placeholder="Which building?" name="residence" maxlength="80"></textarea></div>
          <br />

          <div class="full_field"><input type="checkbox" id="international" value="yes" /><label for="international"> I am an international student</label></div>
        </div>
        
        <div id="cellphone_confirm">
          <input type="button" value="No, Change it" id="no_change" />
          <input type="button" value="Yes, Ready" id="yes_ready" />
        </div>

        <div id="interest-number">3</div>

      </div>
    </form>
    <div id="navright"></div>
    <div id="navleft"></div>
  </div>
  <div class="footer">
    <div id="reload" class="btn_footer">Reset Survey</div>
    <div id="resubmit" class="btn_footer">Retry Submission</div>
    <div id="reverify" class="btn_footer">Retry Verification</div>
    Copyright &copy; <!--?php echo date('Y'); ?-->2012 Power to Change </div>
    <div id="terms">By giving us your email or phone number you grant permission to Power to Change Ministries to contact you based on the information you requested. Full details of our privacy policy are online at <a href="http://powertochange.com/organization/privacy-policy" target="_blank">powertochange.com/organization/privacy-policy</a></div>
</div>

</body>
</html>
