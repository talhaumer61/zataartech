@if($action === 'add' || $action === 'edit')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>{{ isset($about) ? 'Edit About Us' : 'Add About Us' }}</h4>
                </div>
                <div class="col-md-6 text-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.aboutus') }}">About Us</a></li>
                        <li class="breadcrumb-item active">{{ isset($about) ? 'Edit' : 'Add' }}</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <form 
                    action="{{ isset($about) ? route('admin.aboutus.update', $about->id) : route('admin.aboutus.store') }}" 
                    method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-4">
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">About Us</label>
                            <textarea name="about_us" class="form-control" id="ckeditor">{{ old('about_us', $about->about_us ?? '') }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Mission</label>
                            <textarea name="mission" class="form-control" id="ckeditor">{{ old('mission', $about->mission ?? '') }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Vision</label>
                            <textarea name="vision" class="form-control" id="ckeditor">{{ old('vision', $about->vision ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Detail</label>
                            <textarea name="detail" id="ckeditor" class="form-control">{{ old('detail', $about->detail ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-semibold">CEO Message</label>
                            <textarea name="ceo_message" class="form-control" id="ckeditor">{{ old('ceo_message', $about->ceo_message ?? '') }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">CEO Photo</label>
                            <input type="file" name="ceo_photo" class="form-control" accept=".jpg,.jpeg,.png,.svg">
                            @if(isset($about) && $about->ceo_photo)
                                <img src="{{ asset($about->ceo_photo) }}" width="100" class="mt-2 rounded shadow-sm border">
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', $about->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $about->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.aboutus') }}" class="btn btn-outline-secondary me-2"><i class="fa fa-arrow-left"></i> Back</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i> {{ isset($about) ? 'Update' : 'Save' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
