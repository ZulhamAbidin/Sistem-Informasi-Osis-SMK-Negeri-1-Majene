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
                </ol>
            </nav>
           
           @include('dashboard.layouts.dropdown')

        </div>
       
        <div class="">

            @if (session()->has('success'))
            <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                Berhasil Mendaftarkan User Baru
                <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>
            @endif

            <section class="ae a2d a2U a2V a2W a2X dark:a2Y[#3c3e56] dark:a2Z a1M wow fadeInUp mt-4"
                data-wow-delay=".2s">
                <div class="ab">
                    <div class="aJ[570px] a2f a2g">
                        <h1 class="a1X a1j dark:a1k a2_ md:a30[45px] a31 md:a31 a28">
                            SELAMAT DATANG
                        </h1>
                        <p class="a25 aR aT a28 text-primary" style="margin-bottom: 2px !important;">Admin
                            @auth
                            {{ auth()->user()->name }}
                            @endauth
                        </p>
                        <a href="/dashboard/blogs/create" class="btn btn-rounded-primary w-auto px-10 mr-1 mb-2 mt-4">Buat
                            Postingan</a>
                    </div>
                </div>

                @include('dashboard.layouts.jumbotron')

            </section>


        </div>
    </div>

</div>
    
@endsection

    
