@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Catalog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            font-family: Segoe UI;
            font-size: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin-bottom:20px; font-family: Rockwell; color: #152037"><center>COMPANY CATALOG</center></h1>
            </div>
            
        </div>
        <div class="row">
            <div class="pull-right mb-2 col-lg-6">
                <a class="btn" href="{{ route('companies.create') }}" style="background-color: #3b5998; color: white; font-size: 20px;"> <i class="fas fa-plus-circle"></i> Add Company</a>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('companies.search') }}" method="GET" class="float-right">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search..." style="font-size: 20px;">
                        <div class="input-group-append">
                            <button class="btn" type="submit" style="background-color: #3b5998; color: white; font-size: 20px;"><i class="fas fa-search fa-sm"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th>Company Logo</th>
                    <th width="160px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal{{$company->id}}">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ $company->photo }}" class="rounded-circle" style="width: 50px; height: 50px;">
                                </div>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                                <a class="btn btn-success" href="{{ route('companies.edit',$company->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <div class="modal fade" id="myModal{{$company->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{ $company->photo }}" style="width: 100%;">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </tbody>
        </table>
        {!! $companies->links() !!}
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
@endsection
