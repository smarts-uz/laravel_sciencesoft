<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('style-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <title>Sciensoft Development Company</title>

   

    @yield('css')

  </head>
  <body>

    <div class="wrapper">
    
    @include('front.components.navbar')

    @yield('main')

    @include('front.components.footer')

             
    </div>

  @yield('js')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="{{ asset('index.js') }}"></script>
  <script>
    $(document).ready(function () {
        $('.customer-logos').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1000,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [{
            breakpoint: 768,
            setting: {
              slidesToShow: 4
            }
          }, {
            breakpoint: 520,
            setting: {
              slidesToShow: 3
            }
          }]
        });
      });
  </script>

  </body>
</html>
