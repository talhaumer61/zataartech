<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>Terms and Conditions</h4>
                </div>
                <div class="col-md-6 text-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Terms and Conditions</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- List -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-semibold">All Terms</h5>
                    <a href="{{ route('admin.terms', ['action' => 'add']) }}" class="btn btn-primary">
                        <i class="fa fa-plus me-1"></i> Add Term
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">#</th>
                                <th>Title</th>
                                <th width="10%">Status</th>
                                <th width="20%" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($terms as $index => $term)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $term->title }}</td>
                                    <td>
                                        @if($term->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.terms', ['action'=>'edit','href'=>$term->href]) }}"
                                        class="btn btn-outline-primary btn-sm">
                                            <i class="bx bx-edit"></i>
                                        </a>

                                        <form action="{{ route('admin.terms.delete',$term->id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Delete this record?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No records found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
