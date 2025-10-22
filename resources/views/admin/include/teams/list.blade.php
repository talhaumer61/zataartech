<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>Team Members</h4>
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
                        <li class="breadcrumb-item active">Teams</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- List -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-semibold">All Team Members</h5>
                    <a href="{{ route('admin.teams', ['action' => 'add']) }}" class="btn btn-primary">
                        <i class="fa fa-plus me-1"></i> Add Member
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th style="width:5%;text-align:center;">#</th>
                                <th style="width:35%;">Member</th>
                                <th style="width:20%;">Designation</th>
                                <th style="width:10%;">Status</th>
                                <th style="width:30%;text-align:center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teams as $index => $member)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($member->photo ?? 'admin/images/placeholder.png') }}"
                                                 width="60" height="60" class="rounded-circle shadow-sm me-3" alt="Team Photo">
                                            <div>
                                                <h6 class="mb-0 fw-semibold">{{ $member->name }}</h6>
                                                <small class="text-muted">{{ $member->email ?? '—' }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $member->designation ?? '—' }}</td>
                                    <td>
                                        @if($member->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.teams', ['action' => 'edit', 'href' => $member->href]) }}" 
                                           class="btn btn-outline-primary btn-sm me-2" title="Edit">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.teams.delete', $member->id) }}" 
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this team member?')">
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
                                        <em>No team members found.</em>
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
