<!--
  <html>
  <head>
  	<title>VRProjectFG</title>
  	<meta charset="utf-8">
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script >

    </script>
  </head>
  <body>
  
    <a-scene>
      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-box color="red" width="0.01" height="8" depth="0.01" position="4.4 1.25 -5" rotation="-70 -40 0"></a-box>

    </a-scene>
  </body>
</html>
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Images</title>
    <meta name="description" content="Images - A-Frame">
    <script src="<?php echo base_url(); ?>/dist/aframe-master.js"></script>
    <script src="https://unpkg.com/aframe-physics-system@1.4.0/dist/aframe-physics-system.min.js"></script>

  </head>
  <body>
    <a-scene>
      <a-assets>
        <img id="office1" src="<?php echo base_url(); ?>/imagens/p1.jpeg">
        <img id="office2" src="<?php echo base_url(); ?>/imagens/p2.jpeg">
        <img id="office3" src="<?php echo base_url(); ?>/imagens/p3.jpeg">
        <img id="office4" src="<?php echo base_url(); ?>/imagens/p4.jpeg">
        <img id="porta" src="<?php echo base_url(); ?>/imagens/porta.jpeg">
      </a-assets>

      <a-entity position="0 1 6">
      	<a-camera geometry="primitive: plane; "></a-camera>
      </a-entity>
      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-image position="0 1 0" width="15" height="12" src="#office1"></a-image>
      <a-image position="7.5 1 -7" width="15" height="12" rotation="0 -90 0" src="#office1"></a-image>
      <a-image position="10.2 1 -7" width="5" height="12" rotation="0 0 0" src="#porta"></a-image>
      <a-image position="16 1 12" width="32" height="15" rotation="0 -90 0" src="#office2"></a-image>
      <a-image position="0 1 18" width="26" height="12" rotation="0 180 0" src="#office4"></a-image>
      <a-image position="-14 1 10" width="26" height="14" rotation="-5 90 0" src="#office3"></a-image>
     
    </a-scene>
  </body>
</html>
