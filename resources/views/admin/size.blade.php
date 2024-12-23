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
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('food.index') }}">Food</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('category.index') }}">Category</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Information</a>
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
  
  <h2 class="text-center mt-3 text-bg-secondary p-3">Add SizeFood</h2><br>
 <div class="formfood">
  <form action="{{ route('addsize',$food['id']) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="" class="lable">n_size:</label>
        <input type="text" name="n_size" class="form-control">
      </div>
    <div class="form-group">
      <label for="" class="lable">Price:</label>
      <input type="text" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="" class="lable">food_id:</label>
        <input type="text" name="food_id" class="form-control" value="{{ $food['id'] }}">
      </div>
    <button class="btn">ADD</button>
  </form>
 </div>

       
    <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
    <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>