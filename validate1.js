function validateForm() {
    let x = document.forms["myForm"]["username"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }

 
    let y = document.forms["myForm"]["password"].value;
    if (y == "") {
      alert("Enter the password");
      return false;
    }
}