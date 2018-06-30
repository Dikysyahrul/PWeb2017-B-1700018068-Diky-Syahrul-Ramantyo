<!DOCTYPE html>
<html>
<head>
	<title>Buy Page</title>
	        <link href="css/bootstrap.min.css" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="custom.css">
 <script type="text/javascript" src="jquery.min.js"></script>
 <script type="text/javascript" src="bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">  
  <form id="contact" action="proses.php" method="post">
    <h3>Formulir Pembelian</h3>
    <h4>Lengkapi Formulir Berikut Untuk Melanjutkan</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="nama" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="hp" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Address here...." tabindex="5" name="alamat" required></textarea>
    </fieldset> 
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="#" target="_blank" title="Dicky Syahrul">Dicky Syahrul</a></p>
  </form>
</div>
</body>
</html>