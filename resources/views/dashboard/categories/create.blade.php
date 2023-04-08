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
                    <li class="breadcrumb-item active" aria-current="page">Tambah Lokasi Postigan</li>
                </ol>
            </nav>

            @include('dashboard.layouts.dropdown')

        </div>

        <div class="">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Form Tambah Lokasi Postingan
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 ">
                    <!-- BEGIN: Form Layout -->
                    <form action="/dashboard/categories" method="POST">
                        @csrf
                        <div class="intro-y box p-5">
                            <div>
                                <label for="crud-form-1" class="form-label">Lokasi Baru</label>
                                <input  type="text"
                                    class="form-control w-full @error('name') is-invalid @enderror" id="name"
                                    name="name" autofocus value="{{ old('name') }}" autocomplete="off" required placeholder="Nama Lokasi Baru">

                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="crud-form-1" class="form-label">Lokasi Baru</label>
                                <input type="text"
                                    class="form-control w-full @error('slug') is-invalid @enderror" id="slug"
                                    name="slug" value="{{ old('slug') }}" required autocomplete="off" placeholder="Nama Lokasi Baru"> 

                                @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="text-right mt-5">
                                <a href="/dashboard/categories" class="btn btn-primaryy text-white w-24 mr-1">Cancel</a>
                                <button type="submit" class="btn btn-primaryy text-white w-24">Simpan</button>
                            </div>
                        </div>
                        <!-- END: Form Layout -->
                </div>
            </div>
        </div>
        <!-- END: Content -->

    </div>

</div>

<script defer>
    const name = document.getElementById("name");
    const slug = document.getElementById("slug");
            
    name.addEventListener("keyup", function() {
        slug.value = stringToSlug(name.value);
    });
</script>


@endsection
