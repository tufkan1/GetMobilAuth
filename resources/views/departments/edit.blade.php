@extends("layout._lay")
@section("content")
    <form action="{{ route("departments.update", $department) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Departman Adı</label>
            <input type="text" value="{{ $department->name }}" class="form-control" autocomplete="false" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
