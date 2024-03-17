@extends('layout.list')
@section('title', 'Ini adalah judul pada meta')

@section('content')
    <table class="table-fixed text-center ml-3">
        <thead>
            <tr>
                <th class="border border-slate-600 bg-slate-200">ID</th>
                <th class="border border-slate-600 bg-slate-200">Produk</th>
                <th class="border border-slate-600 bg-slate-200">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $post)
                <tr>
                    <td class="border border-slate-600">{{ $post["id"] }}</td>
                    <td class="border border-slate-600">{{ $post["produk"] }}</td>
                    <td class="border border-slate-600"><img src="./images/portofolio/{{ $post["gambar"] }}" alt="" width="100" height="50"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection