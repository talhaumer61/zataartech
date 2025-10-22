<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>{{ isset($testimonial) ? 'Edit Testimonial' : 'Add Testimonial' }}</h4>
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
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.testimonials') }}">Testimonials</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ isset($testimonial) ? 'Edit' : 'Add' }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="card mt-3">
            <div class="card-body">
                <form 
                    action="{{ isset($testimonial) 
                        ? route('admin.testimonials.update', $testimonial->id) 
                        : route('admin.testimonials.store') }}" 
                    method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    @if(isset($testimonial))
                        @method('POST')
                    @endif

                    <div class="row g-4">
                        <!-- Client Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Client Name <span class="text-danger">*</span></label>
                            <input type="text" name="client_name" class="form-control" 
                                   value="{{ old('client_name', $testimonial->client_name ?? '') }}" required>
                        </div>

                        <!-- Designation -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Designation</label>
                            <input type="text" name="designation" class="form-control"
                                   value="{{ old('designation', $testimonial->designation ?? '') }}"
                                   placeholder="e.g. CEO, Tech Freelancer">
                        </div>

                        <!-- Service (Optional) -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Related Service (optional)</label>
                            <select name="id_service" class="form-select">
                                <option value="">-- Select Service --</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" 
                                        {{ isset($testimonial) && $testimonial->id_service == $service->id ? 'selected' : '' }}>
                                        {{ $service->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', $testimonial->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $testimonial->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Client Photo -->
                        <div class="col-12">
                            <div class="mb-4">
                                <div class="fake-dropzone text-center">
                                    <i class="bx bxs-cloud-upload"></i>
                                    <h6>Upload Client Photo</h6>
                                    <input type="file" class="form-control mt-3" name="photo" accept=".jpg,.jpeg,.png,.svg">
                                    @if(isset($testimonial) && $testimonial->photo)
                                    <div class="mt-2">
                                        <img src="{{ asset($testimonial->photo) }}" 
                                            alt="Client Photo" width="100" height="100" class="rounded shadow-sm border">
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>

                        <!-- Review -->
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Review <span class="text-danger">*</span></label>
                            <textarea name="review" class="form-control" id="ckeditor" required>{{ old('review', $testimonial->review ?? '') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.testimonials') }}" class="btn btn-outline-secondary me-2">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save me-1"></i> {{ isset($testimonial) ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
