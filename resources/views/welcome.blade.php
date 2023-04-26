<div class="row">
    @foreach($ketua as $ketua)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{ asset('storage/public/images/'.$ketua->file_path) }}" alt="{{ $ketua->name }}" width="200px">
            <div class="card-body">
                <h5 class="card-title">{{ $ketua->name }}</h5>
                <h5 class="card-title">{{ $ketua->jabatan }}</h5>
                <h5 class="card-title">{{ $ketua->motto }}</h5>
                <h5 class="card-title">{{ $ketua->jurusan }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row">
    @foreach($bendahara as $bendahara)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{ asset('storage/public/images/'.$bendahara->file_path) }}"
                alt="{{ $bendahara->name }}" width="200px">
            <div class="card-body">
                <h5 class="card-title">{{ $bendahara->name }}</h5>
                <h5 class="card-title">{{ $bendahara->jabatan }}</h5>
                <h5 class="card-title">{{ $bendahara->motto }}</h5>
                <h5 class="card-title">{{ $bendahara->jurusan }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>


<div class="row">
    @foreach($sekretaris as $sekretaris)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{ asset('storage/public/images/'.$sekretaris->file_path) }}"
                alt="{{ $sekretaris->name }}" width="200px">
            <div class="card-body">
                <h5 class="card-title">{{ $sekretaris->name }}</h5>
                <h5 class="card-title">{{ $sekretaris->jabatan }}</h5>
                <h5 class="card-title">{{ $sekretaris->motto }}</h5>
                <h5 class="card-title">{{ $sekretaris->jurusan }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>
