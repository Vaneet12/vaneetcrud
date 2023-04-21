<!DOCTYPE html>
<html>
 <head>
  <title>Submit Form Using AJAX, PHP and javascript</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link href="style1.css" rel="stylesheet"> 
  <script type="text/javascript" src="formscript.js"></script>
 </head>
 <body>
  <form id="emp_form" name="form">
  <h3>New Employee Registration Form</h3>
  <div>
  <label>Employee Name* :</label> 
  <input type="text" name="emp_name" id="emp_name" />
  <label>Email* :</label>  
  <input type="text" name="email" id="email" />
  <label>Phone :</label>  
  <input type="text" name="phone" id="phone"  />
  <label>Address :</label>  
  <input type="text" name="address" id="address"  />
  <label>Username* :</label>  
  <input type="text" name="username" id="username" />
  <label>Password* : </label>  
  <input type="password" name="password" id="password"  />
  <label>  </label>  
  <input id="submit" class="submit" onclick="formsubmit()" type="button" value="Submit">
  </div>
  </form>
  <div id="clear"></div>
</body>
</html>
