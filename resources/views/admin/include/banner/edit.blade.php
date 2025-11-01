<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <h4>Edit Banner</h4>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tag</label>
                            <input 
                                type="text" 
                                name="tag" 
                                class="form-control" 
                                value="{{ old('tag', $banner->tag) }}" 
                                placeholder="Enter tag">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading</label>
                            <input 
                                type="text" 
                                name="heading" 
                                class="form-control" 
                                value="{{ old('heading', $banner->heading) }}" 
                                placeholder="Enter heading">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea 
                                name="desc" 
                                class="form-control" 
                                rows="3" 
                                placeholder="Enter description">{{ old('desc', $banner->desc) }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Button Text</label>
                            <input 
                                type="text" 
                                name="button_text" 
                                class="form-control" 
                                value="{{ old('button_text', $banner->button_text) }}" 
                                placeholder="Enter button text">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">URL</label>
                            <input 
                                type="text" 
                                name="url" 
                                class="form-control" 
                                value="{{ old('url', $banner->url) }}" 
                                placeholder="Enter URL">
                        </div>

                        {{-- <div class="col-md-12">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', $banner->status) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $banner->status) == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div> --}}
                    </div>

                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.banner') }}" class="btn btn-outline-secondary me-2">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save me-1"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
