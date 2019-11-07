  <html>
  <head>
    <title>VRProjectFG</title>
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-physics-system@3.3.0/dist/aframe-physics-system.min.js"></script>
    <script type="text/javascript">
      this.el.addEventListener('colisao', function () {
        coin.emit('collect');
      });
    </script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <img id="office1" src="<?php echo base_url(); ?>/imagens/a1.jpg">
        <img id="office2" src="<?php echo base_url(); ?>/imagens/a2.jpg">
        <img id="office4" src="<?php echo base_url(); ?>/imagens/chao.jpg">
        <img id="reta" src="<?php echo base_url(); ?>/imagens/retap.png">
        <img id="seta1" src="<?php echo base_url(); ?>/imagens/seta1.jpg">
        <a-mixin id="box-bump" animation__bump="property: object3D.position.y; from: 0; to: 0.2; dur: 200; dir: alternate; loop: 1; startEvents: click, colisao;"></a-mixin>
        
        
      </a-assets>

      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-image position="5 -5 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>
      <a-image position="5  5 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>  

      <a-image position="-12 1 -96" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- l1  -->
      <a-image position="-12 1 -72" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- l2  -->   
      <a-image position="-12 1 -48" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- l3  -->
      <a-image position="-12 1 -24" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- l4  -->
      <a-image position="-12 1 0" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- l5  -->
      <a-image position="-12 1 24" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- l6  --> 
      <a-image position="-12 1 48" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- l7  --> 

      <a-image position="0 1 -108" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- r1  -->
      <a-image position="12 1 -96" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- r2  -->
      <a-image position="12 1 -72" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- r3  -->   
      <a-image position="12 1 -48" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- r4  -->
      <a-image position="12 1 -24" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- r5  -->
      <a-image position="12 1 0" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- r6-->
      <a-image position="12 1 24" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- r7  --> 
      <a-image position="12 1 48" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- r8  --> 


      <a-image position="-24 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p10  -->
      <a-image position="-48 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p9 --> 
      <a-image position="-72 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p8  --> 
      <a-image position="-96 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p7 --> 
      <a-image position="-120 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p6  --> 
      <a-image position="-144 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p5  --> 
      <a-image position="-168 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p4  --> 
      <a-image position="-192 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p3  --> 
      <a-image position="-216 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p2  --> 
      <a-image position="-240 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p1  -->

      <a-image position="24 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p11  -->
      <a-image position="48 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p12 --> 
      <a-image position="72 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p13  --> 
      <a-image position="96 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p14  --> 
      <a-image position="120 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p15  --> 
      <a-image position="144 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p16  --> 
      <a-image position="168 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p17  --> 
      <a-image position="192 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p18  --> 
      <a-image position="216 1 60" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- p19  --> 

      <a-image position="0 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f11  --> 
      <a-image position="-24 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f10  -->
      <a-image position="-48 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f9 --> 
      <a-image position="-72 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f8  --> 
      <a-image position="-96 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f7 --> 
      <a-image position="-120 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f6  --> 
      <a-image position="-144 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f5  --> 
      <a-image position="-168 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f4  --> 
      <a-image position="-192 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f3  --> 
      <a-image position="-216 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f2  --> 
      <a-image position="-240 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f1  -->

      <a-image position="24 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f12  -->
      <a-image position="48 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f13--> 
      <a-image position="72 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f14  --> 
      <a-image position="96 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f15  --> 
      <a-image position="120 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f16  --> 
      <a-image position="144 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f17  --> 
      <a-image position="168 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f18  --> 
      <a-image position="192 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f19  --> 
      <a-image position="216 1 84" width="24" height="12" rotation="0 0 0" src="#office2"></a-image> <!-- f20  --> 

      <a-image position="-252 1 72" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- c1  -->
      <a-image position="228 1 72" width="24" height="12" rotation="0 90 0" src="#office2"></a-image> <!-- c2  -->

      <!--lógica da linha dependendo da sala.-->
      <?php if ($_GET['linha']==1): ?>
        <a-image position="30 -4.5 -8" width="79" height="10" rotation="90 0 0" src="#reta"></a-image>
        <a-image position="59 -4.4 -10.5" width="5" height="10" rotation="90 90 0" src="#seta1"></a-image>
        <a-image position="66 -4.4 -5.5" width="5" height="10" rotation="90 -90 0" src="#seta1"></a-image>
        <a-image position="-5 -4.4 -10.5" width="5" height="10" rotation="90 90 0" src="#seta1"></a-image>
        <a-image position="-5 -4.5 -31" width="40" height="10" rotation="90 90 0" src="#reta"></a-image>
        <a-image position="59 -4.5 -31" width="40" height="10" rotation="90 90 0" src="#reta"></a-image>
        <a-image position="66 -4.5 19.5" width="60" height="10" rotation="90 90 0" src="#reta"></a-image>
      <?php endif ?>




      
      
      
      
      <a-entity camera look-controls wasd-controls="acceleration: 1500">
      </a-entity>


    </a-scene>
  </body>
  </html>


