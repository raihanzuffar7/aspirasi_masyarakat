@extends('layouts.main')
@section('container')
    
<div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success')}}
        </div>
    @endif
    <form action="/aspirasi" method="post">
    @csrf
        <div class="col-sm-10">
            <div class="mb-3 form-group">
                <label for="nik">NIK</label>
                <input class="form-control @error('nik') is-invalid @enderror" type="text" id="nik" name="nik" placeholder="Input NIK" autofocus>
                @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="id_kategori">
                    <option value="">Pilih Kategori</option> 
                    <option value="1">Kesehatan</option>
                    <option value="2">Kenyamanan</option>
                    <option value="3">Lingkungan</option>
                    <option value="4">Ketertiban</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="lokasi">Lokasi</label>
                <input class="form-control" type="text" id="lokasi" name="lokasi" placeholder="Input Lokasi">
            </div>
            <div class="mb-3 form-group">
                <label for="ket">Keterangan</label>
                <input class="form-control" type="text" id="ket" name="keterangan" placeholder="Input Keterangan">
            </div>
            <div>
                <button class="btn btn-primary form-control" type="submit">Submit</button>
            </div>
        </div>     
    </form>
    <div class="table-responsive mt-4">
        <table class="bg-white col-sm-12 table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>NIK</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aspirasis as $item)
                <tr>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center"> 
                        {{$item->nik}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->id_kategori}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->lokasi}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->keterangan}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->created_at}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection



{{-- posisi ditengah --}}
{{-- @extends('layouts.main')
@section('container')
    
<div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success')}}
        </div>
    @endif
    <form action="/aspirasi" method="post">
    @csrf
        <div class="col-sm-10 mx-auto">
            <div class="mb-3 form-group">
                <label for="nik">NIK</label>
                <input class="form-control @error('nik') is-invalid @enderror" type="text" id="nik" name="nik" placeholder="Input NIK" autofocus>
                @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="id_kategori">
                    <option value="">Pilih Kategori</option> 
                    <option value="1">Kesehatan</option>
                    <option value="2">Kenyamanan</option>
                    <option value="3">Lingkungan</option>
                    <option value="4">Ketertiban</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="lokasi">Lokasi</label>
                <input class="form-control" type="text" id="lokasi" name="lokasi" placeholder="Input Lokasi">
            </div>
            <div class="mb-3 form-group">
                <label for="ket">Keterangan</label>
                <input class="form-control" type="text" id="ket" name="keterangan" placeholder="Input Keterangan">
            </div>
            <div>
                <button class="btn btn-primary form-control" type="submit">Submit</button>
            </div>
        </div>     
    </form>
    <div class="table-responsive mt-4">
        <table class="table table-bordered col-sm-10 mx-auto">
            <thead>
                <tr class="text-center">
                    <th>NIK</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aspirasis as $item)
                <tr>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center"> 
                        {{$item->nik}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->id_kategori}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->lokasi}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->keterangan}}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{$item->created_at}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection --}}







{{-- original --}}
    {{-- @extends('layouts.main')
    @section('container')
        
    <div>
        @if (session('succes'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('succes')}}
            </div>
        @endif
        <form action="/aspirasi" method="post">
        @csrf
            <div class="col-sm-10">
                <div class="mb-3 form-group">
                    <label for="nik">NIK</label>
                    <input class="form-control @error('nik') is-invalid @enderror " type="text" id="nik" name="nik" placeholder="Input NIK" autofocus>
                </div>
                <div class="mb-3 form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="id_kategori">
                        <option value="/">Pilih Kategori</option> 
                        <option value="1">Kesehatan</option>
                        <option value="2">Kenyamanan</option>
                        <option value="3">Lingkungan</option>
                        <option value="4">Ketertiban</option>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <label for="lokasi">Lokasi</label>
                    <input class="form-control" type="text" id="loaksi" name="lokasi" placeholder="Input Lokasi">
                </div>
                <div class="mb-3 form-group">
                    <label for="ket">Keterangan</label>
                    <input class="form-control" type="text" id="ket" name="keterangan" placeholder="Input Keterangan">
                </div>
                <div>
                    <button class="btn btn-primary form-control" type="submit">Submit</button>
                </div>
            </div>     
        </form>
        <div class="flex justify-center">
            <table class="bg-white col-sm-12 table table-bordered">
                <tr class="justify-center">
                    <th class="text-center">Nik</th>
                    <th class="text-center">kategori</th>
                    <th class="text-center">lokasi</th>
                    <th class="text-center">keterangan</th>
                    <th class="text-center">Created At</th>
                </tr>
                @foreach ($aspirasis as $item)
            <tr><br>
            <td class="p-1 m-1 bg-white border-2 border-gray-100 textcenter"> 
                {{$item->nik}} </td>
                <td class="p-1 m-1 bg-white border-2 border-gray-100">
                    {{$item->id_kategori}}</td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100">
                        {{$item->Pilih_Kategori}}</td>
                        <td class="p-1 m-1 bg-white border-2 border-gray-100">
                            {{$item->lokasi}}</td>
                            <td class="p-1 m-1 bg-white border-2 border-gray-100">
                                {{$item->keterangan}}</td>
                                <td class="p-1 m-1 bg-white border-2 border-gray-100">
                                     <td class="p-1 m-1 bg-white border-2 border-gray-100">
                                {{$item->keterangan}}</td>
                                <td class="p-1 m-1 bg-white border-2 border-gray-100">
                    {{$item->created_at}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection --}}