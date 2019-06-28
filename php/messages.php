<?php
session_start();

if ($_SESSION['login_user']==''){
  header('Location: index.php');
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Messages</title>
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
      <div class="wrap-input100 validate-input" >
        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn"  onclick="window.location.href='clients.php'">
              <span>
                Добавить клиентов
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>

 			<form class="contact100-form" method="POST" id="form" >


            </div>
          </div>
      <br><hr>
 					<h5>Дата отправки:</h5>
          <br>
          <input type="date" name="date" min=
     <?php
         echo date('Y-m-d');
     ?>
     value=   <?php
            echo date('Y-m-d');
        ?>
 >
 				</div>
        <div id="myModal" class="modal">

        <!-- Modal content -->

        <div class="modal-content">
          <span class="close">&times;</span>
          <br><hr>
            <center><h3>Сообщение отправлено</h3></center>
            <hr>

        </div>

      </div>
 				<div class="wrap-input100 validate-input" >

 					<h5>Сообщение:</h5>
 					<textarea class="input100" name="message" placeholder=" Для выделения заголовка используйте: (*) Пример:*Заголовок*" required></textarea>
 				</div>
 				<div class="container-contact100-form-btn">
 					<div class="wrap-contact100-form-btn">
 						<div class="contact100-form-bgbtn"></div>
 						<button class="contact100-form-btn" type="submit" name="send">
 							<span>
 						Отправить
 								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
 							</span>
 						</button>

 					</div>
 				</div>
      <center>  <span id="answ">

      </span></center>
 			</form>
 		</div>
 	</div>




 <!--===============================================================================================-->
 	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--===============================================================================================-->
 	<script src="../vendor/animsition/js/animsition.min.js"></script>
 <!--===============================================================================================-->
 	<script src="../vendor/bootstrap/js/popper.js"></script>
 	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
 <!--===============================================================================================-->
 	<script src="../vendor/select2/select2.min.js"></script>




<script src="../js/ajax.js"></script>
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
