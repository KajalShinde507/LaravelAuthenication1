@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Normal UserDashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in As  Normaluser!
                    view Admins records
                    
                    <div class="row">
                    <div class="col-md-12">
                    <br />
                    <h3 align = "center"> Admins records </h3>
                     <br />
                     <table class="table table-bordered">
                     <tr>
                     <th>ID</th>
                     <th>Manufacture</th>
                     <th>Name</th>
                     <th>Model</th>
                     <th>Manufacturing_year</th>
                     <th>seating_capacity</th>
                     </tr>
        

                      <tbody>

                      

                        @foreach($cars as $value)

                            <tr>

                               <td>{{ $value->id }}</td>
                               <td>{{ $value->manufacture }}</td>
                               <td>{{ $value->name }}</td>
                               <td>{{ $value->model }}</td>
                            <td>{{ $value->manufacturing_year }}</td>
                            <td>{{ $value->seating_capacity }}</td>

                               </tr>

                               @endforeach

                             </tbody>


                    
                     </table>
                    </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
