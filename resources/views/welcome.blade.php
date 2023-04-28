

@extends('home_layouts.main')

@section('home')

<section class="bg-transparent mb-48">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl ">
            STRUKTUR OSIS SMK NEGERI 1 MAJENE</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Organisasi ini memiliki peran
            sebagai penggerak siswa untuk aktif berkontribusi di sekolah.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        </div>
    </div>
</section>

<section>
    <div class="row" id="">
        @foreach($ketua as $ketua)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage/public/images/'.$ketua->file_path) }}"
                    alt="{{ $ketua->name }}" width="200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $ketua->name }}</h5>
                    <h5 class="card-title">{{ $ketua->jabatan }}</h5>
                    <h5 class="card-title">{{ $ketua->motto }}</h5>
                    <h5 class="card-title">{{ $ketua->jurusan }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        @foreach($bendahara as $bendahara)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage/public/images/'.$bendahara->file_path) }}"
                    alt="{{ $bendahara->name }}" width="200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $bendahara->name }}</h5>
                    <h5 class="card-title">{{ $bendahara->jabatan }}</h5>
                    <h5 class="card-title">{{ $bendahara->motto }}</h5>
                    <h5 class="card-title">{{ $bendahara->jurusan }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="row">
        @foreach($sekretaris as $sekretaris)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage/public/images/'.$sekretaris->file_path) }}"
                    alt="{{ $sekretaris->name }}" width="200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $sekretaris->name }}</h5>
                    <h5 class="card-title">{{ $sekretaris->jabatan }}</h5>
                    <h5 class="card-title">{{ $sekretaris->motto }}</h5>
                    <h5 class="card-title">{{ $sekretaris->jurusan }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<footer class="bg-gray-50 rounded-lg shadow py-6 mt-10 mx-auto border">
    <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="" class="hover:underline">KKN PPL SMK
            NEGERI MAJENE ANG.XXVI</a>. All Rights Reserved.</span>
</footer>



@endsection