@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-3xl text-black pb-6">Dashboard</h1>

<div class="w-full mt-12">
    <div class="grid md:grid-cols-2 gap-4">

        <div class="w-full bg-white rounded px-4 py-6 flex items-center justify-around gap-8">
            <i class="fa fa-users text-4xl" aria-hidden="true"></i>
            <div class="flex flex-col gap-4">
                <p class="text-xl font-bold">Total Customers</p>
                <p class="text-2xl font-bold">2</p>
            </div>
        </div>

        <div class="w-full bg-white rounded px-4 py-6 flex items-center justify-around gap-8">
            <i class="fa fa-address-book text-4xl" aria-hidden="true"></i>
            <div class="flex flex-col gap-4">
                <p class="text-xl font-bold">Total Booking</p>
                <p class="text-2xl font-bold">2</p>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <h1 class="p-4 text-2xl font-semibold">Booking Today</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nomor</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name Lengkap</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nomor Telpon / WA</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Tanggal</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Jam</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nama Paket</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Category Paket</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $book)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $data->firstItem() + $index }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $book->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $book->notlp }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $book->tanggal }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $book->jam }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $book->namapaket }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $book->namacategory }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">Rp.{{ number_format($book->harga, 2, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{ $data->links() }}
            </div>
        </div>

    </div>

</div>
@endsection