<div class="page-body">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>Contact Queries</h4>
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
                        <li class="breadcrumb-item active">Contact Queries</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- List -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-semibold">All Contact Queries</h5>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th style="width:5%;text-align:center;">#</th>
                                <th style="width:15%;">Name</th>
                                <th style="width:15%;">Email</th>
                                <th style="width:15%;">Subject</th>
                                <th style="width:20%;text-align:center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($queries as $index => $q)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $q->fullname }}</td>
                                    <td>{{ $q->email }}</td>
                                    <td>{{ $q->subject }}</td>
                                    <td class="text-center">
                                        <!-- View Button -->
                                        <button type="button"
                                                class="btn btn-outline-info btn-sm me-2"
                                                data-bs-toggle="modal"
                                                data-bs-target="#queryModal"
                                                data-name="{{ $q->fullname }}"
                                                data-email="{{ $q->email }}"
                                                data-number="{{ $q->number }}"
                                                data-subject="{{ $q->subject }}"
                                                data-message="{{ $q->message }}">
                                            <i class="bx bx-show"></i> View
                                        </button>

                                        <!-- Delete -->
                                        <form action="{{ route('contact.queries.delete', $q->id) }}" 
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this query?')">
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
                                    <td colspan="6" class="text-center py-4">
                                        <em>No contact queries found.</em>
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

<!-- Query Detail Modal -->
<div class="modal fade" id="queryModal" tabindex="-1" aria-labelledby="queryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="queryModalLabel">Query Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-borderless">
                    <tr>
                        <th style="width:150px;">Name:</th>
                        <td id="modalName"></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td id="modalEmail"></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td id="modalNumber"></td>
                    </tr>
                    <tr>
                        <th>Subject:</th>
                        <td id="modalSubject"></td>
                    </tr>
                    <tr>
                        <th>Message:</th>
                        <td id="modalMessage" class="text-wrap"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- JS for Modal Data -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var queryModal = document.getElementById('queryModal');
    queryModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;

        document.getElementById('modalName').textContent = button.getAttribute('data-name');
        document.getElementById('modalEmail').textContent = button.getAttribute('data-email');
        document.getElementById('modalNumber').textContent = button.getAttribute('data-number');
        document.getElementById('modalSubject').textContent = button.getAttribute('data-subject');
        document.getElementById('modalMessage').textContent = button.getAttribute('data-message');
    });
});
</script>
