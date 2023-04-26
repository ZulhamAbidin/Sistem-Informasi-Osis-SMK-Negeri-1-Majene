

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
                    <li class="breadcrumb-item active" aria-current="page">List Profile</li>
                    <li class="breadcrumb-item active" aria-current="page">Buat Profile</li>
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

                     
                        
                        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="crud-form-1" class="form-label">Nama Lengkap</label>
                                <input id="crud-form-1" type="text"
                                    class="form-control w-full @error('name') is-invalid @enderror" id="name"
                                    name="name" autofocus value="{{ old('name') }}" autocomplete="off" required>

                                @error('name')
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
                                <label for="crud-form-1" class="form-label">Jurusan</label>
                                <input id="crud-form-1" type="text" class="form-control w-full @error('jurusan') is-invalid @enderror" id="jurusan"
                                    name="jurusan" autofocus value="{{ old('jurusan') }}" autocomplete="off" required>
                            
                                @error('jurusan')
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
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select data-placeholder="Select your location" name="jabatan" class="tom-select w-full @error('jabatan') is-invalid @enderror" id="jabatan">
                                    <option value="ketua umum">ketua umum</option>
                                    <option value="wakil ketua">wakil ketua</option>
                                    <option value="sekretaris">sekretaris</option>
                                    <option value="bendahara">bendahara</option>
                                    <option value="ketua bidang">ketua bidang</option>
                                </select>
                               
                                @error('jabatan')
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
                                <label for="image" class="form-label">Image</label>
                                <img src="" class="img-preview img-fluid col-sm-5">
                                <input
                                    class="border-2 border-slate-300 p-2 w-full  focus:outline-slate-300 outline-slate-400 px-4 rounded-lg  @error('image') is-invalid @enderror"
                                    type="file" id="image" name="image" onchange="previewImage()">
                               
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
                                <label for="crud-form-1" class="form-label">Motto</label>
                                <input id="crud-form-1" type="text" class="form-control w-full @error('motto') is-invalid @enderror" id="motto"
                                    name="motto" autofocus value="{{ old('motto') }}" autocomplete="off" required>
                            
                                @error('motto')
                                <div class="alert alert-primary alert-dismissible mt-2 show flex items-center mb-2" role="alert">
                                    <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                                    {{ $message }}
                                    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </button>
                                </div>
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