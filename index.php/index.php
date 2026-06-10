<!DOCTYPE html>
<html>
<head>
<title>Validation Example</title>

<script>
function validateForm(){

let username =
document.forms["myForm"]["username"].value;

if(username==""){

alert("Username required");

return false;
}

}
</script>

</head>
<body>

<h2>Week 3 - JavaScript Validation</h2>

<form name="myForm"
onsubmit="return validateForm()">

Username:
<input type="text"
name="username">

<button type="submit">
Submit
</button>

</form>

</body>
</html>