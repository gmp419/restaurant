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
        
        <h1 >Reservation</h1>
        <table class="table table-hover p-5 w-100">
            <thead class="badge-secondary" >
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">People</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Message</th>
            
                </tr>
            </thead>
            <tbody class="">
                
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{$reservation->name}}</td>
                            <td>{{$reservation->email}}</td>
                            <td>{{$reservation->phone}}</td>
                            <td>{{$reservation->people}}</td>
                            <td>{{$reservation->date}}</td>
                            <td>{{$reservation->time}}</td>
                            <td>{{$reservation->message}}</td>

                            
                           

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

