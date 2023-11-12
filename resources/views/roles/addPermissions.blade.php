@extends("layout._lay")
@section("content")
    <form action="{{ route("permissions.post") }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">İzin Adı</label>
            <input type="text" class="form-control" autocomplete="false" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">İzin Açıklaması</label>
            <input type="text" class="form-control" autocomplete="false" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
