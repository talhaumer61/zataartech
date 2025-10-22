<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>{{ isset($team) ? 'Edit Team Member' : 'Add Team Member' }}</h4>
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
                            <a href="{{ route('admin.teams') }}">Teams</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ isset($team) ? 'Edit' : 'Add' }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="card mt-3">
            <div class="card-body">
                <form 
                    action="{{ isset($team) 
                        ? route('admin.teams.update', $team->id) 
                        : route('admin.teams.store') }}" 
                    method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    @if(isset($team))
                        @method('POST')
                    @endif

                    <div class="row g-4">
                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" 
                                   value="{{ old('name', $team->name ?? '') }}" required>
                        </div>

                        <!-- Designation -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Designation</label>
                            <input type="text" name="designation" class="form-control"
                                   value="{{ old('designation', $team->designation ?? '') }}">
                        </div>

                        <!-- Email -->
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control"
                                   value="{{ old('email', $team->email ?? '') }}">
                        </div>

                        
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Phone</label>
                            <input type="text" name="phone" class="form-control"
                                   value="{{ old('phone', $team->phone ?? '') }}">
                        </div>

                        <!-- Status -->
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', $team->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $team->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Linkedin</label>
                            <input type="text" name="linkedin" class="form-control"
                                   value="{{ old('linkedin', $team->linkedin ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Twitter</label>
                            <input type="text" name="twitter" class="form-control"
                                   value="{{ old('twitter', $team->twitter ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Facebook</label>
                            <input type="text" name="facebook" class="form-control"
                                   value="{{ old('facebook', $team->facebook ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Instagram</label>
                            <input type="text" name="instagram" class="form-control"
                                   value="{{ old('instagram', $team->instagram ?? '') }}">
                        </div>

                        <!-- Photo -->
                        <div class="col-12">
                            <div class="mb-4">
                                <div class="fake-dropzone text-center">
                                    <i class="bx bxs-cloud-upload"></i>
                                    <h6>Upload Team Member Photo</h6>
                                    <input type="file" class="form-control mt-3" name="photo" accept=".jpg,.jpeg,.png,.svg">
                                    @if(isset($team) && $team->photo)
                                    <div class="mt-2">
                                        <img src="{{ asset($team->photo) }}" 
                                            alt="Team Member Photo" width="100" height="100" class="rounded shadow-sm border">
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>

                        <!-- Bio -->
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Bio</label>
                            <textarea name="bio" class="form-control" id="ckeditor">{{ old('bio', $team->bio ?? '') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.teams') }}" class="btn btn-outline-secondary me-2">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save me-1"></i> {{ isset($team) ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
