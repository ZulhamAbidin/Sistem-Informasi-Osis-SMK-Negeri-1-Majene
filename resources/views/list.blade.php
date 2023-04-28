@extends('home_layouts.main')

@section('home')

    <section class="bg-transparent mb-48">
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
        <div class="grid grid-cols-1 bg-white md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 gap-y-10 mx-10">

            @foreach ($blogs->skip(0) as $blog)

            
                <div class="mb-6 lg:mb-0 col-span-1">
                    <div class="relative block bg-white rounded-lg shadow-lg">
                        <div class="flex">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">

                                @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->category->name }}" class="rounded-t-lg w-full" />
                                @else
                                <img src="http://source.unsplash.com/500x400?{{ $blog->category->name }}" class="rounded-t-lg w-full"
                                    alt="{{ $blog->category->name }}">
                                @endif

                                
                            </div>
                        </div>

                        <div class="p-6">
                            <h5 class="font-bold text-lg mb-4">{{ $blog->title }}</h5>
                            <p class="text-gray-500 ">
                                <small>Published 
                                    <u>{{ $blog->created_at->diffForHumans() }}</u> by
                                    <a href="/authors/{{ $blog->author->username }}" class="text-gray-900">{{ $blog->author->name }}</a>
                                    <p class="text-sm Uppercase text-md text-gray-900">di {{ $blog->category->slug }}</p>
                                </small>
                            </p>
                            <p class="mb-4 pb-2 mt-4 text-justify">
                                {{ $blog->excerpt }}
                            </p>
                            <a href="/blogs/{{ $blog->slug }}" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                                more</a>
                        </div>
                    </div>
                </div>
            

            @endforeach
        </div>

       
    </section>

    <footer class="bg-gray-50 rounded-lg shadow py-6 mt-10 mx-auto border">
            <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="" class="hover:underline">KKN PPL SMK NEGERI MAJENE ANG.XXVI</a>. All Rights Reserved.</span>
    </footer>



@endsection

