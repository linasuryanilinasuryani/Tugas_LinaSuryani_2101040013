@extends('app')
@section('content')
<table>
    <thead>
        <th>id</th>
            <th>nama_mk</th>
                <th>dosen</th>
                    <th>jumlah_soal</th>
                    <th>keterangan</th>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
        <td>{{ $d->nama_mk }}</td>
        <td>{{  $d->dosen }}</td>
        <td>{{ $d->jumlah_soal }}</td>
        <td>{{ $d->keterangan }}</td>
        <td>
            <a href="{{ route('soal.edit', $d->id) }}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ route('soal.delete', ['id' => 1]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
    @endforeach

    </tbody>
