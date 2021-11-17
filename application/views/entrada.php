

<html>
  <head>
    <title>VRProjectFG</title>
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  </head>
  
  <body>
  <a-scene>
        <a-assets>
            <img id="office1" src="<?php echo base_url(); ?>/imagens/entrada_FG.jpeg">
            <img id="office2" src="<?php echo base_url(); ?>/imagens/a2.jpg">
            <img id="office3" src="<?php echo base_url(); ?>/imagens/c3.jpg">
            <img id="office4" src="<?php echo base_url(); ?>/imagens/chao.jpg">
            <img id="reta" src="<?php echo base_url(); ?>/imagens/retap.png">
            <img id="seta1" src="<?php echo base_url(); ?>/imagens/seta1.jpg">
            <a-asset-item id="poke" src="<?php echo base_url(); ?>/componentes/model.gltf"></a-asset-item>
      
        </a-assets>
      <a-sky src="#office1" ></a-sky>
      <!--link1-->
      <a-image  position="-15 5 -15" width="10" height="5" src="#office2"></a-image>
      <a-link  position="-15 5 -14" href="<?php echo base_url('VrProject/hall'); ?>?linha=1" title="Biologia" image="#office1"></a-link> 
      <!--link2-->
      <a-image  position="-2 5 -15" width="10" height="5" src="#office2"></a-image>
      <a-link  position="-2 5 -14" href="<?php echo base_url('VrProject/hall'); ?>?linha=0" title="Contábeis" image="#office3"></a-link>
      <a-entity position="0 0 -3" id="weapon">
        <a-entity gltf-model="#poke"></a-entity>
      </a-entity>


      
      
        


       <a-camera id="camera" position="0 1.6 0" wasd-controls="acceleration: 20500" wasd-controls-enabled="true" look>
          <a-cursor id="cursor" color="black"></a-cursor>
      </a-camera>
     


  </a-scene>
</body>

</html>


