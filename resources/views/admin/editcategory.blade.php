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
            <a class="nav-link " aria-current="page" href="{{ route('category.index') }}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('item.index') }}">AddItem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Viewitem</a>
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
  
<h2 class="text-center mt-3 text-bg-secondary p-3">Edit Category</h2><br>
<div class="category">
  <form action="{{ route('category.update',$data['id']) }} " method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="category" class="form-control" value="{{ $data['category'] }}">
    <button class="btn btn-warning">Edit Category</button>
  </form>
  
</div>


  
 
 




       
    <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
    <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>