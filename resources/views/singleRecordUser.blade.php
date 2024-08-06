@extends('layouts.masterlayout')

@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single User Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table-wrapper {
            margin: 20px 0;
        }
        .table th {
            background-color: #f8f9fa;
            color: #212529;
            text-align: center;
        }
        .table td {
            vertical-align: middle;
        }
        .btn-custom {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-custom:hover {
            color: #fff;
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="my-4">All Users List</h2>
                <div class="table-wrapper">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Name</th>
                                <th>Email</th>
                                <th>Age</th>
                                <th>City</th>
                                <th>All User Data List</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $id => $user)
                                <tr>
                                    {{-- <td>{{ $user->id }}</td> --}}
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>
                                        <a href="/allusers" class="btn btn-custom btn-sm">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
