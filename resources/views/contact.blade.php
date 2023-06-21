@extends('template')
@section('content')
    <a href="{{ url('contact/add') }}">
        <button class="btn btn-primary">Tambah Data</button>
    </a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PESAN</th>
            <th>NP HP</th>
            <th>AKSI</th>
        </tr>
      @foreach ($contact as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->pesan}}</td>
            <td>{{$item->no_telpon}}</td>
            {{-- <td><img src="/storage/{{$item->foto}}" width="150" ></td> --}}
            <td>
                <a href="contact/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

