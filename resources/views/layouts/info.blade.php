<div class="hidden xl:flex flex-col min-h-screen">

    <a href="" class="-intro-x flex items-center pt-5">
        <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        <span class="text-white text-lg ml-3"> {{ Request::is('login') ? 'Login' : 'Register' }} </span>
    </a>
    <div class="my-auto">
        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
            src="{{ asset('dist/images/illustration.svg') }}">
        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
           Silahkan {{ Request::is('login') ? 'Login' : 'Register' }}
            <br>
        </div>
        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Untuk Mengunggah Postingan</div>
    </div>
</div>