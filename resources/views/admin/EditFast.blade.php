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





  <h2 class="text-center mt-3 text-bg-secondary p-3">Edit Food</h2><br>
 <div class="formfood">
  <form action="{{ route('fast.update',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="" class="lable">NAME:</label><br>
    <input type="text" name="name" class="form-control" value="{{ $data->name }}">
  </div>    
  <div class="form-group">
    <label for="" class="lable">Price:</label>
    <input type="text" name="price" class="form-control"  value="{{ $data->price }}">
  </div>   
  <div class="form-group">
    <label for="" class="lable">BigSize:</label>
    <input type="text" name="big" class="form-control"  value="{{ $data->big}}">
  </div>
  <div class="form-group">
    <label for="" class="lable">MediumSize:</label>
    <input type="text" name="medium" class="form-control"  value="{{ $data->medium}}">
  </div>

  <div class="form-group">
    <label for="" class="lable">SmallSize:</label>
    <input type="text" name="small" class="form-control"  value="{{ $data->small}}">
  </div>

    <div class="form-group">
        <label for="" class="lable">image:</label>
        <input type="file" name="image" class="form-control"  value="{{ $data->image}}">
      </div>
    
   
    <button class="btn btn-warning">EDIT</button>
  </form>
 </div>

       

<br><br><br><br><br><br><br>
 
  

  <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
  <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>