<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>{{ isset($flag) ? 'Edit Flag' : 'Add Flag' }}</h4>
                </div>
                <div class="col-md-6 text-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.flags') }}">Flags</a></li>
                        <li class="breadcrumb-item active">{{ isset($flag) ? 'Edit' : 'Add' }}</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <form 
                    action="{{ isset($flag) 
                        ? route('admin.flags.update', $flag->id) 
                        : route('admin.flags.store') }}" 
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($flag)) @method('POST') @endif

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Country Name <span class="text-danger">*</span></label>
                            <input type="text" name="country_name" class="form-control" 
                                   value="{{ old('country_name', $flag->country_name ?? '') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', $flag->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $flag->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Flag Image</label>
                            <input type="file" name="flag_image" class="form-control" accept=".jpg,.jpeg,.png,.svg">
                            @if(isset($flag) && $flag->flag_image)
                                <div class="mt-2">
                                    <img src="{{ asset($flag->flag_image) }}" alt="Flag" width="100" height="70" class="border rounded">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.flags') }}" class="btn btn-outline-secondary me-2">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save me-1"></i> {{ isset($flag) ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
