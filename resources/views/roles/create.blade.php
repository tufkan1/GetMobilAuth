@extends("layout._lay")
@section("content")
    <form action="{{ route("roles.store") }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Rol Adı</label>
            <input type="text" class="form-control" autocomplete="false" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label"></label>
            <select class="form-select" name="permissions[]" multiple>
                @foreach($permissions as $permission)
                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Rol Açıklaması</label>
            <input type="text" class="form-control" autocomplete="false" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
