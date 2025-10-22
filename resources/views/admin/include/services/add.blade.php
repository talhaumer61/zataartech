<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
            <div class="col-6">
                <h4>
                    Add Service</h4>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">                                       
                    <svg class="stroke-icon">
                        <use href="{{asset('admin/svg/icon-sprite.svg#stroke-home')}}"></use>
                    </svg></a></li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item active">Add Service</li>
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
                        <div class="form theme-form">
                            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="form theme-form">
                                @csrf

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="title" placeholder="Enter service title" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Status</label>
                                            <select name="status" class="form-select">
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Overview</label>
                                            <textarea class="form-control" name="overview" rows="3" placeholder="Write a short overview"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>What's Included</label>
                                            <textarea class="form-control" name="whats_included" id="ckeditor" rows="3" placeholder="List features or inclusions"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Use Cases</label>
                                            <textarea class="form-control" name="use_cases" id="ckeditor" rows="3" placeholder="Describe use cases"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Description</label>
                                            <textarea class="form-control form-control-modern" name="description" id="ckeditor" rows="6" placeholder="Detailed description"></textarea>
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
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col text-end">
                                        <button type="submit" class="btn btn-success me-3">Add Service</button>
                                        <a href="#" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>