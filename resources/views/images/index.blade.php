
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
                        </ol>
                    </nav>
        
                    @include('dashboard.layouts.dropdown')
        
                </div>
        
                <div class="">
        
                    <h2 class="intro-y text-lg font-medium mt-10">
                        List Profile
                    </h2>
        
                    <div class="grid grid-cols-12 gap-6 mt-5">
        
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


                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">

                                    <a href="/images/create" class="btn btn-primary shadow-md mr-2">Add New User</a>

                                    <div class="dropdown">
                                        <a href="/images/create" class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                                            <span class="w-5 h-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" icon-name="plus"
                                                    class="lucide lucide-plus w-4 h-4" data-lucide="plus">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg> </span>
                                            </a>
                                    </div>

                                    
                                </div>

                                <!-- BEGIN: Users Layout -->
                                @foreach ($images as $image)

                                    <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                                        <div class="box">
                                            <div class="flex items-start px-5 pt-5">
                                                <div class="w-full flex flex-col lg:flex-row items-center">
                                                    <div class="w-16 h-16 image-fit">
                                                        <img src="{{ asset('storage/public/images/'.$image->file_path) }}" class="rounded-full" alt="{{ $image->name }}" width="200">
                                                    </div>
                                                    <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                                                        <a href="#" class="font-medium">{{ $image->name }}</a>
                                                        <div class="text-slate-500 text-xs mt-0.5">{{ $image->jabatan }}</div>
                                                        <div class="text-slate-500 text-xs mt-0.5">{{ $image->jurusan }}</div>
                                                    </div>
                                                </div>

                                                <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                                                    
                                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                                                        data-tw-toggle="dropdown"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" icon-name="more-horizontal"
                                                            data-lucide="more-horizontal" class="lucide lucide-more-horizontal w-5 h-5 text-slate-500">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg> </a>
                                                    <div class="dropdown-menu w-40">
                                                        <div class="dropdown-content">

                                                            <a href="{{ route('images.edit', $image->id) }}" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" icon-name="edit-2"
                                                                    data-lucide="edit-2" class="lucide lucide-edit-2 w-4 h-4 mr-2">
                                                                    <path d="M17 3a2.828 2.828 0 114 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                </svg> Edit </a>

                                                            <form action="{{ route('images.destroy', $image->id) }}" class="w-full" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            
                                                                <button type="submit" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="full" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trash" data-lucide="trash"
                                                                    class="lucide lucide-trash w-4 h-4 mr-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                    </path>
                                                                </svg> Delete </a>
                                                            
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center lg:text-left p-5">
                                                <div>{{ $image->motto }}  </div>
                                            </div>
                                            
                                            <div class="text-center lg:text-right p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                                <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary py-1 px-2 mr-2">Edit</a>

                                                

                                                <form action="{{ route('images.destroy', $image->id) }}" method="POST"
                                                    class="btn btn-primary py-1 px-2 mr-2">
                                                    @method('delete')
                                                    @csrf
                                                    <button class=""> Delete </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                <!-- END: Users Layout -->
                              
                            </div>

        
                        </div>
        
                    </div>
                </div>
        
            </div>
        
            @endsection

