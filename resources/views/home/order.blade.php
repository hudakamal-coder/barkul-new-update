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
                        <a class="nav-link active" aria-current="page" href="{{ route('eats') }}">Food</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('galery') }}">Galary</a>
                      </li>
                      
                    </ul>
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0 deliver">
                      <li class="nav-item">
                        <img src="images/delivery-bike.png" width="45px" alt=""> <p> Delivery Now</p>
                         <p style="color: #773d3d;">07707571717</p>
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
 <div class="formor">
    <img src="images/order-now.png" width="100px" alt="">
    <form method="post" action="{{ route('myorder.store') }}">
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" class="form-control m-1" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group">
            <label for="">phone</label>
            <input type="text" name="phone" class="form-control m-1" value="{{ Auth::user()->number }}">
        </div>
        <div class="form-group">
            <label for="">address</label>
            <input type="text" name="address" class="form-control m-1" value="{{ Auth::user()->address }}">
        </div>
       <button class="btnorder">order</button>
    </form>
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