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
                    <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
                </ol>
            </nav>

            @include('dashboard.layouts.dropdown')

        </div>

        <div class="">

            <div class="grid grid-cols-12 gap-6 mt-5">

                <form class="my-auto mx-auto col-span-12 px-10  rounded-md shadow-md xl:shadow-none w-full"
                    action="/register" method="POST">
                    @csrf
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Sign Up
                    </h2>

                    <div class="intro-x mt-8">

                        <input type="text"
                            class="intro-x login__input form-control py-3 px-4 block mt-4 @error('name') is-invalid @enderror"
                            id="name" name="name" placeholder="nama lengkap" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input type="text"
                            class="intro-x login__input form-control py-3 px-4 block mt-4 @error('username') is-invalid @enderror"
                            id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input type="email"
                            class="intro-x login__input form-control py-3 px-4 block mt-4 @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="zlhm@gmail.com" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input type="text"
                            class="intro-x login__input form-control py-3 px-4 block mt-4 @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <select name="is_admin" class="tom-select w-full mt-3" required>
                            <option value="1">Super User</option>
                            <option value="0" selected>User Admin</option>
                        </select>

                    </div>

                    <div class="intro-x mt-3 xl:mt-8 text-center xl:text-left">
                        <button type="submit"
                            class="btn btn-primaryy  text-white py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                    </div>


                </form>


            </div>
        </div>

    </div>

    @endsection