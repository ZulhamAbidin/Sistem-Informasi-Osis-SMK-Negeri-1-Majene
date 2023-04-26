<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Jabatan</th>
            <th>Motto</th>
            <th>Jurusan</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($images as $image)
        <tr>
            <td>{{ $image->id }}</td>
            <td>{{ $image->name }}</td>
            <td>{{ $image->jabatan }}</td>
            <td>{{ $image->motto }}</td>
            <td>{{ $image->jurusan }}</td>
            <td>
                <img src="{{ asset('storage/public/images/'.$image->file_path) }}" alt="{{ $image->name }}" width="200">
            </td>
            <td>
                <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('images.destroy', $image->id) }}" method="POST">
                @csrf
                @method('DELETE')

                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>