
<html>
<head>
  <title>VRProjectFG</title>
  <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
</head>
<body>
  <a-scene>
    <a-assets>

      <img id="office4" src="<?php echo base_url(); ?>/imagenshall/chao.jpg">
      <img id="catraca" src="<?php echo base_url(); ?>/imagenshall/catraca.jpeg">
      <img id="p1" src="<?php echo base_url(); ?>/imagenshall/p1.jpg">
      <img id="p2" src="<?php echo base_url(); ?>/imagenshall/p2.jpg">
      <img id="p3" src="<?php echo base_url(); ?>/imagenshall/p3.jpg">
      <img id="p4" src="<?php echo base_url(); ?>/imagenshall/p4.jpg">
      <img id="p5" src="<?php echo base_url(); ?>/imagenshall/p5.jpg">
      <img id="p6" src="<?php echo base_url(); ?>/imagenshall/p6.jpg">
      <img id="p7" src="<?php echo base_url(); ?>/imagenshall/p7.jpg">
      <img id="p8" src="<?php echo base_url(); ?>/imagenshall/p8.jpg">
      <img id="escada" src="<?php echo base_url(); ?>/imagenshall/escada.jpg">
      <img id="v1" src="<?php echo base_url(); ?>/imagenshall/v1.jpg">
      <img id="v2" src="<?php echo base_url(); ?>/imagenshall/v2.jpg">
      <img id="a1" src="<?php echo base_url(); ?>/imagenshall/a1.jpeg">
      <img id="a2" src="<?php echo base_url(); ?>/imagenshall/a2.jpeg">
      <img id="reta" src="<?php echo base_url(); ?>/imagens/retap.png">
      <img id="seta1" src="<?php echo base_url(); ?>/imagens/seta1.jpg">
    </a-assets>

    <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
    <a-image position="5 -5 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>
    <a-image position="5  20 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>  


    <a-image position="12 1 -108" width="48" height="12" rotation="0 0 0" src="#catraca"></a-image> <!-- catracas  -->
    <a-image position="36 1 -96" width="24" height="12" rotation="0 270 0" src="#p1"></a-image> <!-- p1  -->
    <a-image position="36 1 -72" width="24" height="12" rotation="0 270 0" src="#p2"></a-image> <!-- p2  -->   
    <a-image position="36 1 -48" width="24" height="12" rotation="0 270 0" src="#p3"></a-image> <!-- p3  -->
    <a-image position="36 1 -24" width="24" height="12" rotation="0 270 0" src="#p4"></a-image> <!-- p4  -->
    <a-image position="-12 1 -24" width="24" height="12" rotation="0 90 0" src="#p5"></a-image> <!-- p5  -->
    <a-image position="-12 1 -48" width="24" height="12" rotation="0 90 0" src="#p6"></a-image> <!-- p6  -->
    <a-image position="-12 1 -72" width="24" height="12" rotation="0 90 0" src="#p7"></a-image> <!-- p7  -->   
    <a-image position="-12 1 -96" width="24" height="12" rotation="0 90 0" src="#p8"></a-image> <!-- p8  -->


    <a-image position="-24 1 -12" width="24" height="12" rotation="0 0 0" src="#escada"></a-image> <!-- escada  -->
    <a-image position="-36  1 12" width="48" height="12" rotation="0 90 0" src="#v1"></a-image> <!-- v1  -->
    <a-image position="-24 1 36" width="24" height="12" rotation="0 180 0" src="#v2"></a-image> <!-- v2  -->


    <a-image position="0 1 36" width="24" height="12" rotation="0 180 0" src="#a1"></a-image> <!-- a1  --> 
    <a-image position="24 1 36" width="24" height="12" rotation="0 180 0" src="#a2"></a-image> <!-- a2  -->
    <a-image position="36  1 24" width="24" height="12" rotation="0 270 0" src="#a2"></a-image> <!-- a3  --> 
    <a-image position="36 1 0" width="24" height="12" rotation="0 270 0" src="#a2"></a-image> <!-- a4-->   


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




