

@extends('home_layouts.main')

@section('home')

<section class="bg-transparent mb-48">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl ">
            SUSUNAN PENGURUS ORGANISASI INTRA SEKOLAH ( OSIS )  SMK NEGERI 1 MAJENE </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Organisasi ini memiliki peran
            sebagai penggerak siswa untuk aktif berkontribusi di sekolah.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        </div>
    </div>
</section>



<section class="">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mx-10">

            @foreach($Ketua as $Ketua)

                <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                    <div class="flex flex-col items-center pb-10 py-4">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('storage/public/images/'.$Ketua->file_path) }}"
                            alt="" />
                        <h5 class="mb-1 text-xl font-medium text-gray-900  ">{{ $Ketua->name }}</h5>
                        <h5 class="mb-1 font-medium text-xs bg-blue-600 rounded-lg mt-2 text-white uppercase text-center  py-1 px-6">{{ $Ketua->jabatan }} UMUM </h5>
                        
                        <div class="body italic mt-4 text-sm text-center px-4">"{{ $Ketua->motto }} "</div>
                    </div>
                </div>

            @endforeach

            @foreach($WakilKetuaI as $WakilKetuaI)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$WakilKetuaI->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $WakilKetuaI->name }}</h5>
                    <h5 class="mb-1 font-medium text-xs bg-blue-600 rounded-lg mt-2 text-white uppercase text-center  py-1 px-6">{{ $WakilKetuaI->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $WakilKetuaI->motto }}"</div>
                </div>
            </div>
            

            @endforeach

            @foreach($WakilKetuaII as $WakilKetuaII)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$WakilKetuaII->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $WakilKetuaII->name }}</h5>
                    <h5 class="mb-1 font-medium text-xs bg-blue-600 rounded-lg mt-2 text-white uppercase text-center  py-1 px-6">{{ $WakilKetuaII->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $WakilKetuaII->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($Sekretaris as $Sekretaris)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$Sekretaris->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $Sekretaris->name }}</h5>
                    <h5 class="mb-1 font-medium text-xs bg-blue-600 rounded-lg mt-2 text-white uppercase text-center  py-1 px-6">{{ $Sekretaris->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $Sekretaris->motto }}"</div>
                </div>
            </div>
            
            @endforeach

            


            @foreach($WakilSekretaris as $WakilSekretaris)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$WakilSekretaris->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $WakilSekretaris->name }}</h5>
                    <h5 class="mb-1 font-medium text-xs bg-blue-600 rounded-lg mt-2 text-white uppercase text-center  py-1 px-6">{{ $WakilSekretaris->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $WakilSekretaris->motto }}"</div>
                </div>
            </div>
            
            @endforeach

            @foreach($Bendahara as $Bendahara)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$Bendahara->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $Bendahara->name }}</h5>
                    <h5 class="mb-1 font-medium text-xs bg-blue-600 rounded-lg mt-2 text-white uppercase text-center  py-1 px-6">{{ $Bendahara->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $Bendahara->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangKeimanan as $SeksiBidangKeimanan)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangKeimanan->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangKeimanan->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangKeimanan->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangKeimanan->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangBudi as $SeksiBidangBudi)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangBudi->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangBudi->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangBudi->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangBudi->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangKepribadian as $SeksiBidangKepribadian)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangKepribadian->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangKepribadian->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangKepribadian->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangKepribadian->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangDemokrasi as $SeksiBidangDemokrasi)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangDemokrasi->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangDemokrasi->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangDemokrasi->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangDemokrasi->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangPrestasi as $SeksiBidangPrestasi)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangPrestasi->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangPrestasi->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangPrestasi->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangPrestasi->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangKreatifitas as $SeksiBidangKreatifitas)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangKreatifitas->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangKreatifitas->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangKreatifitas->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangKreatifitas->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangKualitas as $SeksiBidangKualitas)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangKualitas->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangKualitas->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangKualitas->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangKualitas->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangSastra as $SeksiBidangSastra)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangSastra->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangSastra->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangSastra->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangSastra->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangTeknologi as $SeksiBidangTeknologi)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangTeknologi->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangTeknologi->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangTeknologi->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangTeknologi->motto }}"</div>
                </div>
            </div>
            
            @endforeach


            @foreach($SeksiBidangKomunikasi as $SeksiBidangKomunikasi)
            
            <div class="w-full max-w-sm col-span-1 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/public/images/'.$SeksiBidangKomunikasi->file_path) }}" alt="" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $SeksiBidangKomunikasi->name }}</h5>
                    <h5 class="mb-1 font-medium text-gray-900 text-xs  text-center  py-1 px-6">{{ $SeksiBidangKomunikasi->jabatan }}</h5>
            
                    <div class="body italic mt-4 text-sm text-center px-4">"{{ $SeksiBidangKomunikasi->motto }}"</div>
                </div>
            </div>
            
            @endforeach

            

    </div>

</section>


<footer class="bg-gray-50 rounded-lg shadow py-6 mt-10 mx-auto border">
    <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="" class="hover:underline">KKN PPL SMK
            NEGERI MAJENE ANG.XXVI</a>. All Rights Reserved.</span>
</footer>



@endsection