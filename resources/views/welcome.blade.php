@extends('layouts.app')

@section('content')
<div class="container-lg bg-[#EAD8C0] min-h-screen flex justify-center items-center">
    <div class="max-w-4xl mx-auto px-6 py-10 flex flex-col lg:flex-row">
        <div class="flex-1 lg:pr-8 flex flex-col justify-between mb-8 lg:mb-0">
            <div>
                <p class="text-lg">Explore our wide range of coffees, teas, and snacks</p>
                <h1 class="text-3xl font-bold mt-4 mb-6">Welcome to CoffePass</h1>
                <p class="mb-8">
                    Enjoy an easy and fast coffee ordering experience with CoffePass. Order your
                    favorite drink from the comfort of home, and it's ready to enjoy when you arrive at the cafe.
                </p>
            </div>
        </div>
        <div class="flex items-end">
            <a href="{{ route('order') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg">Order Now</a>
        </div>
    </div>
</div>
@endsection