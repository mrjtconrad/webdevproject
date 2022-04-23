<html>
<body>

Welcome <?php echo $_POST["name"]; ?> Thank you for contacting us!<p>
We'd like to confirm the details of your submitted form below:<p>
Your full name is: <?php echo $_POST["name"]; ?><br>
Your phone number is: <?php echo $_POST["phnumber"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your message is: <?php echo $_POST["message"]; ?><br>

<p>Click the button to go back to Conrads Campers</p>

<button onclick="document.location='index.html'">Conrads Campers</button>

</body>
</html>