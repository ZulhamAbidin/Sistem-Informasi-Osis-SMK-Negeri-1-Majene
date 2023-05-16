@extends('home_layouts.main')

@section('home')

    <section class="bg-transparent absolute md:static">
        <div class="py-8 px-4 max-w-screen-x text-center lg:py-16">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tightleading-none text-gray-900 md:text-5xl lg:text-6xl ">
                OSIS SMK NEGERI 1 MAJENE</h1>
            <p class="mb-8 text-md font-normal text-gray-500 lg:text-xl px-2 lg:px-48">Organisasi ini memiliki peran
                sebagai penggerak siswa untuk aktif berkontribusi di sekolah.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/blogs"
                    class="inline-flex justify-center items-center mx-8 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Lihat Postingan </a>
                <a href="/welcome"
                    class="inline-flex justify-center items-center mx-8 py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 ">
                    Struktur </a>
            </div>
        </div>
    </section>


    <footer class="bg-gray-50 rounded-lg shadow py-6 mt-10 mx-auto border fixed bottom-0 left-0 right-0">
            <span class="block text-sm text-gray-500 sm:text-center text-center">© 2023 <a href="https://www.instagram.com/kknppl_smkn1majene/" class="hover:underline">KKN PPL SMK NEGERI MAJENE ANG.XXVI</a>. All Rights Reserved.</span>
</footer>
    
@endsection

   
