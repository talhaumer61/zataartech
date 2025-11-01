<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <h4>Add Home Page</h4>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('admin.homepage.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">

                        {{-- Status --}}
                        {{-- <div class="col-md-12">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div> --}}

                        {{-- Services Section --}}
                        <h5 class="mt-4 mb-2 fw-bold text-primary">Services Section</h5>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tag</label>
                            <input type="text" name="services_tag" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading</label>
                            <input type="text" name="services_heading" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="services_desc" class="form-control" rows="2"></textarea>
                        </div>

                        {{-- Section 1 --}}
                        <h5 class="mt-4 mb-2 fw-bold text-primary">Section 1</h5>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tag</label>
                            <input type="text" name="section1_tag" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading</label>
                            <input type="text" name="section1_heading" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="section1_desc" class="form-control" id="ckeditor"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Button Text</label>
                            <input type="text" name="section1_btn_text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold mt-2">Button URL</label>
                            <input type="text" name="section1_url" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Image 1</label>
                            <input type="file" name="section1_image1" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Image 2</label>
                            <input type="file" name="section1_image2" class="form-control">
                        </div>

                        {{-- Section 2 --}}
                        <h5 class="mt-4 mb-2 fw-bold text-primary">Section 2</h5>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tag</label>
                            <input type="text" name="section2_tag" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading</label>
                            <input type="text" name="section2_heading" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="section2_desc" class="form-control" id="ckeditor"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Button Text</label>
                            <input type="text" name="section2_btn_text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold mt-2">Button URL</label>
                            <input type="text" name="section2_url" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Image 1</label>
                            <input type="file" name="section2_image1" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Image 2</label>
                            <input type="file" name="section2_image2" class="form-control">
                        </div>

                        {{-- Success Stories --}}
                        <h5 class="mt-4 mb-2 fw-bold text-primary">Success Stories</h5>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tag</label>
                            <input type="text" name="success_stories_tag" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading</label>
                            <input type="text" name="success_stories_heading" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="success_stories_desc" class="form-control" rows="2"></textarea>
                        </div>
                        
                        {{-- Reviews --}}
                        <h5 class="mt-4 mb-2 fw-bold text-primary">Reviews Section</h5>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tag</label>
                            <input type="text" name="reviews_tag" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading</label>
                            <input type="text" name="reviews_heading" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="reviews_desc" class="form-control" rows="2"></textarea>
                        </div>
                        
                        {{-- Footer --}}
                        <h5 class="mt-4 mb-2 fw-bold text-primary">Footer</h5>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="footer_text" class="form-control" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.homepage') }}" class="btn btn-outline-secondary me-2"><i class="fa fa-arrow-left"></i> Back</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
