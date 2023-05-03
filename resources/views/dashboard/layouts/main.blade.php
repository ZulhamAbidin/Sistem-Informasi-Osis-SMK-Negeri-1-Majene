<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/image/osis.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $judul ?? 'DASHBOARD' }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/trix.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .aktip {
            background-color: white;
            color: #064E3B !important;
            border-end-end-radius: 20px;
            border-start-end-radius: 20px;
            padding: 8px 0px 8px 20px !important;
            margin-left: 2px;
            font-weight: bold !important;
        }
    
        .btn-primaryy {
            --tw-border-opacity: 1 !important;
            border-color: rgb(var(--color-primary) / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(var(--color-primary) / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
        }
    </style>
</head>
<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">

    @include('dashboard.layouts.sidemobile')


@yield('main')



<script defer>
    const title = document.getElementById("title");
                const slug = document.getElementById("slug");
        
                title.addEventListener("keyup", function() {
                    slug.value = stringToSlug(title.value);
                });
        
                document.addEventListener("trix-file-accept", function(e) {
                    e.preventDefault();
                });
        
                function previewImage() {
                    const image = document.querySelector('#image');
                    const imgPreview = document.querySelector('.img-preview');
        
                    imgPreview.style.display = 'block';
        
                    const oFReader = new FileReader();
                    oFReader.readAsDataURL(image.files[0]);
        
                    oFReader.onload = function(oFREvent) {
                        imgPreview.src = oFREvent.target.result;
                    }
                }
</script>

<script src="{{ asset('dist/js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/trix.js') }}"></script>

</body>

</html>