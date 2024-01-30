<?php include '..\partials\header.php';
?>
    <div class="wrapper">
    <h1>Bienvenue sur mon app PHP</h1>
    <div class="anim">
    <css-doodle>
  <style>
    @grid: 20 / 60vmin;

    background: cyan;
    scale: 0;
    opacity: 0;
    animation: m 4s linear infinite;
    
    animation-delay: calc(
      -1s/@I * @i * @sin(@i)
    );

    @keyframes m {
      0%, 50%, 90% { scale: 1; opacity: 1 }
      25%, 75%, 100% { scale: 0; opacity: 0 }
    }
  </style>
 </css-doodle>
<!-- partial -->
  <script src='https://unpkg.com/css-doodle@0.29.1/css-doodle.min.js'></script>
</div> 
    </div>
    







<?php include '../partials/footer.php';?>