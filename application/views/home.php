<?php
date_default_timezone_set('America/Toronto');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>On the Journey</title>
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
    <div id="navstage">
      <div id="stagename">Welcome</div>
    </div>
    <form id="myform">
      <div id="slider">
        <div id="white"></div>
        <div id="cravemost-error" class="error">
          <div class="msg"><strong>Forgetting something?</strong> Type into the box provided</div>
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

        <div id="cravemost">
            <p>The one thing I crave most is:</p>

            <input type="radio" value="fun" name="cravemost" id="crave-fun" />
                <label for="crave-fun">fun</label>

            <input type="radio" value="relationship" name="cravemost" id="crave-relationship" />
                <label for="crave-relationship">relationship</label>

            <input type="radio" value="money" name="cravemost" id="crave-money" />
                <label for="crave-money">money</label>

            <input type="radio" value="good grades" name="cravemost" id="crave-grades" />
                <label for="crave-grades">good grades</label>
                
            <input type="radio" value="" name="cravemost" id="crave-other" class="radio-other" />
                <label for="crave-other">
                <input type="text" value="" class="input-other" />
                </label>
                
        </div>
        
        <div id="magazine">
          <input type="radio" name="mag" value="spiritual connection" id="mag-spiritual" />
          <label for="mag-spiritual">spiritual connection</label>
          <br />
          <input type="radio" name="mag" value="a real justice" id="mag-justice" />
          <label for="mag-justice">a real justice</label>
          <br />
          <input type="radio" name="mag" value="love without conditions" id="mag-love" />
          <label for="mag-love">love without conditions</label>
          <br />
          <input type="radio" name="mag" value="escape from the dreariness of life" id="mag-escape" />
          <label for="mag-escape">escape from the dreariness of life</label>
          <br />
          <input type="radio" name="mag" value="achievement &amp; success" id="mag-success" />
          <label for="mag-success">achievement &amp; success</label>
          <br />
          <input type="radio" name="mag" value="no, thanks" id="mag-no" />
          <label for="mag-no">no, thanks</label>
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

        <div id="interest">
          <div id="jslide"></div>
        </div>

        <div id="you">
          <textarea id="fname" placeholder="First" maxlength="17"></textarea>
          <textarea id="lname" placeholder="Last" maxlength="17"></textarea>
          <br />
          <div id="gender"> <!-- ADDED Aug 7, 2012 -->
	          <input type="radio" id="male" name="gender" value="male" />
	          <label for="male">Male</label>
	          <input type="radio" id="female" name="gender" value="female" />
	          <label for="female"> Female</label>
	      </div>
          <br />
          <!-- <label for="major">Faculty/Degree</label> -->
          <textarea id="major" name="major" maxlength="80"></textarea>
          <br />
          <input type="radio" id="y1" name="year" value="First Year" />
          <label for="y1">1</label>
          <input type="radio" id="y2" name="year" value="Second Year" />
          <label for="y2">2</label>
          <input type="radio" id="y3" name="year" value="Third Year" />
          <label for="y3">3</label>
          <input type="radio" id="y4" name="year" value="Fourth Year" />
          <label for="y4">4</label>
          <input type="radio" id="y5" name="year" value="Fifth Year" />
          <label for="y5">5</label>
          <input type="radio" id="grad" name="year" value="Graduate" />
          <label for="grad">Graduate</label>
          <input type="radio" id="doctoral" name="year" value="Doctoral" />
          <label for="doctoral">Doctoral</label>
          <input type="radio" id="faculty" name="year" value="Faculty" />
          <label for="faculty">Faculty</label>
          <input type="radio" id="year-other" name="year" value="Other" />
          <label for="year-other">Other</label>
          <br />
            
          <label for="residence">Campus Residence</label>
          <textarea id="residence" name="residence" maxlength="80"></textarea>
          <br />

          <input type="checkbox" id="international" value="international student" /><label for="international">I am an international student</label>
        </div>
        
        <div id="contact">
            <textarea id="cellphone" maxlength="15"></textarea>
            <label for="email" id="email-label">E-mail address:</label>
            <input type="text" id="email" name="email" value="" />
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
    <a id="terms">Terms and Conditions</a><span id="break"> | </span>Copyright &copy; <!--?php echo date('Y'); ?-->2012 Student Life </div>
</div>
<div id="overlay">
  <div class="box" id="campus">
    <div class="container">
      <div id="campusbox">
        <select id="campussel">
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
        <div id="go">Go</div>
      </div>
    </div>
  </div>
  <div class="box" ontouchmove="touchMove(event);" id="termsbox">
    <div class="container">
      <div id="tnc">
        <h1>On The Journey - Terms and Conditions</h1>
        <h3>In completing our survey you are deemed to have read and agreed to the following terms and conditions</h3>
        <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: "Client", “You” and “Your” refers to you, the person accessing this website and accepting the Organization’s terms and conditions. "The Organization ", “Ourselves”, “We” and "Us" refers to our Organization. “Party”, “Parties”, or “Us” refers to the Client and us, or either the Client or us. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration or any other means, for the express purpose of meeting the Client’s needs in respect of provision of the Organization’s stated services/products, in accordance with and subject to prevailing English Law. Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to it.</p>
        <h3>Privacy Statement</h3>
        <p>We are committed to protecting your privacy. Authorized employees within the organization on a need to know basis only use any information collected from individual customers. We constantly review our systems and data to ensure the best possible service to our customers. Parliament has created specific offences for unauthorised actions against computer systems and data. We will investigate any such actions with a view to prosecuting and/or taking civil proceedings to recover damages against those responsible.</p>
        <h3>Confidentiality</h3>
        <p>Client records are regarded as confidential and therefore will not be divulged to any third party other than Tandem Ministries and, if legally required to do so, to the appropriate authorities. Clients have the right to request sight of, and copies of any and all Client Records we keep, on the provison that we are given reasonable notice of such a request. Clients are requested to retain copies of any literature issued in relation to the provision of our services. Where appropriate, we shall issue Client’s with appropriate written information, handouts or copies of records as part of an agreed contract for the benefit of both parties. Data is kept secure in accordance with the Privacy Act 1993.</p>
        <p>We will not sell, share, or rent your personal information to any third party or use your e-mail address for unsolicited mail. Any SMSes or emails sent by this Organization will only be in connection with the provision of agreed services and products.</p>
        <h3>Disclaimer - Exclusions and Limitations</h3>
        The information on this survey is provided on an "as is" basis. To the fullest extent permitted by law, this Organization:
        <ul>
          <li>excludes all representations and warranties relating to this survey and its contents or which is or may be provided by any affiliates or any other third party, including in relation to any inaccuracies or omissions in this website and/or the Organization’s literature; and</li>
          <li>excludes all liability for damages arising out of or in connection with your use of this survey. This includes, without limitation, direct loss, loss of business or profits (whether or not the loss of such profits was foreseeable, arose in the normal course of things or you have advised this Organization of the possibility of such potential loss), damage caused to your computer, computer software, systems and programs and the data thereon or any other direct or indirect, consequential and incidental damages.</li>
        </ul>
        <p>This Organization does not however exclude liability for death or personal injury caused by its negligence. The above exclusions and limitations apply only to the extent permitted by law. None of your rights as a consumer are affected. </p>
        <h3>Termination of Agreements and Refunds Policy</h3>
        <p>Both the Client and we have the right to terminate any Services Agreement for any reason, including the ending of services that are already underway. No refunds shall be offered where a Service is deemed to have begun and is, for all intents and purposes, underway. Any monies that have been paid to us which constitute payment in respect of the provision of unused Services shall be refunded.</p>
        <h3>Availability </h3>
        <p> Unless otherwise stated, the services featured on this survey are only available in New Zealand, or in relation to postings from New Zealand. All advertising is intended solely for the New Zealand market. You are solely responsible for evaluating the fitness for a particular purpose of any downloads, programs and text available through this survey. Redistribution or republication of any part of this survey or its content is prohibited, including such by framing or other similar or any other means, without the express written consent of the Organization. The Organization does not warrant that the service from this site will be uninterrupted, timely or error free, although it is provided to the best ability. By using this service you thereby indemnify this Organization, its employees, agents and affiliates against any loss or damage, in whatever manner, howsoever caused.</p>
        <h3>Log Files</h3>
        <p> We use IP addresses to analyse trends, administer the survey, track user’s movement, and gather broad demographic information for aggregate use. IP addresses are not linked to personally identifiable information. Additionally, for systems administration, detecting usage patterns and troubleshooting purposes, our web servers automatically log standard access information including browser type, access times/open mail, URL requested, and referral URL. This information is not shared with third parties and is used only within this Organization on a need-to-know basis. Any individually identifiable information related to this data will never be used in any way different to that stated above without your explicit permission.</p>
        <h3>Cookies</h3>
        <p> Like most interactive survey’s this Organizations survey uses cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. Some of our affiliate partners may also use cookies.</p>
        <h3>Links to this Survey </h3>
        <p> You may not create a link to any page of this survey without our prior written consent. If you do create a link to a page of this survey you do so at your own risk and the exclusions and limitations set out above will apply to your use of this survey by linking to it.</p>
        <h3>Links from this Survey </h3>
        <p> We do not monitor or review the content of other party’s websites which are linked to from this survey. Opinions expressed or material appearing on such websites are not necessarily shared or endorsed by us and should not be regarded as the publisher of such opinions or material. Please be aware that we are not responsible for the privacy practices, or content, of these sites. We encourage our users to be aware when they leave our survey &amp; to read the privacy statements of these sites. You should evaluate the security and trustworthiness of any other site connected to this site or accessed through this survey yourself, before disclosing any personal information to them. This Organization will not accept any responsibility for any loss or damage in whatever manner, howsoever caused, resulting from your disclosure to third parties of personal information.</p>
        <h3>Copyright Notice </h3>
        <p> Copyright and other relevant intellectual property rights exists on all text relating to the Organization’s services and the full content of this survey. </p>
        <h3>Communication</h3>
        <p> We have several different e-mail addresses for different queries. These, &amp; other contact information, can be found on our Contact Us link on our website or via Tandem Ministries literature or via the Tandem Ministries stated telephone, facsimile or mobile telephone numbers.</p>
        <h3>Force Majeure</h3>
        <p> Neither party shall be liable to the other for any failure to perform any obligation under any Agreement which is due to an event beyond the control of such party including but not limited to any Act of God, terrorism, war, Political insurgence, insurrection, riot, civil unrest, act of civil or military authority, uprising, earthquake, flood or any other natural or man made eventuality outside of our control, which causes the termination of an agreement or contract entered into, nor which could have been reasonably foreseen. Any Party affected by such event shall forthwith inform the other Party of the same and shall use all reasonable endeavours to comply with the terms and conditions of any Agreement contained herein.</p>
        <h3>Waiver</h3>
        <p> Failure of either Party to insist upon strict performance of any provision of this or any Agreement or the failure of either Party to exercise any right or remedy to which it, he or they are entitled hereunder shall not constitute a waiver thereof and shall not cause a diminution of the obligations under this or any Agreement. No waiver of any of the provisions of this or any Agreement shall be effective unless it is expressly stated to be such and signed by both Parties.</p>
        <h3>General</h3>
        <p> The laws of New Zealand govern these terms and conditions. By accessing this survey you consent to these terms and conditions and to the exclusive jurisdiction of the New Zealand courts in all disputes arising out of such access. If any of these terms are deemed invalid or unenforceable for any reason (including, but not limited to the exclusions and limitations set out above), then the invalid or unenforceable provision will be severed from these terms and the remaining terms will continue to apply. Failure of the Organization to enforce any of the provisions set out in these Terms and Conditions and any Agreement, or failure to exercise any option to terminate, shall not be construed as waiver of such provisions and shall not affect the validity of these Terms and Conditions or of any Agreement or any part thereof, or the right thereafter to enforce each and every provision. These Terms and Conditions shall not be amended, modified, varied or supplemented except in writing and signed by duly authorised representatives of the Organization.</p>
        <h3>Notification of Changes</h3>
        <p>The Organization reserves the right to change these conditions from time to time as it sees fit and your continued use of the site will signify your acceptance of any adjustment to these terms. If there are any changes to our privacy policy, we will announce that these changes have been made on our home page and on other key pages on our site. If there are any changes in how we use our site, customers’ Personally Identifiable Information, notification by e-mail or postal mail will be made to those affected by this change. Any changes to our privacy policy will be posted on our website 30 days prior to these changes taking place. You are therefore advised to re-read this statement on a regular basis.</p>
        <p>These terms and conditions form part of the Agreement between the Client and us. Your accessing of this survey and/or undertaking of a booking or Agreement indicate your understanding, agreement to and acceptance, of the Disclaimer Notice and the full Terms and Conditions contained herein. Your statutory Consumer Rights are unaffected.</p>
        Tandem Ministries &copy; 2012 All Rights Reserved. </div>
    </div>
    <div id="close">Close</div>
  </div>
</div>
</body>
</html>
