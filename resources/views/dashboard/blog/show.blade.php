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
                    <li class="breadcrumb-item active" aria-current="page">Lihat Postingan Detail</li>
                </ol>
            </nav>

            @include('dashboard.layouts.dropdown')

        </div>

        <div class="konten">
            <div class="content content--top-nav">
                <div class="intro-y news xl:w-3/5 p-5 box mt-8">

                    <h2 class="intro-y font-medium text-xl sm:text-2xl my-4">
                        {{ $blog->title }}
                    </h2>

                    

                    <div class="intro-y mt-6">
                        <div class="news__preview image-fit">
                            @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" class="rounded-md">
                            @else
                            <img src="http://source.unsplash.com/1200x400?{{ $blog->category->name }}" alt=""
                                class="w-full mt-5">
                            @endif
                        </div>
                    </div>

                    <div class="intro-y text-justify leading-relaxed">
                        <p class="mb-5 pt-4"> {!! $blog->body !!} </p>
                    </div>

                    <div class="flex justify-end gap-x-2 text-xs mt-6">
                        <a href="/dashboard/blogs/" class="w-fit btn btn-primary px-4 py-2 "> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="corner-up-left"
                                data-lucide="corner-up-left" class="lucide lucide-corner-up-left block mx-auto">
                                <polyline points="9 14 4 9 9 4"></polyline>
                                <path d="M20 20v-7a4 4 0 00-4-4H4"></path>
                            </svg> 
                        </a>
                        
                        <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="w-fit btn btn-warning px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit" data-lucide="edit"
                                class="lucide lucide-edit block mx-auto">
                                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg> 
                        </a>
                        
                        <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="inline">
                            @method('delete')
                            @csrf
                            <button href="" class=" btn-danger w-fit btn btn-primary px-4 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                    class="lucide lucide-trash-2 ">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </button>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection

