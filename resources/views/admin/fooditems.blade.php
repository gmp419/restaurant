<x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller " >
        @include('admin.navbar')
        <div 
            style=" padding: 2%"
            class="container"
        >
        <div class="row">
        
        <h1 >List of Food Items</h1>
        <table class="table table-hover p-5">
            <thead class="badge-secondary" >
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody class="">
                
                    @foreach ($fooditems as $fooditem)
                        <tr>
                            <td>{{$fooditem->title}}</td>
                            <td>{{$fooditem->price}}</td>
                            <td>{{$fooditem->description}}</td>

                            <td>
                                <a href="{{url('/deletefood', $fooditem->id)}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{url('/updatefood', $fooditem->id)}}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                            
                           

                        </tr>
              
                    @endforeach
                
                
                
            </tbody>
            </table>
            </div>
            </div>
        </div>



    <!-- container-scroller -->
    @include('admin.adminjs')

  </body>
</html>

</x-app-layout>

