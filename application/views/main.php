<html>
  <head>
  	<title>VRProjectFG</title>
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  </head>
  <body>
  <body>
  <a-scene>
        <a-assets>
            <img id="office1" src="<?php echo base_url(); ?>/imagens/a1.jpg">
            <img id="office2" src="<?php echo base_url(); ?>/imagens/a2.jpg">
            <img id="office3" src="<?php echo base_url(); ?>/imagens/c3.jpg">
            <img id="office4" src="<?php echo base_url(); ?>/imagens/chao.jpg">
            <img id="reta" src="<?php echo base_url(); ?>/imagens/retap.png">
            <img id="seta1" src="<?php echo base_url(); ?>/imagens/seta1.jpg">
      
        </a-assets>
      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-image position="0 1 0" width="25" height="12" src="#office1"></a-image>
      <a-image position="25 1 0" width="25" height="12" src="#office2"></a-image>
      <a-image position="-12.5 1 -12.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="-12.5 1 -37.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="5 -5 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>
      <a-image position="2 1 -29.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="2 1 -54.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="14.5 1 -17" width="25" height="12" src="#office2"></a-image>
      <a-image position="39.5 1 -17" width="25" height="12" src="#office2"></a-image>
      <a-image position="52 1 -29.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="70 1 -29.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="70 1 -4.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="70 1 20.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="70 1 45.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="50 1 0" width="25" height="12" src="#office2"></a-image>
      <a-image position="62.5 1 12.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="62.5 1 37.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="52 1 -54.5" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="30 -4.5 -8" width="79" height="10" rotation="90 0 0" src="#reta"></a-image>
      <a-image position="59 -4.4 -10.5" width="5" height="10" rotation="90 90 0" src="#seta1"></a-image>
      <a-image position="66 -4.4 -5.5" width="5" height="10" rotation="90 -90 0" src="#seta1"></a-image>
      <a-image position="-5 -4.4 -10.5" width="5" height="10" rotation="90 90 0" src="#seta1"></a-image>
      <a-image position="-5 -4.5 -31" width="40" height="10" rotation="90 90 0" src="#reta"></a-image>
      <a-image position="59 -4.5 -31" width="40" height="10" rotation="90 90 0" src="#reta"></a-image>
      <a-image position="66 -4.5 19.5" width="60" height="10" rotation="90 90 0" src="#reta"></a-image>
      <a-image position="5  5 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>      

      
      <a-entity camera look-controls wasd-controls="acceleration: 2500">
      </a-entity>


</a-scene>
  </body>
  </body>
</html>


