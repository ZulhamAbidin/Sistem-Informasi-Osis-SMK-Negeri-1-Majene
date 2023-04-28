@extends('home_layouts.main')

@section('home')

    <section class="bg-transparent">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl ">
                PORTAL OSIS SMK NEGERI 1 MAJENE</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Organisasi ini memiliki peran
                sebagai penggerak siswa untuk aktif berkontribusi di sekolah.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            </div>
        </div>
    </section>


    <section>
        

        <div class="bg-white">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-10">
                
                <div class="mx-auto  grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16  border-gray-200 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                   
                @foreach ($blogs->skip(0) as $blog)

                    <article class="flex max-w-xl flex-col items-start justify-between border-t py-4">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-500">{{ $blog->category->slug }}</time>
                            <a href=""
                                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{  $blog->created_at->diffForHumans()  }}</a>
                        </div>

                       <div class="mt-4">                            
                                @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->category->name }}"
                                    class="rounded-t-lg w-full" />
                                @else
                                <img src="http://source.unsplash.com/500x400?{{ $blog->category->name }}" class="rounded-lg w-full"
                                    alt="{{ $blog->category->name }}">
                                @endif                        
                        </div>

                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates
                                {{ $blog->excerpt }}</p>
                        </div>



                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="{{ asset('assets/image/osis.svg') }}" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                    <a href="/authors/{{ $blog->author->username }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $blog->author->username }}
                                    </a>
                                </p>
                                <p class="text-gray-600">{{ $blog->category->slug }}</p>
                            </div>
                         </div>

                         <div class="a">
                            <a href="/blogs/{{ $blog->slug }}"
                                class="text-white mt-3 bg-blue-700 px-20 block hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs text-center py-2 mr-2 mb-2">Lihat Detail</A>
                         </div>


                    </article>

                @endforeach

                </div>
            </div>
        </div>

    </section>

    <footer class="bg-gray-50 rounded-lg shadow py-6 mt-10 mx-auto border">
            <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="" class="hover:underline">KKN PPL SMK NEGERI MAJENE ANG.XXVI</a>. All Rights Reserved.</span>
    </footer>



@endsection

