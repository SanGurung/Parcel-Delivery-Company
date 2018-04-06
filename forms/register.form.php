<?php
session_start();

if(!defined('qrper_hmLVxYhsRycXiwQ'))
{ header ("HTTP/1.0 404 Not Found");
  die();
}


if(isset($_SESSION['registrationx']) && $_SESSION['registrationx']=="x2VjQlM23")
{
	//
?>

	<div class="row">
		<div class="large-12 columns">
			<h3> Welcome,  
			<?php  
			
			if(isset($_SESSION['registrationxm']))
			{
				echo $_SESSION['registrationxm'];
			}  
			
			//As message has been shown, Unset the session
			unset($_SESSION['registrationxm']);
			unset($_SESSION['registrationx']);
			?>
			</h3>
			<p>
			 Thank you for registeration with us.With your brand new Account you can get a quote easily and use our services.
			 <br/>
			 <hr />
			 For security reason we haven't logged you in automatically. <br />
			 To use the service please login. <a href="<?php echo SERVER_PATH_BASE;  ?>/login.php">Login</a>
			 <hr />
			 <a class="button" href="<?php echo SERVER_PATH_BASE;  ?>/login.php">Login</a>
 
			</p>
			<hr />
		</div>
	</div>
<?php


}
else
{
?>
  
		<form name="Register" method="post" action="<?php echo SERVER_PATH_BASE; ?>/process/register.php" onSubmit="return validateit();">
          <table  border="0" style="width:100%;height:100%" >
            <!-- MSTableType="layout" -->
            <tr>
              <td colspan="2" height="76">
<?php
$v=isset($_SESSION['userexist']);

if($v || $_SESSION['userexist']=="x2VjQlM23")
{
	unset($_SESSION['userexist']);
?>
<hr color="#669900" size="1">
        <div align="justify"><b><font face="Tahoma" size="2">Sorry couldn't 
			register you</font></b><font face="Tahoma" size="2">,<br>
          The email address you provided has already been registered.
          </font></div>
<hr color="#669900" size="1">
<?php 
}
?>
<font face="Tahoma" size="3">1. Personal <font color="#676767"> 
                information's 
                <input name="key" type="hidden" id="key" value="7sgdbc028feb879ce2902fcb6d38ef3">
                </font></font><b/></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#D9D9D9" size="1"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">Title:</font></td>
              <td height="24"> <select name="title" size="1" class="mybox">
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Miss">Miss</option>
                  <option value="Mrs.">Mrs.</option>
                </select></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">First Name:</font></td>
              <td height="24"><input type="text" name="firstname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Family Name:</font></td>
              <td height="24"><input type="text" name="familyname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td style="height: 25px"><font face="Tahoma" size="2">DOB</font></td>
              <td style="height: 25px"> <font face="Verdana" color="#000099" size="2"> 
                <select size="1" name="day" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="Day">Day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                </font> <select name="month" size="1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="Month">Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select> <select name="year" size="1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="Year">Year</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
                  <option value="1904">1904</option>
                  <option value="1903">1903</option>
                  <option value="1902">1902</option>
                  <option value="1901">1901</option>
                  <option value="1900">1900</option>
                </select></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Gender:</font></td>
              <td height="23">Male 
                <input type="radio" name="sex" value="male" check checked>
                Female 
                <input type="radio" name="sex" value="female"></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#D9D9D9" size="1"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">House no.</font></td>
              <td height="24"><input type="text" name="houseno" maxlength="3" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Street Name.</font></td>
              <td height="24"><input type="text" name="streetname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">City/Country</font></td>
              <td height="24"><input type="text" name="add1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Post code:</font></td>
              <td height="24"><input type="text" name="postcode" maxlength="8"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#D9D9D9" size="1"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Mobile no:</font></td>
              <td height="24"><input type="text" name="mobileno"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Telephone no:</font></td>
              <td height="24"><input type="text" name="telephoneno"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#C0C0C0" size="1"></td>
            </tr>
			<tr>
              <td colspan="2" height="21"><b><font face="Tahoma" size="3">2. Registration 
                <font color="#676767">information's</font></font></b></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#C0C0C0" size="1"></td>
            </tr>
			<tr>
              <td>Email<font face="Tahoma" size="2">:</font></td>
              <td height="24"><input type="text" name="email"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">Password:</font></td>
              <td height="24"><input type="password" name="password" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td width="130"><font face="Tahoma" size="2">Retype Password:</font></td>
              <td height="25" width="259"><input type="password" name="rpassword" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td colspan="2" height="24">
			  <input type="checkbox" name="tos" id="rg">
			  <label for="rg"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">I 
                agree the terms & conditions</font></label> </td>
            </tr>
			<tr>
              <td colspan="2" height="30"><input name="submit" type="submit" class="button round" value="submit"> 
                <input name="reset" type="reset"  class="button round"  value="Reset"></td>
            </tr>
			<tr>
              <td colspan="2" height="19"><hr color="#C0C0C0" size="1"></td>
            </tr>
          </table>
        </form>
<?php
}
?>