
function validateForm() {
  let x = document.forms["myForm"]["first"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  let y = document.forms["myForm"]["password"].value;
  if (y == "") {
    alert("Enter the password");
    return false;
  }
  let a= document.forms["myForm"]["conf"].value;
  if (a == "") {
    alert("Enter the confirm password");
    return false;
  }
  let b = document.forms["myForm"]["gender"].value;
  if (b == "not selected") {
    alert("Please select the gender");
    return false;
  }
  let c = document.forms["myForm"]["mail"].value;
  if (c == "") {
    alert("Enter the email");
    return false;
  }
  let d = document.forms["myForm"]["r1"].value;
  if (d == "") {
    alert("Please choose the caste");
    return false;
  }
  let e = document.forms["myForm"]["address"].value;
  if (e == "") {
    alert("Please fill the address");
    return false;
  }
}
function validate_password() {

    var pass = document.getElementById('pass').value;
    var confirm_pass = document.getElementById('confirm_pass').value;
    if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML
        = '☒ Use same password';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
    } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML =
            '🗹 Password Matched';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
    }
}
