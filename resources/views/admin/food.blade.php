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
  
  <h2 class="text-center mt-3 text-bg-secondary p-3">Add Food</h2><br>
 <div class="formfood">
  <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="" class="lable">NAME:</label><br>
    <input type="text" name="name" class="form-control">
  </div>       
    <div class="form-group">
        <label for="" class="lable">image:</label>
        <input type="file" name="image" class="form-control">
      </div>
    <div class="form-group">
      <label for="" class="lable">Price:</label>
      <input type="text" name="price" class="form-control">
    </div>
    <div class="form-group">
      <label for="has_size">  has size</label>
        <input type="checkbox" id="has_size" name="has_size" value="yes" >
       <br>
    </div>
   
    <button class="btn">ADD</button>
  </form>
 </div>

       

 <div class="tablehome2">
    <table class="table">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>image</th>
    <th>edit</th>
    <th>delete</th>
    <th>add size</th>
  </tr>
  @foreach ($food as $row)
    <tr>
      <td>{{ $row['id'] }}</td>
      <td>{{ $row['name'] }}</td>
      <td>{{ $row['price'] }}</td>
      <td>  @if ($row['image'])
        <img src="{{asset('storage/photos/' . $row['image']) }}" style="max-width: 100px;">
    @else
        <span>No Image</span>
    @endif</td>
      <td>
      <a href=""> <i class="fa-solid fa-pen-to-square"></i></a>
      </td>
      <td>
        <form action="">
          <button class="btn btnwdark " style="width: 20px"><i class="fa-solid fa-trash"></i></button>
         </form>
      </td>
   
      <td>
        <a href="{{ route('foodsize',$row['id']) }}"><i class="fa-solid fa-circle-plus" style="color: orangered;"></i></a>
      </td>
    </tr>
  @endforeach
    </table>
   </div>
   <div class="paginateat">
    {{ $food->links() }}
  </div>
  
    <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
    <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>