<html>
  <head>
  	<title>VRProjectFG</title>
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  </head>
  <body>
  <a-scene>
        <a-assets>
            
            <img id="office4" src="<?php echo base_url(); ?>/imagens/chao.jpg">
            <img id="fundo1" src="<?php echo base_url(); ?>/imagens/fundo1.jpg">
            <img id="r1" src="<?php echo base_url(); ?>/imagens/r1.jpg">
            <img id="r2" src="<?php echo base_url(); ?>/imagens/r2.jpg">
            <img id="r3" src="<?php echo base_url(); ?>/imagens/r3.jpg">
            <img id="r4" src="<?php echo base_url(); ?>/imagens/r4.jpg">
            <img id="reta" src="<?php echo base_url(); ?>/imagens/retap.png">
            <img id="seta1" src="<?php echo base_url(); ?>/imagens/seta1.jpg">
      
        </a-assets>

      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-image position="5 -5 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>
      <a-image position="5  20 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>  


      <a-image position="12 1 -108" width="48" height="12" rotation="0 0 0" src="#fundo1"></a-image> <!-- catracas  -->
      <a-image position="36 1 -96" width="24" height="12" rotation="0 270 0" src="#r1"></a-image> <!-- p1  -->
      <a-image position="36 1 -72" width="24" height="12" rotation="0 270 0" src="#r2"></a-image> <!-- p2  -->   
      <a-image position="36 1 -48" width="24" height="12" rotation="0 270 0" src="#r3"></a-image> <!-- p3  -->
      <a-image position="36 1 -24" width="24" height="12" rotation="0 270 0" src="#r4"></a-image> <!-- p4  -->
      <a-image position="-12 1 -24" width="24" height="12" rotation="0 90 0" src="#l4"></a-image> <!-- p5  -->
      <a-image position="-12 1 -48" width="24" height="12" rotation="0 90 0" src="#l3"></a-image> <!-- p6  -->
      <a-image position="-12 1 -72" width="24" height="12" rotation="0 90 0" src="#l2"></a-image> <!-- p7  -->   
      <a-image position="-12 1 -96" width="24" height="12" rotation="0 90 0" src="#l1"></a-image> <!-- p8  -->
      

      <a-image position="-24 1 -12" width="24" height="12" rotation="0 0 0" src="#p10"></a-image> <!-- v1  -->
      <a-image position="-36  1 12" width="48" height="12" rotation="0 270 0" src="#r6"></a-image> <!-- v2  -->
      <a-image position="-24 1 36" width="24" height="12" rotation="0 180 0" src="#f10"></a-image> <!-- v3  -->
       

      <a-image position="0 1 36" width="24" height="12" rotation="0 180 0" src="#f11"></a-image> <!-- a1  --> 
      <a-image position="24 1 36" width="24" height="12" rotation="0 180 0" src="#f12"></a-image> <!-- a2  -->
      <a-image position="36  1 24" width="24" height="12" rotation="0 270 0" src="#r6"></a-image> <!-- a3  --> 
      <a-image position="36 1 0" width="24" height="12" rotation="0 270 0" src="#r5"></a-image> <!-- a4-->   
      <!--Pontos de acesso aos andares.-->

      
      <a-link  position="-26 0 -10" rotation="0 0 0" href="<?php echo base_url('VrProject/andar1'); ?>?linha=<?php echo $_GET['linha']; ?>" title="PRIMEITO ANDAR" image="#office1"></a-link> 

      <!--lógica da linha dependendo da sala.-->
      <?php if ($_GET['linha']!=0): ?>
        <a-image position="0 -4.4 -100" width="5" height="10" rotation="90 -90 0" src="#seta1"></a-image>
        <a-image position="0 -4.5 -90" width="190" height="10" rotation="90 90 0" src="#reta"></a-image>
        <a-image position="0 -4.4 -50" width="5" height="10" rotation="90 -90 0" src="#seta1"></a-image>
        <a-image position="0 -4.4 -0" width="5" height="10" rotation="90 180 0" src="#seta1"></a-image>
        <a-image position="-10 -4.5 -0" width="25" height="10" rotation="90 180 0" src="#reta"></a-image>
        0<a-image position="-20 -4.4 -0" width="5" height="10" rotation="90 90 0" src="#seta1"></a-image>
      <?php endif ?>
      
      
      <a-camera id="camera" position="0 1.6 -90" rotation="0 0 0" wasd-controls="acceleration: 2500" wasd-controls-enabled="true" look>
        <a-cursor id="cursor" color="black"></a-cursor>
      </a-camera>

</a-scene>
  </body>
</html>


