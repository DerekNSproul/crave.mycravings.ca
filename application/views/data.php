<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>On The Journey - Data Entry</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/data.css"/>
<script type="text/javascript">
var base_url = "<?php echo base_url(); ?>";
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/data.js"></script>
</head>
<body>
<div id="container">
  <div id="campus_right">
    <select id="campussel">
      <option disabled="disabled">Choose your Campus</option>
      <option value="Auckland">Auckland</option>
      <option value="Waikato">Waikato</option>
      <option value="Massey Palmy">Massey Palmy</option>
      <option value="Wellington">Wellington</option>
      <option value="Canterbury">Canterbury</option>
      <option value="Otago">Otago</option>
    </select>
    <input type="button" id="btn_campus" value="Go" disabled="disabled" />
  </div>
  <form id="myform">
  	<table id="formtable"><tbody><tr><th><h4>Survey Questions</h4></th><th><h4>Personal Information</h4></th><tr><td width="50%">
    <div id="cp"  class="topic">
      <h4>The coolest place I've been so far is</h4>
      <input type="text" id="coolest" maxlength="40" placeholder="Coolest Place" class="pausable" />
    </div>
    <div id="magazine" class="topic">
      <h4>Free Magazine</h4>
      <input type="checkbox" id="studying" id="magchk" class="pausable" />
      <label for="studying">Studying successfully</label>
      <br />
      <input type="checkbox" id="relation" class="pausable" />
      <label for="relation">Having fulfilling relationships</label>
      <br />
      <input type="checkbox" id="lifesqs" class="pausable" />
      <label for="lifesqs">Answering life's big questions</label>
    </div>
    <div id="journey" class="topic">
      <h4>On my spiritual journey I'd like to</h4>
      <input type="radio" id="options" name="sj" value="Find out more about my options" class="pausable" />
      <label for="options">Find out more about my options</label>
      <br />
      <input type="radio" id="grow" name="sj" value="Grow closer to God" class="pausable" />
      <label for="grow">Grow closer to God</label>
      <br />
      <input type="radio" id="nowhere" name="sj" value="Go nowhere" class="pausable" />
      <label for="nowhere">Go nowhere</label>
      <br />
      <input type="radio" id="more" name="sj" value="Hear more about StudentLife" class="pausable" />
      <label for="more">Find out more about your Christian group</label>
    </div>
    <div id="interest" class="topic">
      <h4>Interest in beginning a journey with Jesus Christ</h4>
      <input type="radio" name="interested" id="i1" value="1" class="pausable" />
      <label for="i1" class="pad-right">1</label>
      <input type="radio" name="interested" id="i2" value="2" class="pausable" />
      <label for="i2" class="pad-right">2</label>
      <input type="radio" name="interested" id="i3" value="3" class="pausable" />
      <label for="i3" class="pad-right">3</label>
      <input type="radio" name="interested" id="i4" value="4" class="pausable" />
      <label for="i4" class="pad-right">4</label>
      <input type="radio" name="interested" id="i5" value="5" class="pausable" />
      <label for="i5" class="pad-right">5</label>
    </div>
    </td><td>
    <div id="you" class="topic">
      <table>
        <tbody>
          <tr>
            <td> Name</td>
            <td><input type="text" id="fname" placeholder="First" maxlength="17" class="pausable" /></td>
          </tr>
          <tr>
            <td>Family Name</td>
            <td><input type="text" id="lname" placeholder="Last" maxlength="17" class="pausable" /></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><input type="radio" id="male" name="gender" value="Male" class="pausable" />
              <label for="male" class="pad-right">Male</label>
              <input type="radio" id="female" name="gender" value="Female" class="pausable" />
              <label for="female" class="pad-right"> Female</label></td>
          </tr>
          <tr>
            <td>Mobile Phone</td>
            <td><input type="tel" id="cellphone" maxlength="15" placeholder="Mobile Phone" class="pausable" /></td>
          </tr>
          <tr>
            <td>Home Phone</td>
            <td><input type="tel" id="homephone" maxlength="15" placeholder="Home Phone" class="pausable" /></td>
          </tr>
          <tr>
            <td>Degree</td>
            <td><select id="major" class="pausable">
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
              </select></td>
          </tr>
          <tr>
            <td>Year</td>
            <td><input type="radio" id="y1" name="year" value="1" class="pausable" />
              <label for="y1" class="pad-right">1</label>
              <input type="radio" id="y2" name="year" value="2" class="pausable" />
              <label for="y2" class="pad-right">2</label>
              <input type="radio" id="y3" name="year" value="3" class="pausable" />
              <label for="y3" class="pad-right">3</label>
              <input type="radio" id="y4" name="year" value="4" class="pausable" />
              <label for="y4" class="pad-right">4</label>
              <input type="radio" id="ypg" name="year" value="pg" class="pausable" />
              <label for="ypg">Postgraduate</label></td>
          </tr>
          <tr>
            <td>Hall</td>
            <td><div id="hall_box">
                <select id="w_hall" class="halls pausable">
                  <option disabled="disabled" selected="selected">Halls of Residence</option>
                  <option value="None">None</option>
                  <option value="College Hall">College Hall</option>
                  <option value="Student Village">Student Village</option>
                  <option value="Bryant Hall">Bryant Hall</option>
                  <option value="Orchard Park">Orchard Park</option>
                </select>
                <select id="c_hall" class="halls pausable">
                  <option disabled="disabled" selected="selected">Halls of Residence</option>
                  <option value="None">None</option>
                  <option value="Bishop Julius">Bishop Julius</option>
                  <option value="College House">College House</option>
                  <option value="Ilam Apartments">Ilam Apartments</option>
                  <option value="Rochester and Rutherford">Rochester and Rutherford</option>
                  <option value="University Hall">University Hall</option>
                  <option value="Sonoda Campus">Sonoda Campus</option>
                </select>
                <select id="o_hall" class="halls pausable">
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
              </div></td>
          </tr>
        </tbody>
      </table>
    </div>
    </td></tr></tbody></table>
    <div id="submit" class="topic">
    <div id="errors"></div>
    <div id="successes">Contact Added</div>
    <img src="<?php echo base_url(); ?>/img/ajax-loader.gif" alt="loading" id="loading" />
      <input type="reset" class="pausable" style="margin-right:10px;" />
      <input type="submit" class="pausable" />
    </div>
  </form>
</div>
</body>
</html>