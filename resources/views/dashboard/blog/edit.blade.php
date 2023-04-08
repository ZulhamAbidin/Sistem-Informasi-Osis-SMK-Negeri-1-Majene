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
                    <li class="breadcrumb-item active" aria-current="page">Edit Postingan</li>
                </ol>
            </nav>

            @include('dashboard.layouts.dropdown')

        </div>

        <div class="konten">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Edit Postingan {{ old('title', $blog->title) }}
                </h2>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <div class="intro-y box p-5">
                        <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3 grid grid-cols-2 mt-6">
                                <label for="title" class="col-span-2">Judul</label>
                                <input type="input"
                                    class="border-2 mt-2 border-slate-300 outline-slate-400 px-4 rounded-lg col-span-2 h-8 @error('title') is-invalid @enderror id="
                                    title name="title" autofocus value="{{ old('title', $blog->title) }}"
                                    autocomplete="off" required>

                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            <div class="mb-3 grid grid-cols-2 mt-4">
                                <label for="slug" class="col-span-2">Judul Alternatif</label>
                                <input type="input"
                                    class="border-2 mt-2 border-slate-300 outline-slate-400 px-4 rounded-lg col-span-2 h-8 @error('slug') is-invalid @enderror"
                                    id="slug" name="slug" value="{{ old('slug', $blog->slug) }}" required
                                    autocomplete="off">

                                @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Lokasi</label>
                                <select name="category_id" id="category_id"
                                    class="form-select @error('category_id') is-invalid @enderror">
                                    @foreach ($categories as $category)
                                    @if (old('category_id', $blog->category_id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                                @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt=""
                                    class="news__preview image-fit mb-3 col-sm-5 ">
                                @else
                                <img class="img-preview w-24 img-fluid mb-3 col-sm-5">
                                @endif
                                <img src="" class="~mb-3 col-sm-5">

                                <input
                                    class="border-2 border-slate-300 p-2 w-full  focus:outline-slate-300 outline-slate-400 px-4 rounded-lg  @error('image') is-invalid @enderror"
                                    type="file" id="image" name="image" onchange="previewImage()">

                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror"
                                    required value="{{ old('body', $blog->body) }}">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="p-2 btn btn-primaryy text-slate-50 px-4 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Create
                                blog</button>
                            <a href="/dashboard/blogs/{{ $blog->slug }}"
                                class="btn btn-primaryy text-slate-50 px-10 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Cancel</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

</div>


<script defer>
    const title = document.getElementById("title");
    const slug = document.getElementById("slug");

    title.addEventListener("keyup", function () {
        slug.value = stringToSlug(title.value);
    });

    document.addEventListener("trix-file-accept", function (e) {
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection