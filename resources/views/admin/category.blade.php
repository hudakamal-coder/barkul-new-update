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
  
<h2 class="text-center mt-3 text-bg-secondary p-3">Add Category</h2><br>
<div class="category">
  <form action="{{ route('category.store') }} " method="POST">
    @csrf
    <input type="text" name="category" class="form-control">
    <button class="btn btn-dark">Add Category</button>
  </form>
  
</div>


 
  <div class="div-table">
    <table class="table table-dark text-center">
      <tr>
        <th>#</th>
        <th>category</th>
        <th>action</th>
      </tr>
      @foreach ($category as $row)
        <tr>
          <td>{{ $row['id'] }}</td>
          <td>{{ $row['category'] }}</td>
          <td>
            <a href="{{ route('category.edit',$row['id']) }}"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="{{ route('category.destroy',$row['id']) }}" method="post">
              @csrf
              @method('DELETE')
              <BUtton class="btn btn-dark"> <i class="fa-solid fa-trash"></i></BUtton>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
 
  <div class="paginatcategory">
    {{ $category->links() }}
  </div>




       
    <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
    <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>