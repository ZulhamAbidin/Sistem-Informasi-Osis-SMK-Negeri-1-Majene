<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">jabatan</label>
        <input type="text" name="jabatan" id="jabatan" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">motto</label>
        <input type="text" name="motto" id="motto" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">jurusan</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>