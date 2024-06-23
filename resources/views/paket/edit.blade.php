@extends('layouts.app')

@section('title', 'Paket')

@section('content')

@if ($errors->any())
<!-- <div class="alert alert-danger">
</div> -->
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    @foreach ($errors->all() as $error)
    <span class="font-medium">Info Form!</span>
    <ul>
        <li>{{ $error }}</li>
    </ul>
    @endforeach
</div>
@endif

<div class="flex items-center justify-between">
    <h1 class="text-3xl text-black pb-6">Form Paket</h1>
</div>

<div class="w-full mt-8 bg-white p-6 rounded">
    <form action="{{route('paket.update', $paket->id_paket)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-6">

            <div class="mb-2">
                <label for="namapaket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Paket</label>
                <input type="name" id="namapaket" name="namapaket" value="{{$paket->namapaket}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Paket" required />
            </div>

            <div class="mb-2">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Gambar Paket</label>
                <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>

        </div>

        <div class="flex justify-end gap-2 pt-4">
            <button class="bg-slate-200 py-2 px-4 rounded">Cancel</button>
            <button type="submit" class="bg-blue-500 py-2 px-4 rounded text-white">Submit</button>
        </div>
    </form>
</div>

@endsection