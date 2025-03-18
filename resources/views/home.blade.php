@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-200">Hotel Hebat</h1>
        <p class="mt-4 text-gray-700 dark:text-gray-300">Selamat datang di Hotel Hebat!</p>

        <div class="flex justify-end items-center">
            <nav class="text-gray-200">
                <ul class="flex space-x-6">
                    <li><a href="">Home</a></li>
                    <li><a href="">Kamar</a></li>
                    <li><a href="">Fasilitas</a></li> 
                </ul>
            </nav>    
        </div>
    </div>
    <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8" >
        <div class="rounded overflow-hidden shadow-lg" >    
            <img class="w-full h-96 object-cover " src="/assets/images/hotel.jpg" alt="Hotel">
        </div>
    </div>
    <div class="max-w-7xl mx-auto lg:px-8">
        <form action="" method="POST">
            <div class="flex gap-4">
                <div class="flex-1 rounded bg-gray-400 p-4">
                    <label for="date" class="block text-white mb-2">Tanggal Check-in:</label>
                    <input id="date" name="date" type="date" required
                            class="rounded w-full p-2 border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                </div>

                <div class="flex-1 rounded bg-gray-400 p-4">
                    <label for="date" class="block text-white mb-2">Tanggal Check-out:</label>
                    <input id="date" name="date" type="date" required
                            class="rounded w-full p-2 border border-gray-400 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                </div>
                <div class="flex-2 rounded bg-gray-400 p-4">
                    <label for="number" class="block text-white mb-2">Jumlah Kamar</label>
                    <input id="number" type="number" name="number" required
                        class="rounded w-full p-2 border border-gray-400 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                </div>
                <div class="flex-2 rounded bg-gray-400 p-4">
                    <br>
                    <button class="bg-green-500 text-gray-300 px-4 py-2 rounded hover:bg-green-600 transition" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="mx-auto" >
        <div>

        </div>
    </div>


@endsection
