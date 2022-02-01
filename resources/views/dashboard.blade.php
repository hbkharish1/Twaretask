@extends('layout')
  
@section('content')
<div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employeeData as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->Phone }}</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $employeeData->links() !!}
        </div>
        </div>
@endsection