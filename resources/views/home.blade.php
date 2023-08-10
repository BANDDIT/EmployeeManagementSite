@extends('template')
@section('title','Welcome')

@section('body')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">EmployeeID</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->nama }}</td>
                    <td>{{$employee->umur }}</td>
                    <td>{{$employee->alamat}}</td>
                    <td>{{$employee->nomorHP }}</td>
                    <td>{{$employee->created_at }}</td>
                    <td>{{$employee->updated_at }}</td>
                    <td>
                        <form action="{{ route('updatePage',$employee->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-success" >Update</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('delete',$employee->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                <tr>
            @endforeach
        </tbody>
    </table>
@endsection