@extends('layouts.main')

@section('main')

<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">

        @include('layouts.info')

        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign In
                </h2>

                @if (session()->has('loginError'))
                <div class="alert alert-primary alert-dismissible show flex items-center mb-2 mt-2" role="alert">
                    <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                    Username atau Password Tidak sesuai.
                    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                        <i data-lucide="x" class="w-4 h-4"></i>
                    </button>
                </div>
                @endif


                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your
                    account. Manage all your e-commerce accounts in one place</div>

                <form class="intro-x mt-8" action="/login" method="POST">
                    @csrf

                    <input type="text" class="intro-x login__input form-control py-3 px-4 block" name="username"
                        id="username" placeholder="username" />

                    <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                        name="password" id="password" placeholder="password" required />

                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <a href="">Forgot Password?</a>
                    </div>

                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primaryy  outline-slate py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                            type="submit">Login</button>
                    </div>

                </form>

                <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> By
                    signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and
                        Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection