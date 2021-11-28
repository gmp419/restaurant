<x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    
    @include('admin.admincss')

  </head>
  <body>
      
    <div class="container-scroller " >
        @include('admin.navbar')
          
        <div class="container ">
        <div class="card p-5">
          <div class="card-header text-uppercase">Update Food Items</div>
          <div class="card-body">
        <form class="" action="{{route('updateChef', $chefs->id)}}" method="post" enctype="multipart/form-data"> @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="title" value="{{$chefs->name}}" name="name" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="price">Speciality</label>
                <input type="text" class="form-control" id="price" value="{{$chefs->speciality}}" name="speciality" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="description">Link 1</label>
                    <input type="text" class="form-control" id="description" value="{{$chefs->link1}}" name="link1" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="description">Link 2</label>
                    <input type="text" class="form-control" id="description" value="{{$chefs->link2}}" name="link2" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="description">Link 3</label>
                    <input type="text" class="form-control" id="description" value="{{$chefs->link3}}" name="link3" required>
                </div>
                <div class="form-group col-md-12">
                    <img src="/chefimages/{{$chefs->image}}" style="height: 100px; width: auto"/>
                </div>
                                
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
        </div>
      </div>
    </div>



    <!-- container-scroller -->
    @include('admin.adminjs')

  </body>
</html>

</x-app-layout>

