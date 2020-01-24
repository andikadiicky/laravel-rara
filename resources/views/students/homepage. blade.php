<!-- Tampilan contoh menampilkan data dari database kedalam table-->

@extends('layout/main')

@section('title', 'CRUD')

@section('container')
<div class="section">
<div class="container">
<h1 class="mt-3">CRUD Students Percobaan</h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col" style="font-size:large; text-align: center;">#</th>
                <th scope="col" style="font-size:large; text-align: center;">Nama</th>
                <th scope="col" style="font-size:large; text-align: center;">NIM</th>
                <th scope="col" style="font-size:large; text-align: center;">Email</th>
                <th scope="col" style="font-size:large; text-align: center;">Jurusan</th>
                <th scope="col" style="font-size:large; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $std)
                    <tr>
                    <th scope="row" style="font-size:large">{{$loop->iteration}}</th>
                        <td style="font-size:large">{{$std->nama}}</td>
                        <td style="font-size:large">{{$std->nim}}</td>
                        <td style="font-size:large">{{$std->email}}</td>
                        <td style="font-size:large">{{$std->jurusan}}</td>
                        <td style="font-size:large">
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection