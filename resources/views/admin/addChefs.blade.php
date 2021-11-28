<x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.admincss')

  </head>
  <body>
      
    <div class="container-scroller " >
        @include('admin.navbar')
          
        <div class="container ">

            <div class="card p-5">
            <div class="card-header text-uppercase">Add Chefs</div>
            <div class="card-body">
                <form class="" action="{{route('addChefs')}}" method="post" enctype="multipart/form-data"> @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="price">Speciality</label>
                    <input type="text" class="form-control" id="price" name="speciality" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="description">Link 1</label>
                        <input type="text" class="form-control" id="description" name="link1" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="description">Link 2</label>
                        <input type="text" class="form-control" id="description" name="link2" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="description">Link 3</label>
                        <input type="text" class="form-control" id="description" name="link3" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlFile1">Image of Chef</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                                    
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>

            <div class="row">
        
        <h1 >All Chefs</h1>
        <table class="table table-hover p-5">
            <thead class="badge-secondary" >
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Speciality</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody class="">
                
                    @foreach ($chefs as $chef)
                        <tr>
                            <td>{{$chef->name}}</td>
                            <td>{{$chef->speciality}}</td>

                            <td>
                                <a href="{{url('/deleteChef', $chef->id)}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{url('/updateChefdetail', $chef->id)}}">
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
    </div>



    <!-- container-scroller -->
    @include('admin.adminjs')

  </body>
</html>

</x-app-layout>

