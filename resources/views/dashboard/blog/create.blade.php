
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
                            <li class="breadcrumb-item active" aria-current="page">Buat Postigan</li>
                        </ol>
                    </nav>

                    @include('dashboard.layouts.dropdown')

                </div>

                <div class="">
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Unggah
                        </h2>
                    </div>
        
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="intro-y col-span-12 lg:col-span-12">
                            <div class="intro-y box p-5">
                                <form action="/dashboard/blogs" method="POST" enctype="multipart/form-data">
                                    @csrf
        
                                    <div>
                                        <label for="crud-form-1" class="form-label">Judul</label>
                                        <input id="crud-form-1" type="text"
                                            class="form-control w-full @error('title') is-invalid @enderror" id="title"
                                            name="title" autofocus value="{{ old('title') }}" autocomplete="off" required>
        
                                        @error('title')
                                        <div class="alert alert-primary alert-dismissible mt-2 show flex items-center mb-2"
                                            role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                                            {{ $message }}
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert"
                                                aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        @enderror
        
                                    </div>
        
                                    <div class="mt-3">
                                        <label for="crud-form-1" class="form-label">Judul Alternatif</label>
                                        <input id="crud-form-1" type="text" class="form-control w-full" @error('slug')
                                            is-invalid @enderror id="slug" name="slug" autofocus value="{{ old('slug') }}"
                                            autocomplete="off" required>
                                            <p class="text-xs py-1.5 text-primary"> Judul Alternatif Berfungsi Jika Judul Utama Gagal Dimuat </p>
        
                                        @error('slug')
                                        <div class="alert alert-primary alert-dismissible mt-2 show flex items-center mb-2"
                                            role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                                            {{ $message }}
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert"
                                                aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
        
                                    <div class="mt-3">
                                        <label for="crud-form-2" class="form-label">Lokasi</label>
                                        <select data-placeholder="Select your location" name="category_id"
                                            class="tom-select w-full @error('category_id') is-invalid @enderror"
                                            id="category_id">
                                            @foreach ($categories as $category)
                                            @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <p class="text-xs py-1.5 text-primary"> Pastikan Anda Telah Membuat Daftar Lokasi Pada Menu Yang Telah Disediakan @can('admin') | <a href="/dashboard/categories/create" class="border-b-2 border-b-[#195142] pb-0.5">Tambah Lokasi</a>@endcan </p>
                                    
                                        @error('category_id')
                                        <div class="alert alert-primary alert-dismissible mt-2 show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                                            {{ $message }}
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
        
                                       

                                    
        
                                    <div class="mt-3">
                                        <label for="image" class="form-label">Post Image</label>
                                        <img src="" class="img-preview img-fluid col-sm-5">
                                        <input
                                            class="border-2 border-slate-300 p-2 w-full  focus:outline-slate-300 outline-slate-400 px-4 rounded-lg  @error('image') is-invalid @enderror"
                                            type="file" id="image" name="image" onchange="previewImage()">
                                        <p class="text-xs py-1.5 text-primary"> Kami sangat Menyarankan Untuk Mengunggah Gambar landscape </p>
                                        @error('image')
                                        <div class="alert alert-primary alert-dismissible mt-2 show flex items-center mb-2"
                                            role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                                            {{ $message }}
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert"
                                                aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
        
                                    <div class="mt-3">
                                        <label for="body" class="form-label">Body</label>
                                        <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror"
                                            required value="{{ old('body') }}">
                                        <trix-editor input="body" placeholder="Bukan Tempat Curhat"></trix-editor>
                                        
                                        @error('body')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
        
                                    <div class="text-right mt-5">
                                        <button type="submit"
                                            class="p-2 btn-primaryy text-slate-50 px-4 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Create
                                            blog</button>
        
                                        <a href="/dashboard/blogs"
                                            class="p-[9px] btn-primary text-slate-50 px-10 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Cancel</a>
                                    </div>
        
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
    </div>
    
@endsection