<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Mini Blog</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
      <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body>
      <div class="site-wrap">
         <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
               <div class="site-mobile-menu-close mt-3">
                  <span class="icon-close2 js-menu-toggle"></span>
               </div>
            </div>
            <div class="site-mobile-menu-body"></div>
         </div>
         <div class="site-section">
            <div class="container">
               <div class="row mb-5">
                  <div class="col-12">
                     <h2>Recent Posts</h2>
                  </div>
               </div>
               <div class="row">
                  <?php
                     $sortedPosts = collect();
                     
                     foreach ($users as $user) {
                        foreach ($user->posts as $post) {
                           $sortedPosts->push(['user' => $user, 'post' => $post]); 
                        }
                     }
                     
                     // Sort the combined collection by post title in descending order
                     $sortedPosts = $sortedPosts->sortBy(function ($item) {
                        return $item['post']->title;
                     });
                     ?>
                  @foreach ($sortedPosts as $item)
                  <div class="col-lg-4 mb-4">
                     <div class="entry2">
                        <a href="single.html"><img src="images/image-post.png" alt="Image" class="img-fluid rounded"></a>
                        <div class="excerpt">
                           @foreach ($item['post']->tags as $tag)
                           <span class="post-category text-white bg-danger mb-3">{{ $tag->name }}</span>
                           @endforeach
                           <h2><a href="single.html">{{ $item['post']->title }}</a></h2>
                           <div class="post-meta align-items-center text-left clearfix">
                              <figure class="author-figure mb-0 mr-3 float-left"><img src="images/everton.jpeg" alt="Image"
                                 class="img-fluid"></figure>
                              <span class="d-inline-block mt-1">By <a href="#">{{ $item['user']->name }}</a></span>
                              <span>&nbsp;-&nbsp; {{ $item['post']->created_at->format('d M') }}</span>
                           </div>
                           <p>{{ $item['post']->description }}</p>
                           <!-- <p><a href="#">Read More</a></p> -->
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
      <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
      <script src="{{ asset('js/jquery-ui.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
      <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
      <script src="{{ asset('js/aos.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag() { dataLayer.push(arguments); }
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
         integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
         data-cf-beacon='{"rayId":"7fc4f15bfd771d32","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
         crossorigin="anonymous"></script>
   </body>
</html>