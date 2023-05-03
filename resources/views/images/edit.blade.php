{{-- <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $image->name }}">
    </div>

    <div class="form-group">
        <label for="name">Jabatan</label>
        <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $image->jabatan }}">
    </div>

    <div class="form-group">
        <label for="name">Motto</label>
        <input type="text" name="motto" id="motto" class="form-control" value="{{ $image->motto }}">
    </div>

    <div class="form-group">
        <label for="name">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $image->jurusan }}">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
        <img src="{{ asset('storage/public/images/'.$image->file_path) }}" alt="{{ $image->name }}" width="200">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}


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
                    <li class="breadcrumb-item active" aria-current="page">Profile Postigan</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profle</li>
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



                        <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div>
                                <label for="crud-form-1" class="form-label">Nama Lengkap</label>
                                <input id="crud-form-1" type="text"
                                    class="form-control w-full @error('name') is-invalid @enderror" id="name"
                                    name="name" autofocus value="{{ $image->name }}" autocomplete="off" required>

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
                                <input id="crud-form-1" type="text"
                                    class="form-control w-full @error('jurusan') is-invalid @enderror" id="jurusan"
                                    name="jurusan" autofocus value="{{ $image->jurusan }}" autocomplete="off" required>

                                @error('jurusan')
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
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select data-placeholder="Select your location" name="jabatan"
                                    class="tom-select w-full @error('jabatan') is-invalid @enderror" id="jabatan">
                                    <option value=" {{ $image->jabatan }} "> {{ $image->jabatan }} </option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil Ketua I">Wakil Ketua I</option>
                                    <option value="Wakil Ketua II">Wakil Ketua II</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Wakil Sekretaris">Wakil Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Seksi Bidang Keimanan Dan Ketaqwaan Terhadap Tuhan YME">Seksi Bidang Keimanan Dan Ketaqwaan Terhadap
                                        Tuhan YME</option>
                                    <option value="Seksi Bidang Budi Pekerti Luhur dan Akhlak Mulia">Seksi Bidang Budi Pekerti Luhur dan Akhlak Mulia
                                    </option>
                                    <option value="Seksi Bidang Kepribadian Unggul, Wawasan Kebangasaan dan Bela Negara">Seksi Bidang Kepribadian Unggul,
                                        Wawasan Kebangasaan dan Bela Negara</option>
                                    <option value="Seksi Bidang Demokrasi, HAM Pendidikan Politik, Lingkungan Hidup, Kepekaan dan Toleransi Sosial">Seksi
                                        Bidang Demokrasi, HAM Pendidikan Politik, Lingkungan Hidup, Kepekaan dan Toleransi Sosial</option>
                                    <option value="Seksi Bidang Prestasi Seni, dan Olahraga Sesuai Bakat dan Minat">Seksi Bidang Prestasi Seni, dan Olahraga
                                        Sesuai Bakat dan Minat</option>
                                    <option value="Seksi Bidang Kreatifitas, Keterampilan dan Kewiraswastaan">Seksi Bidang Kreatifitas, Keterampilan dan
                                        Kewiraswastaan</option>
                                    <option value="Seksi Bidang Kualitas Jasmani Kesehatan dan gizi">Seksi Bidang Kualitas Jasmani Kesehatan dan gizi
                                    </option>
                                    <option value="Seksi Bidang Saastra Dan Budaya">Seksi Bidang Saastra Dan Budaya</option>
                                    <option value="Seksi Bidang Teknologi Informasi dan Komunikasi">Seksi Bidang Teknologi Informasi dan Komunikasi</option>
                                    <option value="Seksi Bidang Komunikasi dalam Bahasa Inggris">Seksi Bidang Komunikasi dalam Bahasa Inggris</option>
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
                                    type="file" id="image" name="image" onchange="previewImage()" value="{{ $image->image }}">

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
                                <input id="crud-form-1" type="text"
                                    class="form-control w-full @error('motto') is-invalid @enderror" id="motto"
                                    name="motto" autofocus value="{{ $image->motto }}" autocomplete="off" required>

                                @error('motto')
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