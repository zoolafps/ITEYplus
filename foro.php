<?php
$head_title = 'home';
$head_description = 'Pagina de inicio del blog ITEY (Instituto Tecnico Empresarial el Yopal), noticias, foro, bienestar y salud, etc.';
include 'layout/head.php';
?>
<?php 
include 'layout/nav.php';
?>
<div class="container">
<main class="content">
   <h1 class="h2">
      Bienvenido al foro
   </h1>
   <section class="posts">
      <?php
         if (isset($_SESSION['user_name'])) {
         } else {
            echo("<p clas='h3'>lo siento parece que no tienes acceso al foro</p><a class='link' href='login'>porfavor inicia sesion</a>");
         }
      ?>
   </section>
   <?php 
include 'layout/aside.php';
?>

</main>



</div>
<?php 
include 'layout/footer.html';
?>