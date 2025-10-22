<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>Testimonials</h4>
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
                        <li class="breadcrumb-item active">Testimonials</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- List -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-semibold">All Testimonials</h5>
                    <a href="{{ route('admin.testimonials', ['action' => 'add']) }}" class="btn btn-primary">
                        <i class="fa fa-plus me-1"></i> Add Testimonial
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th style="width:5%;text-align:center;">#</th>
                                <th style="width:35%;">Client</th>
                                <th style="width:25%;">Linked Service</th>
                                <th style="width:10%;">Status</th>
                                <th style="width:25%;text-align:center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($testimonials as $index => $t)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($t->photo ?? 'admin/images/placeholder.png') }}"
                                                 width="60" height="60" class="rounded-circle shadow-sm me-3" alt="Client Photo">
                                            <div>
                                                <h6 class="mb-0 fw-semibold">{{ $t->client_name }}</h6>
                                                <small class="text-muted">{{ $t->designation ?? '—' }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $t->service->title ?? 'Not Linked' }}</td>
                                    <td>
                                        @if($t->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.testimonials', ['action' => 'edit', 'href' => $t->id]) }}" 
                                           class="btn btn-outline-primary btn-sm me-2" title="Edit">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.testimonials.delete', $t->id) }}" 
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        <em>No testimonials found.</em>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
