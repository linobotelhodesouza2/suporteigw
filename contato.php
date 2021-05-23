<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="description" content="Suporte IGW - Suporte em Informática"/> 
    <meta name="keywords" content="monitoramento, camêras de segurança, segurança, suporte em informática"/>
    <meta name="author" content="Lino Botelho de Souza"/>   
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/wats.css">
    <link rel="stylesheet" type="text/css" href="css/ancora.css">
    <link rel="stylesheet" type="text/css" href="css/mapa.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script type="js/scroll.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script type="text/javascript" src="js/gamma.js"></script>
    <script type="text/javascript" src="js/jquerypp.custom.js"></script>
    <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="js/js-url.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.70736.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <title>Suporte IGW</title>
        <!-------------------------------------------------------------------------------------------------->
  </head>
  <body>
    <!--header-logo----------------------------------------------------------------------------------------->
    <header id="header">
      <a href="#home" class="logo">
        <img src="img/can_logo.webp" style="width: 45px">
      </a>
    <!--header-menu----------------------------------------------------------------------------------------->
      <ul>
        <li><a href="index.html" onclick="toggle()">Home</a></li>
       <li><a href="fotos.html" onclick="toggle()">Fotos</a></li>
      </ul>
    </section>

      <div class="toggle" onclick="toggle()"></div>
    </header>

    <!--Section: Contact v.2-->

<div class="container-contato">
    <!--Section: Contact v.1-->
<section class="section pb-5">

  <!--Section heading-->
<h2 data-aos="zoom-in">Contato</h2>
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fas fa-envelope"></i> Deixe sua Mensagem</h3>
          </div>

          <p>Aguardamos o seu contato</p>
          <br>
          <!--Body-->
    
        <div class="contactForm">
          <form action="processa_envio.php" method="post">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control" name="nome" placeholder="* Nome Completo" required >
            <label for="form-name"></label>
          </div>

          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="form-email" class="form-control" name="email" placeholder="* Email" required >
            <label for="form-email"></label>
          </div>

          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control" name="assunto" placeholder="Assunto" >
            <label for="form-Subject"></label>
          </div>

          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea name="mensagem" placeholder="Mensagem" id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text"></label>
          </div>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg" value="Send">Enviar</button>
          </div>

        </div>
      </form>
    </div>
  
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://maps.google.com/maps?width=1100&amp;height=540&amp;hl=en&amp;q=rua%20elias%20bedran%2C%20sp+(Suporte%20Igw)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row-contato text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
            <a href="https://www.Facebook.com/suporteigw2" class="navbar-brand">
              <img src="img/facebook1.webp" height="35">
              <h5 data-aos="zoom-in" class="navbar-brand">facebook</h5>
            </a>
            <a href="https://www.instagram.com/suporteigw" class="navbar-brand">
              <img src="img/instagram1.webp" height="35">
              <h5 data-aos="zoom-in" class="navbar-brand">instagram</h5>  
            </a>
            <a href="contato.html" class="navbar-brand">
              <img src="img/email.webp" height="35">
              <h5 data-aos="zoom-in" class="navbar-brand">suporteigw@gmail.com</h5>
            </a>
            <a href="https://wa.me/551145643107?text=Olá%20,%20Gostaria%20de%20ter%20mais%20informações" target="_blank" class="navbar-brand">
              <img src="img/telefone.webp" height="35">
              <h5 data-aos="zoom-in" class="navbar-brand">(11)4564-3107 </h5>         
            </a>
          </div>
        <div class="col-md-4">
          
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>

</section>
</div>
     <footer>
      <div class="container-fluid-footer-b bg-dark p-4">
        <div class="row">
          <div class="col-sm-12 text-white text-center">
            <p class="mb-0">© 2019 Suporteigw Soluções em informática e CFTV. São Paulo - SP</p>
            
            <a href="#" class="navbar-brand-seta">
              <img src="img/top.webp" height="25">
            </a>
          </div>
        </div>
      </div>
      <a class="wat" href="https://api.whatsapp.com/?phone=551145643107&text=Texto%20aqui"
        target="_blank"
        style="position:fixed;bottom:20px;right:30px;">
        <img src="img/watsap.webp" alt="Contato pelo WhatsApp" />
      </a>
    </footer>

    <script type="text/javascript">
      $(document).ready(function(){
        $window = $(window);
        //Captura cada elemento section com o data-type "background"
        $('section[data-type="background"]').each(function(){
            var $scroll = $(this);   
                //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
                $(window).scroll(function() {
                    var yPos = -($window.scrollTop() / $scroll.data('speed')); 
                    var coords = '0% '+ yPos + 'px';
                    $scroll.css({ backgroundPosition: coords });    
                });
       });  
    });  
    </script>  
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <script type="text/javascript">
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      })
      function toggle(){
        var header = document.querySelector("header");
        header.classList.toggle("active");      
      }
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
        duration: 1000,
        });
      </script>


    <script src="//code.jivosite.com/widget/U2m1Kv0Pr8" async></script>
  </body>
</html> 