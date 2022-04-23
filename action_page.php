<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css"/>
<title>Conrads Campers</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>
      <div class="logo"> 
      <a href="https://auroral-analysts.000webhostapp.com/index.html">
<img src="cclogo.webp" alt="Conrad Campers Logo">
</div>  

  
<div class="header">
<div class="mail">
Designed by <a href="mailto:x21200548@student.ncirl.ie">Justin Conrad</a> / 21200548 / NCI
</div>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="about.html">About Us</a>
  <a href="forsale.html">Campers For Sale</a>
  <a href="contact.html" class="right">Contact Us</a>
</div>

<div class="row">
    
  <div class="side">
    <h2>A little bit about Conrads Campers</h2>
    <p>Conrads Campers was founded by Justin & Leona Conrad in Spring 2023. Justin a long time IT guy & Leona a nurse, decided to embark on a new venture sourcing, upgrading and selling campervans to Irish customers.</p>
  </div>
  <div class="main">
Welcome <?php echo $_POST["name"]; ?> Thank you for contacting us!<p>
We'd like to confirm the details of your submitted form below:<p>
Your full name is: <?php echo $_POST["name"]; ?><br>
Your phone number is: <?php echo $_POST["phnumber"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your message is: <?php echo $_POST["message"]; ?><br>

<p>Click the button to go back to Conrads Campers</p>

<button onclick="document.location='index.html'">Conrads Campers</button>
</div>

<div class="footer">
<a href="https://www.linkedin.com/in/justin-conrad-9aba8141/" class="fa fa-linkedin"></a>
</div>

</body>
</html>


