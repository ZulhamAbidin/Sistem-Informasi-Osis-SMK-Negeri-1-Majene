@extends('dashboard.layouts.main')

@section('main')


<div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">


    @include('dashboard.layouts.sidebar')



    <div class="content">
        <div class="top-bar hidden md:flex -mx-4 px-4 md:mx-0 md:px-0">
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    <li class="breadcrumb-item active" aria-current="page">List Postigan</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Lokasi Postingan</li>
                </ol>
            </nav>

            @include('dashboard.layouts.dropdown')

        </div>

        <div class="konten">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Edit Lokasi
                </h2>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <div class="intro-y box p-5">
                       <form action="/dashboard/categories/{{ $category->slug }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="mb-3 grid grid-cols-2 mt-6">
                                <label for="title" class="col-span-2">Judul</label>
                                <input type="input"
                                    class="border-2 mt-2 border-slate-300 outline-slate-400 px-4 rounded-lg col-span-2 h-8 @error('name') is-invalid @enderror" id="name" name="name"
                                    autofocus value="{{ old('name', $category->name) }}" autocomplete="off" required>

                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            <div class="mb-3 grid grid-cols-2 mt-4">
                                <label for="slug" class="col-span-2">Judul Alternatif</label>
                                <input type="input"
                                    class="border-2 mt-2 border-slate-300 outline-slate-400 px-4 rounded-lg col-span-2 h-8 <input type="input" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                                     value="{{ old('slug', $category->slug) }}" required autocomplete="off">

                                @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                    
                            <button type="submit"
                                class="p-2 btn btn-primaryy text-slate-50 px-4 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Create
                                blog</button>
                            <a href="/dashboard/categories"
                                class="btn btn-primaryy text-slate-50 px-10 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Cancel</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

</div>




@endsection