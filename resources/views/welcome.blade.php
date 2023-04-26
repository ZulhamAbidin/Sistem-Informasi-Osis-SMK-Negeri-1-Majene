<div class="row">
    @foreach($images as $image)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{ asset('storage/public/images/'.$image->file_path) }}" alt="{{ $image->name }}" width="200px">
            <div class="card-body">
                <h5 class="card-title">{{ $image->name }}</h5>
                <p class="card-text">{{ $image->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>