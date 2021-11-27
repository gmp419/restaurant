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
            style="position: relative; padding: 2%"
            class="container">
        
        <h1 >User</h1>
        <table class="table table-hover p-5">
            <thead class="badge-secondary" >
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="">
                
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>

                            @if($user->usertype == "0")
                            <td>
                                <a href="{{url('/deleteusers', $user->id)}}">
                                {{$user->name}}
                                </a>
                            </td>
                            @else
                                <td>Not allowed</td>
                            @endif

                        </tr>
              
                    @endforeach
                
                
                
            </tbody>
            </table>
            </div>
        </div>



    <!-- container-scroller -->
    @include('admin.adminjs')

  </body>
</html>

</x-app-layout>

