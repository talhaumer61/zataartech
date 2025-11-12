<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6"><h4>Flags</h4></div>
                <div class="col-md-6 text-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Flags</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-semibold">All Flags</h5>
                    <a href="{{ route('admin.flags', ['action' => 'add']) }}" class="btn btn-primary">
                        <i class="fa fa-plus me-1"></i> Add Flag
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th style="width:5%;text-align:center;">#</th>
                                <th style="width:25%;">Country Name</th>
                                <th style="width:20%;">Flag</th>
                                <th style="width:10%;">Status</th>
                                <th style="width:40%;text-align:center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($flags as $index => $f)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $f->country_name }}</td>
                                    <td>
                                        @if($f->flag_image)
                                            <img src="{{ asset($f->flag_image) }}" width="60" height="40" class="border rounded">
                                        @else
                                            <em>No flag</em>
                                        @endif
                                    </td>
                                    <td>
                                        @if($f->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.flags', ['action' => 'edit', 'id' => $f->id]) }}" 
                                           class="btn btn-outline-primary btn-sm me-2">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.flags.delete', $f->id) }}" 
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this flag?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="text-center py-4"><em>No flags found.</em></td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
