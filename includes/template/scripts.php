<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/underscore-min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="js/functions.js"></script>

<!-- GA -->

<?php
  if(isset($nav0)) {echo "<script>$('#bs-example-navbar-collapse-1').empty();</script>";}
  if(isset($_SESSION['isadmin'])  && $_SESSION['isadmin'] == 0) {echo "<script>$('#adminMenu').empty();</script>";}
?>


