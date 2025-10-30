<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>About Us</h4>
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
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Content Card -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-end align-items-center mb-4">
                    @if(!$aboutRecord)
                        <a href="{{ route('admin.aboutus', ['action' => 'add']) }}" class="btn btn-primary">
                            <i class="fa fa-plus me-1"></i> Add About Us
                        </a>
                    @elseif($aboutRecord->status == 1)
                        <a href="{{ route('admin.aboutus', ['action' => 'edit', 'id' => $aboutRecord->id]) }}" class="btn btn-warning">
                            <i class="fa fa-edit me-1"></i> Edit About Us
                        </a>
                    @endif
                </div>

                @if($aboutRecord)
                    <div class="p-4 bg-light rounded shadow-sm">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fw-bold mb-0">Status</h5>
                                    @if($aboutRecord->status)
                                        <span class="badge bg-success px-3 py-2">Active</span>
                                    @else
                                        <span class="badge bg-danger px-3 py-2">Inactive</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <h5 class="fw-bold mb-2">Heading</h5>
                                <div class="p-3 bg-dark rounded shadow-sm border">
                                    {!! $aboutRecord->heading !!}
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-4">
                                <h5 class="fw-bold mb-2">About Us</h5>
                                <div class="p-3 bg-dark rounded shadow-sm border">
                                    {!! $aboutRecord->about_us !!}
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="fw-bold mb-2">Mission</h5>
                                <div class="p-3 bg-dark rounded shadow-sm border">
                                    {!! $aboutRecord->mission !!}
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="fw-bold mb-2">Vision</h5>
                                <div class="p-3 bg-dark rounded shadow-sm border">
                                    {!! $aboutRecord->vision !!}
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <h5 class="fw-bold mb-2">Detailed Overview</h5>
                                <div class="p-3 bg-dark rounded shadow-sm border">
                                    {!! $aboutRecord->detail !!}
                                </div>
                            </div>

                            {{-- <div class="col-md-8 mb-4">
                                <h5 class="fw-bold mb-2">CEO Message</h5>
                                <div class="p-3 bg-dark rounded shadow-sm border">
                                    {!! $aboutRecord->ceo_message !!}
                                </div>
                            </div>

                            @if($aboutRecord->ceo_photo)
                                <div class="col-md-4 mb-4 text-center">
                                    <h5 class="fw-bold mb-3">CEO Photo</h5>
                                    <img src="{{ asset($aboutRecord->ceo_photo) }}" class="rounded shadow-sm border" width="150" alt="CEO Photo">
                                </div>
                            @endif --}}
                        </div>
                    </div>
                @else
                    <p class="text-center py-5 text-muted"><em>No About Us record found.</em></p>
                @endif
            </div>
        </div>
    </div>
</div>
