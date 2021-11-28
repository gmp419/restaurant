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
        <form class="" action="{{route('updatefooditem', $fooditems->id)}}" method="post" enctype="multipart/form-data"> @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" value="{{$fooditems->title}}" name="title" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" value="{{$fooditems->price}}" name="price" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" value="{{$fooditems->description}}" name="description" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <img src="/foodimages/{{$fooditems->image}}" style="min-height 100px;; min-width:10px"/>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" >
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

