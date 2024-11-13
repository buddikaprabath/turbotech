<!DOCTYPE html>
<html>
    <head>

        <title>Turbo Tech</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('main/custom.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
    </head>
    <body class="antialiased">
        <header>
          @include('mainbody.header')
          </header>
          
        
          <div class="page-container">
            <!-- Carousel Start -->
            @yield('content')
        <!-- Carousel End -->
          </div>
              
         
        
          <!-- footer -->
          @include('mainbody.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
    </body>
</html>
