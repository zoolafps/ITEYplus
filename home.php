<?php
$head_title = 'home';
$head_description = 'Pagina de inicio del blog ITEY (Instituto Tecnico Empresarial el Yopal), noticias, foro, bienestar y salud, etc.';
include 'layout/head.php';
?>
<?php 
include 'layout/nav.php';
?>
<div class="container">

<section class="hero">

</section>
<main class="content">
   <section class="posts">
   <div class="ad">
   
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7272990459074986"
     crossorigin="anonymous"></script>
<!-- itey-blog -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7272990459074986"
     data-ad-slot="1330128429"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


   </div>
    <article class="post">
        <div class="post-header">
          <h1 class="h2">
            Lorem ipsum dolor sit amet.
        </h1>  
        </div>
        <div class="post-body">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, ea enim dolorum laudantium fugit sapiente rem eligendi repellat nihil aut.
        </p>  
        </div>
        <div class="post-footer">
           <a class="link btn" href="new/<?php echo($new);?>">leer</a>
        <span>00/20/22</span>
        </div>
    </article>
   </section>
     <?php 
include 'layout/aside.php';
?>
</main>



</div>
<?php 
include 'layout/footer.html';
?>