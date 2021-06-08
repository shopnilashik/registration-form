<!DOCTYPE html>
<html>
<body>

<h1>Registration form:</h1>

<form action="/action_page.php">
 <fieldset>
  <legend>Basic Information:</legend>
  <label for="fname">First Name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last Name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="igender">Gender:</label>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br><br>
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br><br>
  <label for="religion">Religion:</label>

<select name="religion" id="religion">
  <option value="select">Select</option>
  <option value="Islam">Islam</option>
  <option value="Hindu">Hindu</option>
  <option value="Christian">Christian</option>
  
</select> 
 </fieldset>
</form>


<form action="/action_page.php">
 <fieldset>
  <legend>Contact Information:</legend>
  <label for="perAddress">Personal Address:</label>
  <textarea id="perAddress" name="perAddress" rows="2" cols="30"> 
  </textarea>
  <br><br>
  <label for="parAddress">Parmanent Address:</label>
  <textarea id="parAddress" name="parAddress" rows="2" cols="30"> 
  </textarea> 
  <br><br>
  <label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> <br><br>
<label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
<label for="homepage">Personal Website Link:</label>
<input type="url" id="homepage" name="homepage"> 

 </fieldset>
</form>
<input type="submit" value="Submit">

</body>
</html>
