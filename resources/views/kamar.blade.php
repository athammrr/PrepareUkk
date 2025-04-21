@extends('layouts.app')

@section('title', 'Hotel Hebat')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-200">Hotel Hebat</h1>
        <p class="mt-4 text-gray-700 dark:text-gray-300">Selamat datang di Hotel Hebat!</p>

        <div class="flex justify-end items-center">
            <nav class="text-gray-200">
                <ul class="flex space-x-6">
                    <li><a href="{{ route('user.index') }}" class=" hover:text-gray-400 " >Home</a></li>
                    <li><a href="{{ route('user.kamar') }}" class=" hover:text-gray-400 " >Kamar</a></li>
                    <li><a href="{{ route('user.fa') }}" class="hover:text-gray-400" >Fasilitas</a></li> 
                </ul>
            </nav>    
        </div>
    </div>
    <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8" >
        <div class="rounded overflow-hidden shadow-lg sticky " >    
            <img class="w-full h-96 object-cover transition-transform duration-300 hover:scale-110" src="/assets/images/35.jpg" alt="Hotel">
        </div>
    </div>
    

    <div class="max-w-9xl mx-auto py-10 lg:px-8 gap-4">
        <div class="flex ">
            <div>
                <h1 class="text-5xl font-extrabold text-gray-400 tracking-wide">
                    Tipe Superior
                </h1>
            </div>
        </div>
        <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
            <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                <p class="text-lg leading-relaxed">
                    🔍 <span class="font-semibold">Fasilitas :</span><br>
                    <span class="text-blue-400">text-5xl</span> → Bikin lebih besar & lebih eye-catching.<br>
                    <span class="text-blue-400">font-extrabold</span> → Lebih tegas dibanding bold.<br>
                    <span class="text-blue-400">text-gray-600</span> → Warna sedikit lebih gelap dari text-gray-400, jadi lebih nyaman dilihat.<br>
                    <span class="text-blue-400">tracking-wide</span> → Tambahin sedikit jarak antar huruf biar terlihat elegan.<br>
                    <span class="text-blue-400">py-10</span> → Biar ada ruang atas-bawah supaya gak terlalu rapat.<br>
                    🚀 Sekarang tampilannya lebih profesional dan nyaman dibaca! 😎
                </p>
            </div>
        </div>
     </div>

     <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8" >
        <div class="rounded overflow-hidden shadow-lg sticky " >    
            <img class="w-full h-96 object-cover transition-transform duration-300 hover:scale-110" src="/assets/images/7.jpg" alt="Hotel">
        </div>
    </div>
    

    <div class="max-w-9xl mx-auto py-10 lg:px-8 gap-4">
        <div class="flex ">
            <div>
                <h1 class="text-5xl font-extrabold text-gray-400 tracking-wide">
                    Tipe Deluxe
                </h1>
            </div>
        </div>
        <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
            <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                <p class="text-lg leading-relaxed">
                    🔍 <span class="font-semibold">Fasilitas :</span><br>
                    <span class="text-blue-400">text-5xl</span> → Bikin lebih besar & lebih eye-catching.<br>
                    <span class="text-blue-400">font-extrabold</span> → Lebih tegas dibanding bold.<br>
                    <span class="text-blue-400">text-gray-600</span> → Warna sedikit lebih gelap dari text-gray-400, jadi lebih nyaman dilihat.<br>
                    <span class="text-blue-400">tracking-wide</span> → Tambahin sedikit jarak antar huruf biar terlihat elegan.<br>
                    <span class="text-blue-400">py-10</span> → Biar ada ruang atas-bawah supaya gak terlalu rapat.<br>
                    🚀 Sekarang tampilannya lebih profesional dan nyaman dibaca! 😎
                </p>
            </div>
        </div>
     </div>

@endsection
