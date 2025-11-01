<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <h4>Add Banner</h4>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('admin.banner.store') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tag</label>
                            <input type="text" name="tag" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading</label>
                            <input type="text" name="heading" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="desc" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Button Text</label>
                            <input type="text" name="button_text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Button URL</label>
                            <input type="text" name="url" class="form-control">
                        </div>

                        {{-- <div class="col-md-12">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div> --}}
                    </div>

                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.banner') }}" class="btn btn-outline-secondary me-2"><i class="fa fa-arrow-left"></i> Back</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
