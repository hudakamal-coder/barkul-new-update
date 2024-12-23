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
         <h5 style="color: blueviolet;">AdminDashboard</h5>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('admin') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('food.index') }}">Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('category.index') }}">Category</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('information.index') }}">Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">ViewOrder</a>
          </li>
        </ul>
         
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li>
            <form method="POST" action="{{ route('logout') }}" class="form-admin">
              @csrf
              <input type="submit" value="LogOut">
            </form>
          </li>
          </ul>
        
      </div>
    </div>
  </nav>
  

  <h2 class="text-center mt-3 text-bg-secondary p-3">Add Information</h2><br>
  <div class="container">
    <div class="forminfo">
      <form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="" class="lable">LOCATION 1:</label><br>
          <input type="text" name="location1" class="form-control">
        </div>
        <div class="form-group">
          <label for="" class="lable">NUMBER 1:</label>
          <input type="text" name="number1" class="form-control">
        </div>
        <div class="form-group">
         <label for="" class="lable">NUMBER 2:</label>
         <input type="text" name="number2" class="form-control">
       </div>
       <div class="form-group">
         <label for="" class="lable">LOCATION 2:</label><br>
         <input type="text" name="location2" class="form-control">
       </div>
       <div class="form-group">
         <label for="" class="lable">NUMBER 3:</label>
         <input type="text" name="number3" class="form-control">
       </div>
       <div class="form-group">
         <label for="" class="lable">NUMBER 4:</label>
         <input type="text" name="number4" class="form-control">
       </div>
        <button class="btn">ADD</button>
      </form>
     </div>
  </div>
 


       
    <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
    <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>