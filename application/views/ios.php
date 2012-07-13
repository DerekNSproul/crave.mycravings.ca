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
<title>Journey</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.mobile-1.0.1.min.js"></script>
<script type="application/javascript" src="js/add2home.js"></script>
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
    <div class="img"><img src="img/ios/step0.png" width="460" /></div>
    <select id="campussel">
      <option disabled="disabled">Choose</option>
      <option value="Auckland">Auckland</option>
      <option value="Waikato">Waikato</option>
      <option value="Massey Palmy">Massey Palmy</option>
      <option value="Wellington">Wellington</option>
      <option value="Canterbury">Canterbury</option>
      <option value="Otago">Otago</option>
    </select>
    <input type="button" id="btn_campus" data-role="button" data-icon="arrow-r" data-iconpos="right" value="Submit" disabled="disabled" data-theme="b" />
  </div>
</div>
<div id="step_one" data-role="page">
  <div id="step_one_box" class="box">
    <div class="img"><img src="img/ios/step1.png" width="460" /></div>
    <a href="#step_two" data-role="button" data-icon="arrow-r" data-iconpos="right"  data-theme="b">Begin</a></div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" disabled="disabled" data-icon="delete" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_two" data-role="page">
  <div id="step_two_box" class="box">
    <div class="img"><img src="img/ios/step2.png" width="460" /></div>
    <a href="#step_three" id="btn_who" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="b">Get Started</a> </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="delete" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_three" data-role="page">
  <div id="step_three_box" class="box">
    <div class="img"><img src="img/ios/step3.png" width="460" /></div>
    <input id="coolest" type="text" maxlength="20" />
    <input type="button" class="initial_disable" id="btn_coolest" data-role="button" data-icon="arrow-r" data-iconpos="right" value="Next Question" disabled="disabled" data-theme="b" />
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="delete" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_four" data-role="page">
  <div id="step_four_box" class="box">
    <div class="img"><img src="img/ios/step4.png" width="460" /></div>
    <div data-role="fieldcontain">
      <fieldset data-role="controlgroup" class="ss">
        <input type="checkbox" name="studying" id="studying" class="custom" checked="checked" />
        <label for="studying">Studying successfully</label>
        <input type="checkbox" name="relation" id="relation" class="custom decheck" />
        <label for="relation">Having fulfilling relationships</label>
        <input type="checkbox" name="lifesqs" id="lifesqs" class="custom decheck" />
        <label for="lifesqs">Answering life's big questions</label>
        <input type="checkbox" name="sports" id="sports" class="custom decheck" />
        <label for="sports">Being competitive at sports</label>
      </fieldset>
    </div>
    <a href="#step_five" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="b">Next Question</a> </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="delete" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_five" data-role="page">
  <div id="step_five_box" class="box">
    <div class="img"><img src="img/ios/step5.png" width="460" /></div>
    <div data-role="fieldcontain">
      <fieldset data-role="controlgroup" class="ss">
        <input type="radio" name="sj" id="options" value="Find out more about my options" />
        <label for="options">Find out more about my options</label>
        <input type="radio" name="sj" id="more" value="Hear more about StudentLife"  />
        <label for="more">Hear more about StudentLife</label>
        <input type="radio" name="sj" id="grow" value="Grow closer to God"  />
        <label for="grow">Grow closer to God</label>
        <input type="radio" name="sj" id="nowhere" value="Go nowhere"  />
        <label for="nowhere">Go nowhere</label>
      </fieldset>
    </div>
    <input type="button" class="initial_disable" id="btn_sj" data-role="button" data-icon="arrow-r" data-iconpos="right" value="Next Question" disabled="disabled" data-theme="b" />
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="delete" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_six" data-role="page">
  <div id="step_six_box" class="box">
    <div class="img"><img src="img/ios/step6.png" width="460" /></div>
    <select id="interest-number">
      <option disabled="disabled" selected="selected">Choose</option>
      <option value="1">1 - Nup</option>
      <option value="2">2 - Hmm, Yeah?</option>
      <option value="3">3 - Maybe</option>
      <option value="4">4 - Likely</option>
      <option value="5">5 - Definitely</option>
    </select>
    <input type="button" class="initial_disable" id="btn_slider" data-role="button" data-icon="arrow-r" data-iconpos="right" value="Finish Up" disabled="disabled" data-theme="b" />
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="delete" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_seven" data-role="page">
  <div id="step_seven_box" class="box">
    <div class="img"><img src="img/ios/step7.png" width="460" /></div>
    <div data-role="fieldcontain">
      <input placeholder="First Name" type="text" name="fname" id="fname" value="" maxlength="20"  />
      <input placeholder="Last Name" type="text" name="lname" id="lname" value="" maxlength="20"  />
      <select id="gender">
        <option disabled="disabled" selected="selected">Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      <select id="major">
        <option disabled="disabled" selected="selected">Area of Study</option>
        <option value="Accounting">Accounting</option>
        <option value="Anatomy">Anatomy</option>
        <option value="Anthropology">Anthropology</option>
        <option value="Archaeology">Archaeology</option>
        <option value="Art History">Art History</option>
        <option value="Biochemistry">Biochemistry</option>
        <option value="Bioengineering">Bioengineering</option>
        <option value="Bioethics">Bioethics</option>
        <option value="Biology">Biology</option>
        <option value="Biomedical Sciences">Biomedical Sciences</option>
        <option value="Biotechnology">Biotechnology</option>
        <option value="Botany">Botany</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Classics">Classics</option>
        <option value="Clothing and Textile Sciences">Clothing and Textile Sciences</option>
        <option value="Commerce">Commerce</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Dance Studies">Dance Studies</option>
        <option value="Dental Technology">Dental Technology</option>
        <option value="Dental Therapy">Dental Therapy</option>
        <option value="Dentistry">Dentistry</option>
        <option value="Design Studies">Design Studies</option>
        <option value="Development Studies">Development Studies</option>
        <option value="Dietetics">Dietetics</option>
        <option value="Early Childhood Education">Early Childhood Education</option>
        <option value="Ecology">Ecology</option>
        <option value="Economics">Economics</option>
        <option value="Education">Education</option>
        <option value="Energy Studies">Energy Studies</option>
        <option value="Engineering">Engineering</option>
        <option value="English">English</option>
        <option value="Environmental Science">Environmental Science</option>
        <option value="Film and Media Studies">Film and Media Studies</option>
        <option value="Finance">Finance</option>
        <option value="Forensic Science">Forensic Science</option>
        <option value="Food Science">Food Science</option>
        <option value="Gender Studies">Gender Studies</option>
        <option value="Genetics">Genetics</option>
        <option value="Geography">Geography</option>
        <option value="Geology">Geology</option>
        <option value="Geophysics">Geophysics</option>
        <option value="Health Sciences">Health Sciences</option>
        <option value="History">History</option>
        <option value="Human Nutrition">Human Nutrition</option>
        <option value="Indigenous Studies">Indigenous Studies</option>
        <option value="Information Science">Information Science</option>
        <option value="Languages">Languages</option>
        <option value="Law">Law</option>
        <option value="Linguistics">Linguistics</option>
        <option value="Management">Management</option>
        <option value="Marketing">Marketing</option>
        <option value="Maori Studies">Maori Studies</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Medical Laboratory Science">Medical Laboratory Science</option>
        <option value="Medicine">Medicine</option>
        <option value="Microbiology">Microbiology</option>
        <option value="Music">Music</option>
        <option value="Neuroscience">Neuroscience</option>
        <option value="Nursing">Nursing</option>
        <option value="Occupational Health">Occupational Health</option>
        <option value="Pharmacology">Pharmacology</option>
        <option value="Pharmacy">Pharmacy</option>
        <option value="Philosophy">Philosophy</option>
        <option value="Physical Education">Physical Education</option>
        <option value="Physics">Physics</option>
        <option value="Physiology">Physiology</option>
        <option value="Physiotherapy">Physiotherapy</option>
        <option value="Planning">Planning</option>
        <option value="Politics">Politics</option>
        <option value="Psychology">Psychology</option>
        <option value="Religious Studies">Religious Studies</option>
        <option value="Social Work">Social Work</option>
        <option value="Sociology">Sociology</option>
        <option value="Statistics">Statistics</option>
        <option value="Surveying">Surveying</option>
        <option value="Teaching">Teaching</option>
        <option value="Theology">Theology</option>
        <option value="Tourism">Tourism</option>
        <option value="Zoology  ">Zoology </option>
        <option value="Other/Undeclared">Other/Undeclared</option>
      </select>
      <select id="year">
        <option disabled="disabled" selected="selected">Year of Study</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="Postgraduate">Postgraduate</option>
      </select>
      <select id="w_hall" class="halls">
        <option disabled="disabled" selected="selected">Halls of Residence</option>
        <option value="None">None</option>
        <option value="College Hall">College Hall</option>
        <option value="Student Village">Student Village</option>
        <option value="Bryant Hall">Bryant Hall</option>
        <option value="Orchard Park">Orchard Park</option>
      </select>
      <select id="c_hall" class="halls">
        <option disabled="disabled" selected="selected">Halls of Residence</option>
        <option value="None">None</option>
        <option value="Bishop Julius">Bishop Julius</option>
        <option value="College House">College House</option>
        <option value="Ilam Apartments">Ilam Apartments</option>
        <option value="Rochester and Rutherford">Rochester and Rutherford</option>
        <option value="University Hall">University Hall</option>
        <option value="Sonoda Campus">Sonoda Campus</option>
      </select>
      <select id="o_hall" class="halls">
        <option disabled="disabled" selected="selected">Halls of Residence</option>
        <option value="None">None</option>
        <option value="Abbey">Abbey</option>
        <option value="Aquinas">Aquinas</option>
        <option value="Arana">Arana</option>
        <option value="Carrington">Carrington</option>
        <option value="City College">City College</option>
        <option value="Cumberland College">Cumberland College</option>
        <option value="Cumberland Court">Cumberland Court</option>
        <option value="Hayward">Hayward</option>
        <option value="Knox">Knox</option>
        <option value="Salmond">Salmond</option>
        <option value="Selwyn">Selwyn</option>
        <option value="Studholme">Studholme</option>
        <option value="St. Margaret">St. Margaret</option>
        <option value="Toroa">Toroa</option>
        <option value="University College">University College</option>
      </select>
      <input type="button" class="initial_disable" id="btn_data" data-role="button" data-icon="arrow-r" data-iconpos="right" value="Next" disabled="disabled" data-theme="b" />
    </div>
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="delete" data-iconpos="notext" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info">Terms and Conditions</a> </div>
</div>
<div id="step_eight" data-role="page">
  <div id="step_eight_box" class="box">
    <div class="img"><img src="img/ios/step8.png" width="460" /></div>
    <input type="tel" id="cellphone" />
    <input type="button" class="initial_disable" id="btn_submit" data-role="button" data-icon="arrow-r" data-iconpos="right" value="Submit" disabled="disabled" data-theme="b" />
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" id="btn_unlock" data-icon="gear" value="Unlock" />
    <input type="button" id="btn_cell_retry" data-icon="refresh" value="Retry" disabled="disabled" />
    </span> <a href="#terms" data-icon="info" data-rel="dialog" data-iconpos="notext" data-role="button" class="info" >Terms and Conditions</a> </div>
</div>
<div id="step_nine" data-role="page">
  <div id="step_nine_box" class="box">
    <div class="img"><img src="img/ios/step9.png" width="460" /></div>
    <p style="max-width:460px; text-align:justify; font-size:12px; border-top:1px solid #444; padding-top:5px; margin-top:10px;">"We all want progress, but if you're on the wrong road, progress means doing an about-turn and walking back to the right road; <strong style="color:#FF0000">in that case, the man who turns back soonest is the most progressive</strong>" - C.S Lewis</p>
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" id="btn_retry" disabled="disabled" data-icon="refresh" value="Retry" />
    </span></div>
</div>
<div id="step_ten" data-role="page">
  <div id="step_ten_box" class="box">
    <div class="img" style="margin-bottom:0px;"><img src="img/ios/step10.png" width="460" /></div>
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a"> <span style="float:right; margin-right:27px;">
    <input type="button" class="reset" data-icon="refresh" value="Reset" data-theme="b" />
    </span> </div>
</div>
<div id="terms" data-role="page">
  <div data-role="header">
    <h1>On The Journey</h1>
  </div>
  <div data-role="content" id="content-box">
    <div id="tnc">
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
      <p>Tandem Ministries © 2012 All Rights Reserved.</p>
    </div>
  </div>
  <div data-role="footer" class="ui-bar" data-position="fixed" data-id="rtc" data-theme="a">
    <h1>Copyright &copy; 2012 Student Life</h1>
  </div>
</div>
</body>
</html>
