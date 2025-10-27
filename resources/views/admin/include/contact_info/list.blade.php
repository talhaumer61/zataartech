<div class="page-body">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>Contact Info</h4>
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
                        <li class="breadcrumb-item active">Contact Info</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- List / Single Record Display -->
        <div class="card mt-3">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-semibold">Contact Information</h5>

                    @if(!$contactRecord)
                        <a href="{{ route('admin.contactinfo', ['action' => 'add']) }}" class="btn btn-primary">
                            <i class="fa fa-plus me-1"></i> Add Contact Info
                        </a>
                    @elseif($contactRecord->status == 1)
                        <a href="{{ route('admin.contactinfo', ['action' => 'edit', 'id' => $contactRecord->id]) }}" class="btn btn-warning">
                            <i class="fa fa-edit me-1"></i> Edit Contact Info
                        </a>
                    @endif
                </div>

                @if($contactRecord)
                    <table class="table table-bordered align-middle">
                        <tbody>
                            <tr>
                                <th style="width:25%">Heading</th>
                                <td>{{ $contactRecord->heading }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{!! nl2br(e($contactRecord->description)) !!}</td>
                            </tr>
                            <tr>
                                <th>Address 1</th>
                                <td>{{ $contactRecord->address1 }}</td>
                            </tr>
                            <tr>
                                <th>Address 2</th>
                                <td>{{ $contactRecord->address2 }}</td>
                            </tr>
                            <tr>
                                <th>Phone 1</th>
                                <td>{{ $contactRecord->phone1 }}</td>
                            </tr>
                            <tr>
                                <th>Whatsapp</th>
                                <td>{{ $contactRecord->phone2 }}</td>
                            </tr>
                            <tr>
                                <th>Email 1</th>
                                <td>{{ $contactRecord->email1 }}</td>
                            </tr>
                            <tr>
                                <th>Email 2</th>
                                <td>{{ $contactRecord->email2 }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if($contactRecord->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @else
                    <p class="text-center py-4"><em>No contact information found.</em></p>
                @endif
            </div>
        </div>
    </div>
</div>