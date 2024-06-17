@extends('layouts.app')

@section('title', 'Category')

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
    <h1 class="text-3xl text-black pb-6">Form Category</h1>
</div>

<div class="w-full mt-8 bg-white p-6 rounded">
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6">

            <div class="mb-2">
                <label for="namapaket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Paket</label>
                <select id="namapaket" name="namapaket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>- Pilih Paket -</option>
                    @foreach ($namapaket as $name => $packs)
                    <option value="{{ $name }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label for="namacategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Category</label>
                <input type="namacategory" id="namacategory" name="namacategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Category" required />
            </div>

            <div class="mb-2">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Category</label>
                <input type="name" id="harga" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Harga Category" required />
            </div>

            <div class="mb-2">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Category</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Deskripsi Category"></textarea>
            </div>

        </div>

        <div class="flex justify-end gap-2 pt-4">
            <button class="bg-slate-200 py-2 px-4 rounded">Cancel</button>
            <button type="submit" class="bg-blue-500 py-2 px-4 rounded text-white">Submit</button>
        </div>
    </form>
</div>

@endsection