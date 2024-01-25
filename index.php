<!doctype html>
<html lang="es">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</head>
<style>
    body {
        background-color: aliceblue;
    }

    .col {
        background-color: palegoldenrod;
        height: 50px;
        width: 50px;
        border-color: rgb(3, 3, 3);
        text-align: center;
        font-family: cursive;
        font-size: 20px;

    }

    .row {
        height: 50px;
        font-size: 19px;
    }

    h1 {
        text-align: center;
        background-color: rgb(177, 165, 155);
    }

    h4 {
        text-align: center;
        font-family: cursive;
    }

    .navbar-brand {
        text-align: center;
    }
</style>

<body>

 
  
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Molds on the Web</a>
            

        </div>
                 <div class="d-flex justify-content-end">
        
                    
                    <button type="button" class="btn btn-secondary " onclick="location.href='servicios.php'">iniciar Sesion</button>

               
           
                 </div>
    </nav>

    <br>
    <br>




    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>

        </div>
        <br>

        <div class="containerr">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/15.jpg" class="d-block" style="width:100%" style="height:20% ">
                </div>
                <div class="carousel-item">
                    <img src="img/11.jpeg" class="d-block" style="width:100% " style="height:20% ">
                </div>
                <div class="carousel-item">
                    <img src="img/13.jpg" class="d-block" style="width:100%" style="height:20% ">
                </div>
                <div class="carousel-item">
                    <img src="img/15.jpg" class="d-block" style="width:100%" style="height:20% ">
                </div>
            </div>
            

            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
           
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>


        </div>

    </div>
    <br>
    <div class="d-flex justify-content-start">
 
  <div class="card" style="width:400px">
    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>

  </div>
  <div class="d-flex justify-content-end">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.301905773275!2d-99.64512602521582!3d19.26923288197559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8954bd3c273f%3A0x96b8590e52188616!2sIngenieria%20%26%20manufactura%203g!5e0!3m2!1ses!2smx!4v1683081386391!5m2!1ses!2smx" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    


</html>