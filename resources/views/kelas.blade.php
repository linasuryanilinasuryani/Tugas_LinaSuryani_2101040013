@extends('app')
@section('content')
<table>
    <thead>
        <th>id</th>
            <th>fakultas</th>
                <th>prodi</th>
                    <th>kelas</th>
                    <th>isi</th>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
        <td>{{ ++$id }}</td>
        <td>{{ $d->fakultas }}</td>
        <td>{{  $d->prodi }}</td>
        <td>{{ $d->kelas }}</td>
        <td>{{ $d->isi }}</td>
        <td>
            <a href="{{ route('kelas.edit', $d->id) }}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ route('kelas.delete', ['id' => 1]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
    @endforeach

    </tbody>
</table>
@endsection
