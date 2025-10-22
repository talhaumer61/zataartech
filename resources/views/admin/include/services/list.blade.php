<div class="page-body">
    <div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <div class="col-6">
            <h4>
                Services</h4>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">                                       
                <svg class="stroke-icon">
                    <use href="{{asset('admin/svg/icon-sprite.svg#stroke-home')}}"></use>
                </svg></a></li>
            <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-sm-12"> 
                <div class="card"> 
                    <div class="card-body">
                        <div class="list-product-header">
                            <div> 
                                <a class="btn btn-primary" href="/portal/services/add"><i class="fa fa-plus"></i>Add Service</a>
                            </div>
                        </div>
                        <div class="list-service">
                            <table class="table align-middle" id="service-list">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 5%; text-align:center;">#</th>
                                        <th style="width: 55%;">Service</th>
                                        <th style="width: 15%;">Status</th>
                                        <th style="width: 20%; text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($services as $index => $service)
                                        <tr class="service-item">
                                            <!-- Serial No -->
                                            <td class="text-muted text-center">{{ $index + 1 }}</td>

                                            <!-- Combined Photo + Title -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        @if($service->icon)
                                                            <img src="{{ asset($service->icon) }}" 
                                                                alt="{{ $service->title }}" 
                                                                width="60" height="60" 
                                                                class="rounded shadow-sm border">
                                                        @else
                                                            <img src="{{ asset('admin/images/placeholder.png') }}" 
                                                                width="60" height="60" 
                                                                class="rounded shadow-sm border" 
                                                                alt="no image">
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">{{ $service->title }}</h6>
                                                        <small class="text-muted">
                                                            {{ $service->overview ? Str::limit($service->overview, 70) : 'No overview available.' }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Status -->
                                            <td>
                                                @if($service->status)
                                                    <span class="badge bg-success px-3 py-2">Active</span>
                                                @else
                                                    <span class="badge bg-danger px-3 py-2">Inactive</span>
                                                @endif
                                            </td>

                                            <!-- Actions -->
                                            <td class="text-center">
                                                <!-- Edit Button -->
                                                <a href="{{ route('admin.services', ['action' => 'edit', 'href' => $service->href]) }}" 
                                                class="btn btn-outline-primary btn-sm me-2" title="Edit">
                                                    <i class="bx bx-edit-alt"></i>
                                                </a>

                                                <!-- Delete Button -->
                                                <form action="{{ route('admin.services.delete', $service->id) }}" method="POST" 
                                                    onsubmit="return confirm('Are you sure you want to delete this service?')" 
                                                    style="display:inline;">
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
                                            <td colspan="4" class="text-center py-4">
                                                <em>No services found.</em>
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
    </div>
    <!-- Container-fluid Ends-->
</div>