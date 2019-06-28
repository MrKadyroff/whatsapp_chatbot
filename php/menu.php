<?php
session_start();

if ($_SESSION['login_user']==''){
  header('Location: index.php');
}
 ?>


 <html>
 <head>
 	<title>Whatsapp messenger</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
 	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="../css/util.css">
 	<link rel="stylesheet" type="text/css" href="../css/main.css">
 <!--===============================================================================================-->
 </head>
 <body>


 	<div class="container-contact100">
 		<div class="wrap-contact100">

 				<span class="contact100-form-title">
 					ADMIN-MENU
 				</span>

 				<div class="container-contact100-form-btn">
 					<div class="wrap-contact100-form-btn">
 						<div class="contact100-form-bgbtn"></div>
            <a href="messages.php">
 						<button class="contact100-form-btn"  >
 							<span>
                Сообщения
 								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
 							</span>
 						</button></a>
 					</div>
 				</div>
        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <a href="clients.php">
 						<button class="contact100-form-btn"  >
 							<span>
                Добавить клиентов
 								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
 							</span>
 						</button></a>
          </div>
        </div>
        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <a href="update.php">
            <button class="contact100-form-btn"  >
              <span>
                Все сообщения
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button></a>
          </div>
        </div>
        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <a href="upd_clients.php">
 						<button class="contact100-form-btn"  >
 							<span>
                Все клиенты
 								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
 							</span>
 						</button></a>
          </div>
        </div>

       <hr>

 		</div>
 	</div>



 	<div id="dropDownSelect1"></div>

 <!--===============================================================================================-->
 	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--===============================================================================================-->
 	<script src="../vendor/animsition/js/animsition.min.js"></script>
 <!--===============================================================================================-->
 	<script src="../vendor/bootstrap/js/popper.js"></script>
 	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
 <!--===============================================================================================-->
 	<script src="../vendor/select2/select2.min.js"></script>
 	<script>
 		$(".selection-2").select2({
 			minimumResultsForSearch: 20,
 			dropdownParent: $('#dropDownSelect1')
 		});
 	</script>
 <!--===============================================================================================-->
 	<script src="../vendor/daterangepicker/moment.min.js"></script>
 	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
 <!--===============================================================================================-->
 	<script src="../vendor/countdowntime/countdowntime.js"></script>
 <!--===============================================================================================-->
 	<script src="../js/main.js"></script>

 	<!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-23581568-13');
 </script>

 </body>
 </html>
