
<html>
<head>
  <title>VRProjectFG</title>
  <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <style type="text/css">
    #preloader {
      position: flex;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: black;
    }
    #loader {
      display: inline-block;
      position: relative;

      left: 50%;
      top: 90%;
      width: 150px;
      height: 150px;
      margin: -22em 0 0 -75px;
      border-radius: 50%;
      border: 3px solid transparent;
      border-top-color: #177300;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }
    #loader:before {
      content: "";
      position: absolute;
      top: 5px;
      left: 5px;
      right: 5px;
      bottom: 5px;
      border-radius: 50%;
      border: 3px solid transparent;
      border-top-color: #209902;
      -webkit-animation: spin 3s linear infinite;
      animation: spin 3s linear infinite;
    }
    #loader:after {
      content: "";
      position: absolute;
      top: 15px;
      left: 15px;
      right: 15px;
      bottom: 15px;
      border-radius: 50%;
      border: 3px solid transparent;
      border-top-color: #27c400;
      -webkit-animation: spin 1.5s linear infinite;
      animation: spin 1.5s linear infinite;
    }
    @-webkit-keyframes spin {
      0%   {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
    @keyframes spin {
      0%   {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>
</head>


<script type="text/javascript">

  function fases(mostrarFase,fase,position){

    var img = document.querySelector("#"+fase);
    if (mostrarFase == 'T'){
      img.setAttribute('position', position);
    }else{
      img.setAttribute('position', position);
    }
    /*
    if (document.getElementById(mostrarFase).style.display == 'block') {
      console.log("caiu aqui");
      document.getElementById(mostrarFase).style.display = 'none';
    }else {
     console.log("caiu aqui22222");
     document.getElementById(mostrarFase).style.display = 'block';
   }
   */
 }
</script>

<body>
  <div id="main">
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
        <img id="p13" src="<?php echo base_url(); ?>/imagenshall/p13.jpg">

        <img id="r_fase1" src="<?php echo base_url(); ?>/imagenshall/r_fase1.png">
        <img id="r_fase2" src="<?php echo base_url(); ?>/imagenshall/r_fase2.png">

        <img id="fase1" src="<?php echo base_url(); ?>/imagenshall/fase1.png">
        <img id="fase2" src="<?php echo base_url(); ?>/imagenshall/fase2.png">



        <img id="seta" src="<?php echo base_url()?>/imagens/setaProjeto.png">  
        <a-asset-item id="poke" src="<?php echo base_url(); ?>/componentes/model.gltf"></a-asset-item>
        <a-asset-item id="Table1" src="<?php echo base_url(); ?>/componentes/Table1.gltf"></a-asset-item>
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


      <a-image position="0 1 36" width="24" height="12" rotation="0 180 0" src="#p13"></a-image> <!-- a1  --> 
      <a-image position="24 1 36" width="24" height="12" rotation="0 180 0" src="#p13"></a-image> <!-- a2  -->
      <a-image position="36  1 24" width="24" height="12" rotation="0 270 0" src="#p13"></a-image> <!-- a3  --> 
      <a-image position="36 1 0" width="24" height="12" rotation="0 270 0" src="#p13"></a-image> <!-- a4-->   

      <a-image src="#fase1" width="8" height="2" position="0 1.6 -107.9" onclick="fases('T','m_fase1','0 1.6 -107')" ></a-image> 
      <a-image id="m_fase1" src="#r_fase1" width="15" height="10" position="0 -15 -107" onclick="fases('F','m_fase1','0 -15 -107')" ></a-image> 

      <a-image src="#fase2" width="8" height="2" position="15 1.6 -107.9" onclick="fases('T','m_fase2','15 1.6 -107')" ></a-image> 
      <a-image id="m_fase2"src="#r_fase2" width="15" height="10" position="15 -15 -107" onclick="fases('F','m_fase2','15 -15 -107')" ></a-image> 

      <!-- SALAS DE AULA
      <a-link peekMode="true"  position="0 1.6 -100" href="<?php echo base_url('VrProject/hall'); ?>?linha=1" title="Biologia" image="#office1"></a-link> 
      <a-link  position="10 1.6 -100" href="<?php echo base_url('VrProject/hall'); ?>?linha=2" title="Banco de Dados" image="#office1"></a-link> 
      <a-link  position="20 1.6 -100" href="<?php echo base_url('VrProject/hall'); ?>?linha=3" title="Desenho Técnico" image="#office1"></a-link> 
       <a-link  position="30 1.6 -100" href="<?php echo base_url('VrProject/hall'); ?>?linha=0" title="Passeio" image="#office1"></a-link> 
     -->
     <!--acesso primeiro andar
     <a-link  position="-26 0 -10" rotation="0 0 0" href="<?php echo base_url('VrProject/andar1'); ?>?linha=<?php echo $_GET['linha']; ?>" title="PRIMEITO ANDAR" image="#office1"></a-link> 
   -->
     <!--lógica da linha dependendo da sala
     <?php if ($_GET['linha']!=0): ?>
      <a-image position="0 -4.4 -100" width="12" height="12" rotation="90 0 0" src="#seta"></a-image>
      <a-image position="0 -4.4 -50" width="24" height="24" rotation="90 0 0" src="#seta"></a-image>
      <a-image position="0 -4.4 -0" width="24" height="24" rotation="90 270 0" src="#seta"></a-image>
      <a-image position="-20 -4.4 -0" width="12" height="12" rotation="90 180 0" src="#seta"></a-image>
    <?php endif ?>
    .-->
    <a-entity id="rig" position="0 1.6 -90" rotation="0 180 0">
      <a-camera id="camera"  wasd-controls="acceleration: 2000" wasd-controls-enabled="true" look>
        <a-cursor id="cursor" color="black"></a-cursor>
      </a-camera>
    </a-entity>

    <!-- componentes da cena-->
    <a-entity position="30 -5 30" id="weapon">
      <a-entity gltf-model="#poke"></a-entity>
    </a-entity>
    <a-entity position="30 -3 28" rotation="-90 180 0" id="table">
      <a-entity gltf-model="#Table1"></a-entity>
    </a-entity>


  </a-scene>
</div>
<div id="preloader">  <div id="loader"></div></div>
<script>
  $( document ).ready(function() {
    $('#preloader').show();
    $('#main').hide();
    setTimeout(function () {
      $('#preloader').hide();
      $('#main').show();
    }, 2 * 1000);
  });
</script>
</body>
</html>



