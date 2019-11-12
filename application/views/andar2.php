<html>
  <head>
    <title>VRProjectFG</title>
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  </head>
  <body>
  <a-scene>
        <a-assets>
            
            <img id="office2" src="<?php echo base_url(); ?>/imagens2/a2.jpg">
            <img id="office4" src="<?php echo base_url(); ?>/imagens2/chao.jpg">
            <img id="fundo1" src="<?php echo base_url(); ?>/imagens2/fundo1.jpg">
            <img id="fundo2" src="<?php echo base_url(); ?>/imagens2/fundo2.jpg">
            <img id="fundo3" src="<?php echo base_url(); ?>/imagens2/fundo3.jpg">
             <img id="reta" src="<?php echo base_url(); ?>/imagens/retap.png">
            <img id="seta1" src="<?php echo base_url(); ?>/imagens/seta1.jpg">
            <img id="r1" src="<?php echo base_url(); ?>/imagens2/r1.jpg">
            <img id="r2" src="<?php echo base_url(); ?>/imagens2/r2.jpg">
            <img id="r3" src="<?php echo base_url(); ?>/imagens2/r3.jpg">
            <img id="r4" src="<?php echo base_url(); ?>/imagens2/r4.jpg">
            <img id="r5" src="<?php echo base_url(); ?>/imagens2/r5.jpg">
            <img id="r6" src="<?php echo base_url(); ?>/imagens2/r6.jpg">
            <img id="r7" src="<?php echo base_url(); ?>/imagens2/r7.jpg">
            <img id="p1" src="<?php echo base_url(); ?>/imagens2/p1.jpg">
            <img id="p2" src="<?php echo base_url(); ?>/imagens2/p2.jpg">
            <img id="p3" src="<?php echo base_url(); ?>/imagens2/p3.jpg">
            <img id="p4" src="<?php echo base_url(); ?>/imagens2/p4.jpg">
            <img id="p5" src="<?php echo base_url(); ?>/imagens2/p5.jpg">
            <img id="p6" src="<?php echo base_url(); ?>/imagens2/p6.jpg">
            <img id="p7" src="<?php echo base_url(); ?>/imagens2/p7.jpg">
            <img id="p8" src="<?php echo base_url(); ?>/imagens2/p8.jpg">
            <img id="p9" src="<?php echo base_url(); ?>/imagens2/p9.jpg">
            <img id="p10" src="<?php echo base_url(); ?>/imagens2/p10.jpg">
            <img id="p11" src="<?php echo base_url(); ?>/imagens2/p11.jpg">
            <img id="p12" src="<?php echo base_url(); ?>/imagens2/p12.jpg">
            <img id="p13" src="<?php echo base_url(); ?>/imagens2/p13.jpg">
            <img id="p14" src="<?php echo base_url(); ?>/imagens2/p14.jpg">
            <img id="p15" src="<?php echo base_url(); ?>/imagens2/p15.jpg">
            <img id="p16" src="<?php echo base_url(); ?>/imagens2/p16.jpg">
            <img id="p17" src="<?php echo base_url(); ?>/imagens2/p17.jpg">
            <img id="p18" src="<?php echo base_url(); ?>/imagens2/p18.jpg">
            <img id="p19" src="<?php echo base_url(); ?>/imagens2/p19.jpg">
            <img id="f1" src="<?php echo base_url(); ?>/imagens2/f1.jpg">
            <img id="f2" src="<?php echo base_url(); ?>/imagens2/f2.jpg">
            <img id="f3" src="<?php echo base_url(); ?>/imagens2/f3.jpg">
            <img id="f4" src="<?php echo base_url(); ?>/imagens2/f4.jpg">
            <img id="f5" src="<?php echo base_url(); ?>/imagens2/f5.jpg">
            <img id="f6" src="<?php echo base_url(); ?>/imagens2/f6.jpg">
            <img id="f7" src="<?php echo base_url(); ?>/imagens2/f7.jpg">
            <img id="f8" src="<?php echo base_url(); ?>/imagens2/f8.jpg">
            <img id="f9" src="<?php echo base_url(); ?>/imagens2/f9.jpg">
            <img id="f10" src="<?php echo base_url(); ?>/imagens2/f10.jpg">
            <img id="f11" src="<?php echo base_url(); ?>/imagens2/f11.jpg">
            <img id="f12" src="<?php echo base_url(); ?>/imagens2/f12.jpg">
            <img id="f13" src="<?php echo base_url(); ?>/imagens2/f13.jpg">
            <img id="f14" src="<?php echo base_url(); ?>/imagens2/f14.jpg">
            <img id="f15" src="<?php echo base_url(); ?>/imagens2/f15.jpg">
            <img id="f16" src="<?php echo base_url(); ?>/imagens2/f16.jpg">
            <img id="f17" src="<?php echo base_url(); ?>/imagens2/f17.jpg">
            <img id="f18" src="<?php echo base_url(); ?>/imagens2/f18.jpg">
            <img id="f19" src="<?php echo base_url(); ?>/imagens2/f19.jpg">
            <img id="l1" src="<?php echo base_url(); ?>/imagens2/l1.jpg">
            <img id="l2" src="<?php echo base_url(); ?>/imagens2/l2.jpg">
            <img id="l3" src="<?php echo base_url(); ?>/imagens2/l3.jpg">
            <img id="l4" src="<?php echo base_url(); ?>/imagens2/l4.jpg">
            <img id="l5" src="<?php echo base_url(); ?>/imagens2/l5.jpg">
            <img id="l6" src="<?php echo base_url(); ?>/imagens2/l6.jpg">
            <img id="l7" src="<?php echo base_url(); ?>/imagens2/l7.jpg">
            <img id="seta" src="<?php echo base_url()?>/imagens/setaProjeto.png">    
        </a-assets>

      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-image position="5 -5 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>
      <a-image position="5  20 -8" width="1000" height="1000" rotation="90 0 0" src="#office4"></a-image>  

      <a-image position="-12 1 -96" width="24" height="12" rotation="0 90 0" src="#l1"></a-image> <!-- l1  -->
      <a-image position="-12 1 -72" width="24" height="12" rotation="0 90 0" src="#l2"></a-image> <!-- l2  -->   
      <a-image position="-12 1 -48" width="24" height="12" rotation="0 90 0" src="#l3"></a-image> <!-- l3  -->
      <a-image position="-12 1 -24" width="24" height="12" rotation="0 90 0" src="#l4"></a-image> <!-- l4  -->
      <a-image position="-12 1 0" width="24" height="12" rotation="0 90 0" src="#l5"></a-image> <!-- l5  -->
      <a-image position="-12 1 24" width="24" height="12" rotation="0 90 0" src="#l6"></a-image> <!-- l6  --> 
      <a-image position="-12 1 48" width="24" height="12" rotation="0 90 0" src="#l7"></a-image> <!-- l7  --> 

      <a-image position="0 1 -108" width="24" height="12" rotation="0 0 0" src="#fundo1"></a-image> <!-- r1  -->
      <a-image position="12 1 -96" width="24" height="12" rotation="0 270 0" src="#r1"></a-image> <!-- r2  -->
      <a-image position="12 1 -72" width="24" height="12" rotation="0 270 0" src="#r2"></a-image> <!-- r3  -->   
      <a-image position="12 1 -48" width="24" height="12" rotation="0 270 0" src="#r3"></a-image> <!-- r4  -->
      <a-image position="12 1 -24" width="24" height="12" rotation="0 270 0" src="#r4"></a-image> <!-- r5  -->
      <a-image position="12 1 0" width="24" height="12" rotation="0 270 0" src="#r5"></a-image> <!-- r6-->
      <a-image position="12 1 24" width="24" height="12" rotation="0 270 0" src="#r6"></a-image> <!-- r7  --> 
      <a-image position="12 1 48" width="24" height="12" rotation="0 270 0" src="#r7"></a-image> <!-- r8  --> 


      <a-image position="-24 1 60" width="24" height="12" rotation="0 0 0" src="#p10"></a-image> <!-- p10  -->
      <a-image position="-48 1 60" width="24" height="12" rotation="0 0 0" src="#p9"></a-image> <!-- p9 --> 
      <a-image position="-72 1 60" width="24" height="12" rotation="0 0 0" src="#p8"></a-image> <!-- p8  --> 
      <a-image position="-96 1 60" width="24" height="12" rotation="0 0 0" src="#p7"></a-image> <!-- p7 --> 
      <a-image position="-120 1 60" width="24" height="12" rotation="0 0 0" src="#p6"></a-image> <!-- p6  --> 
      <a-image position="-144 1 60" width="24" height="12" rotation="0 0 0" src="#p5"></a-image> <!-- p5  --> 
      <a-image position="-168 1 60" width="24" height="12" rotation="0 0 0" src="#p4"></a-image> <!-- p4  --> 
      <a-image position="-192 1 60" width="24" height="12" rotation="0 0 0" src="#p3"></a-image> <!-- p3  --> 
      <a-image position="-216 1 60" width="24" height="12" rotation="0 0 0" src="#p2"></a-image> <!-- p2  --> 
      <a-image position="-240 1 60" width="24" height="12" rotation="0 0 0" src="#p1"></a-image> <!-- p1  -->

      <a-image position="24 1 60" width="24" height="12" rotation="0 0 0" src="#p11"></a-image> <!-- p11  -->
      <a-image position="48 1 60" width="24" height="12" rotation="0 0 0" src="#p12"></a-image> <!-- p12 --> 
      <a-image position="72 1 60" width="24" height="12" rotation="0 0 0" src="#p13"></a-image> <!-- p13  --> 
      <a-image position="96 1 60" width="24" height="12" rotation="0 0 0" src="#p14"></a-image> <!-- p14  --> 
      <a-image position="120 1 60" width="24" height="12" rotation="0 0 0" src="#p15"></a-image> <!-- p15  -->
      <a-image position="144 1 60" width="24" height="12" rotation="0 0 0" src="#p16"></a-image> <!-- p16  --> 
      <a-image position="168 1 60" width="24" height="12" rotation="0 0 0" src="#p17"></a-image> <!-- p17  --> 
      <a-image position="192 1 60" width="24" height="12" rotation="0 0 0" src="#p18"></a-image> <!-- p18  --> 

      <a-image position="0 1 84" width="24" height="12" rotation="0 180 0" src="#f11"></a-image> <!-- f11  --> 
      <a-image position="-24 1 84" width="24" height="12" rotation="0 180 0" src="#f10"></a-image> <!-- f10  -->
      <a-image position="-48 1 84" width="24" height="12" rotation="0 180 0" src="#f9"></a-image> <!-- f9 --> 
      <a-image position="-72 1 84" width="24" height="12" rotation="0 180 0" src="#f8"></a-image> <!-- f8  --> 
      <a-image position="-96 1 84" width="24" height="12" rotation="0 180 0" src="#f7"></a-image> <!-- f7 --> 
      <a-image position="-120 1 84" width="24" height="12" rotation="0 180 0" src="#f6"></a-image> <!-- f6  --> 
      <a-image position="-144 1 84" width="24" height="12" rotation="0 180 0" src="#f5"></a-image> <!-- f5  --> 
      <a-image position="-168 1 84" width="24" height="12" rotation="0 180 0" src="#f4"></a-image> <!-- f4  --> 
      <a-image position="-192 1 84" width="24" height="12" rotation="0 180 0" src="#f3"></a-image> <!-- f3  --> 
      <a-image position="-216 1 84" width="24" height="12" rotation="0 180 0" src="#f2"></a-image> <!-- f2  --> 
      <a-image position="-240 1 84" width="24" height="12" rotation="0 180 0" src="#f1"></a-image> <!-- f1  -->

      <a-image position="24 1 84" width="24" height="12" rotation="0 180 0" src="#f12"></a-image> <!-- f12  -->
      <a-image position="48 1 84" width="24" height="12" rotation="0 180 0" src="#f13"></a-image> <!-- f13--> 
      <a-image position="72 1 84" width="24" height="12" rotation="0 180 0" src="#f14"></a-image> <!-- f14  --> 
      <a-image position="96 1 84" width="24" height="12" rotation="0 180 0" src="#f15"></a-image> <!-- f15  --> 
      <a-image position="120 1 84" width="24" height="12" rotation="0 180 0" src="#f16"></a-image> <!-- f16  --> 
      <a-image position="144 1 84" width="24" height="12" rotation="0 180 0" src="#f17"></a-image> <!-- f17  --> 
      <a-image position="168 1 84" width="24" height="12" rotation="0 180 0" src="#f18"></a-image> <!-- f18  --> 
      <a-image position="192 1 84" width="24" height="12" rotation="0 180 0" src="#f19"></a-image> <!-- f19  -->  

      <a-image position="-252 1 72" width="24" height="12" rotation="0 90 0" src="#fundo3"></a-image> <!-- c1  -->
      <a-image position="204 1 72" width="24" height="12" rotation="0 270 0" src="#fundo2"></a-image> <!-- c2  -->      


      <!--Pontos de acesso aos andares.-->

      <a-link  position="-10 0 -57" rotation="0 90 0" href="<?php echo base_url('VrProject/andar1'); ?>?linha=<?php echo $_GET['linha']; ?>" title="PRIMEIRO ANDAR" image="#office1"></a-link> 
      <a-link  position="-10 0 -42" rotation="0 90 0" href="<?php echo base_url('VrProject/andar3'); ?>?linha=<?php echo $_GET['linha']; ?>" title="TERCEIRO ANDAR" image="#office1"></a-link> 

      <!--lógica da linha dependendo da sala.-->
      <?php if ($_GET['linha']==2){ ?>
        <a-image position="0 -4.5 -65" width="24" height="24" rotation="90 0 0" src="#seta"></a-image> <!-- seta  -->
        <a-image position="0 -4.5 10" width="24" height="24" rotation="90 0 0" src="#seta"></a-image> <!-- seta  -->
        <a-image position="0 -4.5 73" width="24" height="24" rotation="90 -90 0" src="#seta"></a-image> <!-- seta  -->
        <a-image position="-35 -4.5 73" width="24" height="24" rotation="90 -90 0" src="#seta"></a-image> <!-- seta  -->
        <a-image position="-70 -4.5 73" width="24" height="24" rotation="90 -90 0" src="#seta"></a-image> <!-- seta  -->
        <a-image position="-105 -4.5 73" width="24" height="24" rotation="90 -90 0" src="#seta"></a-image> <!-- seta  -->
        <a-image position="-147 -4.5 80" width="6" height="6" rotation="90 0 0" src="#seta"></a-image> <!-- seta  -->        
      <?php } 
       if ($_GET['linha']>2) {?>
         <a-image position="0 -4.5 -43" width="12" height="12" rotation="90 -90 0" src="#seta"></a-image> <!-- seta  --> 
          <a-image position="0 -4.5 -65" width="24" height="24" rotation="90 0 0" src="#seta"></a-image> <!-- seta  -->
       <?php }?>     
      
       <a-camera id="camera" position="0 1.6 -30" wasd-controls="acceleration: 2500" wasd-controls-enabled="true" look>
          <a-cursor id="cursor" color="black"></a-cursor>
      </a-camera>


</a-scene>
  </body>
</html>


