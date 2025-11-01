<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title d-flex justify-content-between align-items-center">
            <h4>All Banners</h4>

            {{-- Show Add or Edit button --}}
            @if(!$bannerRecord)
                <a href="{{ route('admin.banner', ['action' => 'add']) }}" class="btn btn-primary">
                    <i class="fa fa-plus me-1"></i> Add Banner
                </a>
            @elseif($bannerRecord->status == 1)
                <a href="{{ route('admin.banner', ['action' => 'edit', 'id' => $bannerRecord->id]) }}" class="btn btn-warning">
                    <i class="fa fa-edit me-1"></i> Edit Banner
                </a>
            @endif
        </div>

        <div class="card mt-3">
            <div class="card-body">
                @if($bannerRecord)
                    <div class="table-responsive">
                        <table class="table table-striped align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tag</th>
                                    <th>Heading</th>
                                    <th>Status</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $bannerRecord->id }}</td>
                                    <td>{{ $bannerRecord->tag }}</td>
                                    <td>{{ $bannerRecord->heading }}</td>
                                    <td>
                                        @if($bannerRecord->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        @if($bannerRecord->status == 1)
                                            <a href="{{ route('admin.banner', ['action' => 'edit', 'id' => $bannerRecord->id]) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        @endif

                                        <form action="{{ route('admin.banner.delete', $bannerRecord->id) }}" method="POST" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this banner?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-center py-4 text-muted"><em>No banners found.</em></p>
                @endif
            </div>
        </div>
    </div>
</div>
