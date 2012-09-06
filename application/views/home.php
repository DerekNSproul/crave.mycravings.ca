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
                <option value="Mount Saint Vincent University">Mount Saint Vincent University</option>
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
        </div>

        <div id="cravemost">

            <input type="radio" value="fun" name="cravemost" id="crave-fun" />
                <label for="crave-fun">fun</label>

            <input type="radio" value="relationship" name="cravemost" id="crave-relationship" />
                <label for="crave-relationship">relationship</label>

            <input type="radio" value="money" name="cravemost" id="crave-money" />
                <label for="crave-money">money</label>

            <input type="radio" value="good grades" name="cravemost" id="crave-grades" />
                <label for="crave-grades">good grades</label>
                
            <input type="radio" value="" name="cravemost" id="crave-other" class="radio-other" />
                <label for="crave-other">other
                <input type="text" value="" class="input-other" />
                </label>
                
        </div>
        
        <div id="magazine">
          <input type="radio" name="mag" value="spiritual connection" id="mag-spiritual" />
          <label for="mag-spiritual">spiritual connection</label>
          <input type="radio" name="mag" value="no, thanks" id="mag-no" />
          <label for="mag-no">no, thanks</label>
          <br />
          <input type="radio" name="mag" value="a real justice" id="mag-justice" />
          <label for="mag-justice">a real justice</label>
          <br />
          <input type="radio" name="mag" value="love without conditions" id="mag-love" />
          <label for="mag-love">love without conditions</label>
          <br />
          <input type="radio" name="mag" value="escape from the dreariness of life" id="mag-escape" />
          <label for="mag-escape">escape from the dreariness of life</label>cravemost
          <br />
          <input type="radio" name="mag" value="achievement &amp; success" id="mag-success" />
          <label for="mag-success">achievement &amp; success</label>
        </div>
        
        <div id="interest">
          <div id="jslide"></div>
        </div>

        <div id="journey">
          <input type="radio" id="options" name="sj" value="explore the deeper meaning of my cravings" />
          <label for="options">explore the deeper meaning of my cravings</label>
          <br />
          <input type="radio" id="online" name="sj" value="get connected to online resources about my cravings" />
          <label for="online">get connected to online resources about my cravings</label>
          <br />
          <input type="radio" id="hear" name="sj" value="hear more about Power to Change" />
          <label for="hear">hear more about Power to Change</label>
          <br />
          <input type="radio" id="grow" name="sj" value="grow in my relationship with Jesus" />
          <label for="grow">grow in my relationship with Jesus</label>
          <br />
          <input type="radio" id="nowhere" name="sj" value="do nothing right now" />
          <label for="nowhere">do nothing right now</label>
        </div>

        <div id="you">
          <div class="half_field"><textarea id="fname" placeholder="First Name" maxlength="17"></textarea></div>
          <div class="half_field"><textarea id="lname" placeholder="Last Name" maxlength="17"></textarea></div>
          <br />
          <div class="half_field">
              <div id="gender"> 
	          <input type="radio" id="male" name="gender" value="Male" />
	          <label for="male">Male</label>
	          <input type="radio" id="female" name="gender" value="Female" />
	          <label for="female"> Female</label>
	      </div>
          </div>
          <div class="half_field"><textarea id="cellphone" placeholder="Cellphone" maxlength="15"></textarea></div>

            <div class="full_field"><textarea id="email" placeholder="Email" name="email" maxlength="150"></textarea></div>
          <br />
            <div class="half_field"><textarea id="major" name="major" placeholder="Faculty/Degree" maxlength="80"></textarea></div>
            <div class="half_field"><select id="selyear" name="year">
            <option value="" selected="selected">Year of Study</option>
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Fourth Year</option>
            <option value="Fifth Year">Fifth Year</option>
            <option value="Graduate">Graduate</option>
            <option value="Doctoral">Doctoral</option>
            <option value="Faculty">Faculty</option>
            <option value="Other">Other</option>
          </select></div>
          <br />
          <div class="half_field"><input type="checkbox" id="residencecheck" value="international student" /><label for="residencecheck"> I live on campus</label></div>
          <div class="half_field"><textarea id="residence" placeholder="Which building?" name="residence" maxlength="80"></textarea></div>
          <br />

          <div class="full_field"><input type="checkbox" id="international" value="international student" /><label for="international"> I am an international student</label></div>
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
    <div id="terms">By giving us your email or phone number you grant permisison to Power to Change Ministries to contact you based on the information you requested. Full details of our privacy policy are online at <a href="http://powertochange.com/organization/privacy-policy" target="_blank">powertochange.com/organization/privacy-policy</a></div>
</div>

</body>
</html>
