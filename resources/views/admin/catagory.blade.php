<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->


        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->

        <!-- partial:partials/_Body.html -->
        <div class="main-panel">
            <div class="content-wrapper">

               {{-- message alert --}}

                @if(session()->has('message'))
                     <div class="alert alert-success">
                        <button type="button" value="" class="close" data-dismiss="alert" area-hidden="true">x</button>
                        {{session()->get('message')}}
                     </div>
                @endif

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <title></title>
                </head>
                <body>
                    <div class="card bg-light mb-3">
                        <div class="card-header text-center">Add Catagory</div>
                            <div class="card-body">
                                <form action="{{url('/add_catagory')}}" method="POST">

                                    @csrf

                                    <div class="row p-2">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Catagory" name="catagory">
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary">Add Catagory</button>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Catagory Name</th>
                                                    <th scope="col">Action</th>
                                                  </tr>
                                                </thead>

                                                @foreach ($data as $data )
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$data->catagory_name}}</td>
                                                            <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete_catagory',$data->id)}}"> Delete</a></td>
                                                        </tr>

                                                    </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                </body>
                </html>

            </div>
        </div>
        <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
