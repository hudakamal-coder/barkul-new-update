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
  <form action="{{ route('fast.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="" class="lable">NAME:</label><br>
    <input type="text" name="name" class="form-control">
  </div>    
  <div class="form-group">
    <label for="" class="lable">Price:</label>
    <input type="text" name="price" class="form-control">
  </div>   
  <div class="form-group">
    <label for="" class="lable">BigSize:</label>
    <input type="text" name="big" class="form-control">
  </div>
  <div class="form-group">
    <label for="" class="lable">MediumSize:</label>
    <input type="text" name="medium" class="form-control">
  </div>
  <div class="form-group">
    <label for="" class="lable">SmallSize:</label>
    <input type="text" name="small" class="form-control">
  </div>
    <div class="form-group">
        <label for="" class="lable">image:</label>
        <input type="file" name="image" class="form-control">
      </div>
   
   
    <button class="btn">ADD</button>
  </form>
 </div>

       

<br><br><br><br><br><br><br>



<div class="tablehome3">
    <table class="table">
  <tr>
    
    <th>name</th>
    <th>price</th>
    <th>BigSize</th>
    <th>MediumSize</th>
    <th>SmallSize</th>
    <th>image</th>
    <th>edit</th>
    <th>delete</th>
    
  </tr>
  @foreach ($fast as $row)
      <tr>
        <td>{{ $row->name }}</td>
        <td>{{ $row->price }}</td>
        <td>{{ $row->big }}</td>
        <td>{{ $row->medium }}</td>
        <td>{{ $row->small }}</td>
        <td> 
        @if ($row['image'])
            <img src="{{asset('storage/photos/' . $row['image']) }}" style="width:70px;">
        @else
            <span>No Image</span>
        @endif
      </td>
      <td>
        <a href="{{ route('fast.edit',$row->id) }}"> <i class="fa-solid fa-pen-to-square"></i></a>
        </td>
        <td>
          <form action="{{ route('fast.destroy',$row['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btnwdark " style="width: 20px"><i class="fa-solid fa-trash"></i></button>
           </form>
        </td>
      </tr>
  @endforeach
   
    </table>
   </div>



   <div class="paginateat">
    {{ $fast->links() }}
  </div>
  




















 




  <script src="{{ asset('bootfile/icon/icon.js') }}"></script>
  <script src="{{ asset('bootfile/js/bootstrap.min.js') }}"></script>
</body>
</html>