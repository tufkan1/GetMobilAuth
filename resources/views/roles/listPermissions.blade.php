@extends("layout._lay")
@section("content")
    @foreach($permissions as $permission)
        <div class="p-8 mb-4 border rounded-2">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-auto mb-8 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <div>
                            <p class="mb-0 text-dark">{{ $permission->name }}</p>
                        </div>
                        <p class="mb-0 ms-4 text-info">{{ $permission->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <a href="{{ route("permissions.add") }}" class="btn btn-success">Ekle</a>
@endsection
