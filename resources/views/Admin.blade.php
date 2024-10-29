@extends('layouts.main')
@section('container')
    <div class="container pt-10">
        <div class="flex justify-center">
            <table class="bg-white col-sm-12 table table-bordered">
                <tr class="justify-center">
                    <th class="text-center">Nik </th>
                    <th class="text-center">kategori</th>
                    <th class="text-center">lokasi</th>
                    <th class="text-center">keterangan</th>
                    <th class="text-center">Created At</th>
                    <th class="text-center">Update At</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($aspirasis as $item)
            <tr>
            <td class="p-1 m-1 bg-white border-2 border-gray-100 textcenter"> 
                {{$item->nik}} </td>
                <td class="p-1 m-1 bg-white border-2 border-gray-100">
                    {{$item->id_kategori}}</td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100">
                        {{$item->lokasi}}</td>
                        <td class="p-1 m-1 bg-white border-2 border-gray-100">
                            {{$item->keterangan}}</td>
                            <td class="p-1 m-1 bg-white border-2 border-gray-100">
                {{$item->created_at}}</td>
                <td class="p-1 m-1 bg-white border-2 border-gray-100">
                    {{$item->updated_at}}</td>
                    <td>
                        <div class="d-flex flex-row col-sm-12">
                            <div class="p-2">
                                <form action="{{route('aspirasi.update',$item->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-info" type="submit">Done</button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="{{route('aspirasi.delete', $item->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection