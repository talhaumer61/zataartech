<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ $action == 'edit' ? 'Edit Service' : 'Add Service' }}</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.services') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">
                            {{ $action == 'edit' ? 'Edit Service' : 'Add Service' }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form 
                            action="{{ $action == 'edit' ? route('admin.services.update', $service->id) : route('admin.services.store') }}" 
                            method="POST" 
                            enctype="multipart/form-data" 
                            class="form theme-form">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="title"
                                            placeholder="Enter service title"
                                            value="{{ old('title', $service->title ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <select name="status" class="form-select">
                                            <option value="1" {{ old('status', $service->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status', $service->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Overview</label>
                                        <textarea class="form-control" name="overview" rows="3">{{ old('overview', $service->overview ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>What's Included</label>
                                        <textarea class="form-control" name="whats_included" id="ckeditor">{{ old('whats_included', $service->whats_included ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Use Cases</label>
                                        <textarea class="form-control" name="use_cases" id="ckeditor">{{ old('use_cases', $service->use_cases ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control form-control-modern" name="description" id="ckeditor">{{ old('description', $service->description ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="fake-dropzone text-center mb-3">
                                        <i class="bx bxs-cloud-upload"></i>
                                        <h6>Upload Service Icon</h6>
                                        <input 
                                            type="file" 
                                            class="form-control mt-3" 
                                            name="icon" 
                                            accept=".jpg,.jpeg,.png,.svg">
                                        @if(!empty($service->icon))
                                            <div class="mt-3">
                                                <img src="{{ asset($service->icon) }}" alt="Service Icon" width="120" class="rounded">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <div class="fake-dropzone text-center mb-3">
                                        <i class="bx bxs-cloud-upload"></i>
                                        <h6>Upload Service Photo</h6>
                                        <input 
                                            type="file" 
                                            class="form-control mt-3" 
                                            name="photo" 
                                            accept=".jpg,.jpeg,.png,.svg">
                                        @if(!empty($service->photo))
                                            <div class="mt-3">
                                                <img src="{{ asset($service->photo) }}" alt="Service photo" width="120" class="rounded">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col text-end">
                                    <button type="submit" class="btn btn-success me-3">
                                        {{ $action == 'edit' ? 'Update Service' : 'Add Service' }}
                                    </button>
                                    <a href="{{ route('admin.services') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
