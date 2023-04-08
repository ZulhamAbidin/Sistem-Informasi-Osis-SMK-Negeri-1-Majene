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
                </ol>
            </nav>

            @include('dashboard.layouts.dropdown')

        </div>

        <div class="">

            <h2 class="intro-y text-lg font-medium mt-10">
                List Postingan
            </h2>

            <div class="grid grid-cols-12 gap-6 mt-5">

                <div class="intro-y col-span-12 flex  flex-wrap sm:flex-nowrap items-center mt-2">
                    <a href="/dashboard/blogs/create" class="btn btn-primary shadow-md mr-2">Buat Postingan</a>
                </div>

                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

                    @if (session()->has('success'))
                    <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                        <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                            <i data-lucide="x" class="w-4 h-4"></i>
                        </button>
                    </div>
                    @endif

                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">#</th>
                                <th class="whitespace-nowrap">Judul Postigan</th>
                                <th class="text-center whitespace-nowrap">Lokasi</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr class="intro-x">

                                <td class="text-left">{{ $loop->iteration }}</td>

                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">{{ $blog->title }}</a>
                                </td>

                                <td class="w-40">
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{
                                            $blog->category->name }}</div>
                                </td>

                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        {{-- edit --}}
                                        <a href="/dashboard/blogs/{{ $blog->slug }}/edit"
                                            class="flex items-center bg-warning px-2 py-1.5 text-xs rounded-md text-slate-900 hover:bg-primary mr-2"
                                            href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            Edit </a>
                                        {{-- delete --}}
                                        <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST"
                                            class=" bg-red-600 px-2 py-1.5 text-xs rounded-md text-slate-50 hover:bg-red-700 mr-2">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Are you sure ?')" class="flex items-center"
                                                href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </button>
                                        </form>
                                        {{-- lihat --}}

                                        <a href="/dashboard/blogs/{{ $blog->slug }}"
                                            class="flex items-center bg-primary px-2 py-1.5 text-xs rounded-md text-slate-50 hover:bg-primary"
                                            href="javascript:;" data-tw-toggle="modal"
                                            data-tw-target="#delete-confirmation-modal"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" icon-name="eye"
                                                data-lucide="eye" class="lucide lucide-eye w-4 h-4 mr-1">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg> Lihat
                                        </a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
              
            </div>
        </div>
      
    </div>

    @endsection