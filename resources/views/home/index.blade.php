<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Barkul FastFood</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootfile/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootfile/icon/icon.css') }}">
</head>
<body> 
            <nav class="navbar navbar-expand-lg bg-body-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="images/barkul.png" alt="" width="60%" class="logo">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('eats') }}">food</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('fasts') }}">fast</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('galery') }}">Galary</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0 deliver">
                        <li class="nav-item">
                          
                            <img src="images/delivery-bike.png" width="45px" alt=""> <p>Delivery Now</p><br>
                            <p style="color: #812222;">07707571717</p>
                          
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @if(Route::has('login'))
                        @auth
                        <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ route('mycart') }}">
                            <i class="fa fa-shopping-cart icon"></i> <span>{{ $count }}</span>
                          </a>
                        </li>
                        <li>
                          <form method="POST" action="{{ route('logout') }}" class="form-user">
                            @csrf
                            <input type="submit" value="LogOut" class="logout">
                          </form>
                        </li>
                        @else
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ url('/login') }}">
                            <i class="fa-solid fa-arrow-right-to-bracket icon"></i>
                        </a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/register') }}">
                                <i class="fa-solid fa-user icon"></i>
                            </a>
                        </li>
                        @endauth
                        @endif
                      </ul>
                    
                  </div>
                </div>
              </nav>
              
        <div class="div-content">
            <div class="div-text">
                <h1><span class="barkul">Barkul</span> <span style="color: rgb(255, 217, 0);">Fast</span>Food</h1>
                <p>Barkul Will Make You Forget Your Hunger...!<br>
                Eat The Best FastFood In Sulaimani Whis Us<br>
                Just Order From Barkul...
                </p>
                <h2>Just <span style="color: rgb(255, 217, 0);">D</span>elivry</h2>
                <button class="btn btn-danger menu"> <a style="text-decoration: none;color: #FFF;" href="pizzamenu.html">View Menu</a> </button>
            </div>
       <div class="div-img">
        <img src="images/uk.jpg" width="550px" alt="">
       </div>
        </div>
        <h1 class="text-center h1piza">The Best Pizza In Here</h1><br>
             <div class="div-pizza">
                
                <div>
                    <img src="images/pbarkul.png" width="300px">
                </div>
                <div>
                    <img src="images/pbarkul2.png" width="300px">
                </div>
                <div>
                    <img src="images/pbarkul3.png" width="300px">
                </div>
                <div>
                    <img src="images/pbarkul.png" width="300px">
                </div>
             </div>
       <div class="tab-content">
          <div class="tab">
            <i class="fa-solid fa-burger ic" ></i>
            <h3>Best Quality</h3>
             <p>we use only the best ingredients to cookthe fresh food for you</p>
          </div>
          <div class="tab">
            <i class="fa-solid fa-clock-rotate-left ic"></i>
            <h3>Quick Delivery</h3>
             <p>everything you order will be quickly delivered to your door</p>
          </div>
          <div class="tab">
            <i class="fa-solid fa-truck ic"></i>
            <h3>Free Shipping</h3>
             <p>free delivery to barkul area yeh to barkul area</p>
          </div>
          <div class="tab"> 
            <i class="fa-solid fa-burger ic"></i>
            <h3>Variety Of Dishes</h3>
             <p>in our menu you will find a wide variety od dishes and drinks</p>
          </div>
       </div>

      
       <div class="ourmenu">
        <img src="images/barkul.png" alt="">
        <h2>Our Menu</h2>
       </div>
       <div class="ourmenu">
        <img src="images/pbarkul.png" width="80px">
        <h2>Pizza And Shawarma Menu</h2><br>
       </div>
    <a href="{{ route('menu')}}" class="see">See <i class="fa-solid fa-greater-than"></i> </a>
      
       <br>
       <div class="galary">
        <img src="images/l.jpg">
         <img src="images/m.jpg" alt="">
         <img src="images/cc.jpg" alt="">
         <img src="images/dd.jpg" alt="">
         <img src="images/h2.jpg" alt="">
         <img src="images/v.jpg" alt="">
       </div>
       <div class="galary">
        <img src="images/u.jpg" alt="">
        <img src="images/h1.jpg" alt="">
        <img src="images/g.jpg" alt="">
        <img src="images/ee.jpg" alt="">
        <img src="images/y.jpg" alt="">
        <img src="images/o.jpg" alt="">
       </div> 
       <div class="folower">
       <div> 
        <h1 class="folo" style="color: red;">The Best FastFood <br>In This Town</h1>
        <p>Barkul Will Make You Forget Your Hunger...!<br>
            Eat The Best FastFood In Sulaimani Whis Us<br>
            Just Order From Barkul...
        </p>
       <h2 class="folo">Just <span style="color: rgb(255, 217, 0);">D</span>elivry</h2><br>
       <p style="font-weight: bold;" >9:00 AM To 11: PM <span style="color: rgb(56, 167, 56);">Open</span></p>
       </div>
       <div class="img">
    
       </div>
       </div>
       <br><br><br>

       <div class="card-footer">
        <div class="logo-footer">
          <img src="images/barkul.png" width="110px">
       </div><br>
        <div class="footer-text">
          <h4>Only Those Who Are Guests Of <br> Barkul Know Its Taste</h4><br>
          <p style="font-weight: bold;" >9:00 AM To 11: PM <span style="color: rgb(56, 167, 56);">Open</span></p>
        </div>
       <br>
          <div class="footer-img">
            <img src="images/delivery-bike.png" width="200px">
          </div>
          <hr>
          <br>
          <div class="footer-list">
            <ul>
              <li> <a href="">Home</a> </li>
              <li> <a href="">About Us</a> </li>
              <li> <a href="{{ route('galery') }}">Galary</a> </li>
              <li> <a href="{{ route('menu') }}">Menu</a></li>
            </ul>
          </div>
          <div class="contact">
            <h5>Delivery contact and Location</h5>
            @foreach ($info as $info)
            <p><i class="fa-solid fa-location-dot"></i> {{ $info['location1'] }}</p>
            <p><i class="fa-brands fa-whatsapp"></i> <i class="fa-brands fa-viber"></i> {{ $info['number1'] }}</p>
            <p><i class="fa-brands fa-whatsapp"></i> <i class="fa-brands fa-viber"></i> {{ $info['number2'] }}</p>
            <p><i class="fa-solid fa-location-dot"></i> {{ $info['location2'] }}</p>
            <p><i class="fa-brands fa-whatsapp"></i> <i class="fa-brands fa-viber"></i> {{ $info['number3'] }}</p>
            <p><i class="fa-brands fa-whatsapp"></i> <i class="fa-brands fa-viber"></i> {{ $info['number4'] }}</p>
            @endforeach
           
          </div>
          <div class="footer-button">
            <button class="button-17" role="button"> <a href="">OrderNow</a> </button><br><br>
            <button class="button-17" role="button"> <a href="{{ route('menu') }}">ViewMenu</a> </button>
          </div>
          <div class="footer-copy">
             <p>@ 2024 Barkul Resturant Slemany.All Right Reserved</p>
          </div>
       </div>
       
    <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
    <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>