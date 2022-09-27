<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <from>
    <!---<button action="{{url('/create_product')}}" method="GET" 
    type="button" class="btn btn-primary"> CREATE</button> --->
    <h2>
      <a class="nav-link" href="{{url('/create_product')}}" > [ADD] </a>
    </h2>
  <from>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        }
        <th>idate</th>
        <th>name</th>
        <th>detail</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php foreach ($product_data as $row ) {   ?>
        <td>{{$row['id'] }}</td>
        <td>{{$row['name'] }}</td>
        <td>{{$row['detail'] }}</td>
        <td>{{$row['price'] }}</td>
        <td>
        <form onsubmit="return confirm ('Do you want to delete?')" action="{{action('App\Http\Controllers\ProductController@destroy', $row['id'])}}"method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger" type="submit">Delete</button>
</form>
      </td>
      <td>
<form onsubmit="return confirm ('Do you want to delete? Really!!!!')" action="{{action('App\Http\Controllers\ProductController@destroy', $row['id'])}}">
{{csrf_field()}}

<input name="_method" type="hidden" value="DELETE"> 
<button class="btn btn-primary" type="submit">Update</button>  
</form>
</td>

      </tr>
      <?php  }  ?>

    </tbody>
  </table>
</div>

</body>
</html>

