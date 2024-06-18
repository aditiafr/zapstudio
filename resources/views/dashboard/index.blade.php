@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-3xl text-black pb-6">Dashboard</h1>

<div class="w-full mt-12">
    <div class="grid grid-cols-2 gap-4">

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
</div>
@endsection