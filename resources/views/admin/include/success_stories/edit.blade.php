<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ $action == 'edit' ? 'Edit Success Story' : 'Add Success Story' }}</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.success-stories') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Success Stories</li>
                        <li class="breadcrumb-item active">
                            {{ $action == 'edit' ? 'Edit' : 'Add' }}
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
                            action="{{ $action == 'edit' ? route('admin.success-stories.update', $story->id) : route('admin.success_stories.store') }}" 
                            method="POST" 
                            enctype="multipart/form-data" 
                            class="form theme-form">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="title"
                                            value="{{ old('title', $story->title ?? '') }}" placeholder="Enter story title" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <select name="status" class="form-select">
                                            <option value="1" {{ old('status', $story->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status', $story->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Linked Service (optional)</label>
                                <select name="id_service" class="form-select">
                                    <option value="">-- Select Service --</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ old('id_service', $story->id_service ?? '') == $service->id ? 'selected' : '' }}>
                                            {{ $service->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Problem</label>
                                <textarea class="form-control" name="problem" id="ckeditor">{{ old('problem', $story->problem ?? '') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Solution</label>
                                <textarea class="form-control" name="solution" id="ckeditor">{{ old('solution', $story->solution ?? '') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Results</label>
                                <textarea class="form-control" name="results" id="ckeditor">{{ old('results', $story->results ?? '') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="ckeditor">{{ old('description', $story->description ?? '') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <div class="fake-dropzone text-center">
                                    <i class="bx bxs-cloud-upload"></i>
                                    <h6>Upload Story Photo</h6>
                                    <input type="file" class="form-control mt-3" name="photo" accept=".jpg,.jpeg,.png,.svg">
                                    @if(!empty($story->photo))
                                        <div class="mt-3">
                                            <img src="{{ asset($story->photo) }}" alt="Story photo" width="120" class="rounded">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-success me-3">
                                    {{ $action == 'edit' ? 'Update Story' : 'Add Story' }}
                                </button>
                                <a href="{{ route('admin.success-stories') }}" class="btn btn-danger">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
