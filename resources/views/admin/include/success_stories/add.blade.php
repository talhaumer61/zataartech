<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Add Success Story</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg></a>
                        </li>
                        <li class="breadcrumb-item">Success Stories</li>
                        <li class="breadcrumb-item active">Add</li>
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
                        <form action="{{ route('admin.success-stories.store') }}" method="POST" enctype="multipart/form-data" class="form theme-form">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="title" placeholder="Enter story title" required>
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

                            <div class="mb-3">
                                <label>Linked Service (optional)</label>
                                <select name="id_service" class="form-select">
                                    <option value="">-- Select Service --</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Problem</label>
                                <textarea class="form-control" name="problem" id="ckeditor" placeholder="Describe the problem faced"></textarea>
                            </div>

                            <div class="mb-3">
                                <label>Solution</label>
                                <textarea class="form-control" name="solution" id="ckeditor" placeholder="Describe how the problem was solved"></textarea>
                            </div>

                            <div class="mb-3">
                                <label>Results</label>
                                <textarea class="form-control" name="results" id="ckeditor" placeholder="Share the key results"></textarea>
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea class="form-control form-control-modern" name="description" id="ckeditor" placeholder="Detailed story"></textarea>
                            </div>

                            <div class="mb-4">
                                <div class="fake-dropzone text-center">
                                    <i class="bx bxs-cloud-upload"></i>
                                    <h6>Upload Story Photo</h6>
                                    <input type="file" class="form-control mt-3" name="photo" accept=".jpg,.jpeg,.png,.svg">
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success me-3">Add Story</button>
                                <a href="{{ route('admin.success-stories') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
