<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
    <center>
        <img style ="width:40% ; background:#FFFFFF;" 
        src="<?=base_url("css/assets/img/abc.PNG")?>" alt="Slide1"></center>
        <div class="carousel-caption">
        <center><h1>Selamat Datang Di Website GerobakCOM</h1></center>
      </div>
    </div>


    <div class="item">
    <center>
        <img style ="width:40% ; background:#FFFFFF;" 
        src="<?=base_url("css/assets/img/loginbg.jpg")?>" alt="Slide2"></center>
        <div class="carousel-caption center-align">
        <center><h1>Selamat Datang Di Website GerobakCOM</h1></center>
      </div>
    </div>

    <div class="item">
    <center>
    <img style ="width:40% ; background:#FFFFFF;"  
    src="<?=base_url("css/assets/img/loginbg2.jpg")?>" alt="Slide3"></center>
      <div class="carousel-caption  center-align">
      <center><h1>Selamat Datang Di Website GerobakCOM</h1></center>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                        
<table>
<table style = "width: 95%; margin-left: 30px; margin-top: -20px; border-radius: 5px;">
            <tbody>
                <tr>
                    <br>
                        <td>  
                        <h3>Contact Us</h3>   
                        <br>
                            <img src = "<?=base_url("css/assets/img/")?>">WA : 08123456789 <br>
                            - Instagram : @gerobakantoks <br>
                            - Twitter : @gerobakantoks <br>                        
                        </td>
                        <br>
                        <td>  
                        <h3>Address</h3>                        
                        <br>
                            Jl. Saxophone No. 666
                        <br>
                            deantokgerobak@gmail.com
                        <br>
                        <br>
                        </td>  
                    </tr>
            </tbody>
        </table>  
</body>
</html>