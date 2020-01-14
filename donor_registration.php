<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
<div class="menu"> 
<div class="top">&nbsp;&nbsp;Home &gt; Donor Registration</div>
<br /><br /><br /><br /><br /><br />
                        <div id="tabsE">
                                <ul>
                                        <!-- CSS Tabs -->
<li><a href="index.php"><span>Home</span></a></li>
<li><a href="member_registration.php"><span>Member Registration</span></a></li>
<li><a href="donor_registration.php"><span>Donor Registration</span></a></li>
<li><a href="contact_us.php"><span>Contact Us</span></a></li>

                                </ul>
    </div>
  </div>
</div>
<div class="content">
<br /><br />
<div class="link">Quik Links<br />
  <div class="links">
  <ul>
  <li><a href="#"><span>About Us</span></a><br />
    <br />
  </li>
<li><a href="#"><span>Tips</span></a><br />
  <br />
</li>
<li><a href="#"><span>Eligibility<br />
  <br />
</span></a></li>
<li><a href="#"><span>Contact Us</span></a><br />
</li>
</ul>
  <p>&nbsp;</p>
  </div>
  <br /><br /><br /><br /><br /><br />
</div>
<div id="apDiv1">
<form id="form1" name="form1" method="post" action="insert_donor_info.php">
  <table class="tbl_form" width="461" height="431">
    <tr>
      <td class="cptn" colspan="4"><div align="center">DONOR REGISTRATION</div></td>
      </tr>
    <tr>
      <td class="cptn" colspan="4">Login Informations </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="155" height="31" class="field">User Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="uname" id="textfield" />      </td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td width="145">
        <input type="password" name="pass" id="textfield2" />      </td>
      <td width="108">Min 8 Character</td>
    </tr>
    <tr>
      <td class="field">Confirm Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="password" name="cpass" id="textfield3" />      </td>
    </tr>
    <tr>
      <td colspan="4" >&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn">Basic Informations</td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield4" />      </td>
    </tr>
    <tr>
      <td class="field">Age</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="age" id="textfield7" /></td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td colspan="2"><select name="gn" id="select">
        <option>--Select--</option>
        <option>Male</option>
        <option>Female</option>
        </select>        </td>
    </tr>
    <tr>
      <td class="field">Date of Birth</td>
      <td class="field">:</td>
      <td><input type="text" name="dob" id="textfield9" /></td>
      <td>YY-MM-DD</td>
    </tr>
    <tr>
      <td class="field">Weight</td>
      <td class="field">:</td>
      <td><input type="text" name="weight" id="textfield10" /></td>
      <td>Kg</td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">&nbsp;</td>
      <td colspan="2"><select name="bg" size="1" id="select">
          <option>- - Select - -</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select></td>
    </tr>
    <tr>
      <td class="field">Last Donated Date</td>
      <td class="field">:</td>
      <td><input type="text" name="ldd" id="textfield12" /></td>
      <td>YY-MM-DD</td>
    </tr>
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn">Contact Informations</td>
      </tr>
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">State</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="state" id="textfield13" /></td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="city" id="textfield14" /></td>
    </tr>
    <tr>
      <td class="field">Pin Code</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="pc" id="textfield15" /></td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" value="91" />      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="email" id="textfield6" />      </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="msg" id="textarea" cols="30" rows="5"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" name="button" id="button" value="Submit" />      </td>
    </tr>
  </table>
  </form>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br />
</div>
<div class="bottom" align="center">Develop by Harsh, Sachin and Bhupesh.</div>
</body>
</html>
