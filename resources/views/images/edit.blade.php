<form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $image->name }}">
    </div>

    <div class="form-group">
        <label for="name">Jabatan</label>
        <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $image->jabatan }}">
    </div>

    <div class="form-group">
        <label for="name">Motto</label>
        <input type="text" name="motto" id="motto" class="form-control" value="{{ $image->motto }}">
    </div>

    <div class="form-group">
        <label for="name">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $image->jurusan }}">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
        <img src="{{ asset('storage/public/images/'.$image->file_path) }}" alt="{{ $image->name }}" width="200">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>