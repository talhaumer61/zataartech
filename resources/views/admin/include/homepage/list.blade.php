<div class="page-body">
    <div class="container-fluid">
        <div class="page-title d-flex justify-content-between align-items-center">
            <h4>Home Page Content</h4>

            @if(!$homePageRecord)
                <a href="{{ route('admin.homepage', ['action' => 'add']) }}" class="btn btn-primary">
                    <i class="fa fa-plus me-1"></i> Add Home Page
                </a>
            @elseif($homePageRecord->status == 1)
                <a href="{{ route('admin.homepage', ['action' => 'edit', 'id' => $homePageRecord->id]) }}" class="btn btn-warning">
                    <i class="fa fa-edit me-1"></i> Edit Home Page
                </a>
            @endif
        </div>

        <div class="card mt-3">
            <div class="card-body">
                @if($action === 'add' || $action === 'edit')
                    <form 
                        action="{{ $action === 'edit' ? route('admin.homepage.update', $homePage->id) : route('admin.homepage.store') }}" 
                        method="POST">
                        @csrf
                        @if($action === 'edit') @method('PUT') @endif

                        <h5 class="mb-3">Services Section</h5>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>Tag</label>
                                <input type="text" name="services_tag" class="form-control" value="{{ old('services_tag', $homePage->services_tag ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label>Heading</label>
                                <input type="text" name="services_heading" class="form-control" value="{{ old('services_heading', $homePage->services_heading ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label>Description</label>
                                <textarea name="services_desc" class="form-control">{{ old('services_desc', $homePage->services_desc ?? '') }}</textarea>
                            </div>
                        </div>

                        <hr>
                        <h5 class="mb-3">Section 1</h5>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label>Tag</label>
                                <input type="text" name="section1_tag" class="form-control" value="{{ old('section1_tag', $homePage->section1_tag ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label>Heading</label>
                                <input type="text" name="section1_heading" class="form-control" value="{{ old('section1_heading', $homePage->section1_heading ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label>Description</label>
                                <textarea name="section1_desc" class="form-control">{{ old('section1_desc', $homePage->section1_desc ?? '') }}</textarea>
                            </div>
                            <div class="col-md-3">
                                <label>Button Text</label>
                                <input type="text" name="section1_btn_text" class="form-control" value="{{ old('section1_btn_text', $homePage->section1_btn_text ?? '') }}">
                                <label class="mt-2">Button URL</label>
                                <input type="text" name="section1_url" class="form-control" value="{{ old('section1_url', $homePage->section1_url ?? '') }}">
                            </div>
                        </div>

                        <hr>
                        <h5 class="mb-3">Section 2</h5>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label>Tag</label>
                                <input type="text" name="section2_tag" class="form-control" value="{{ old('section2_tag', $homePage->section2_tag ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label>Heading</label>
                                <input type="text" name="section2_heading" class="form-control" value="{{ old('section2_heading', $homePage->section2_heading ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label>Description</label>
                                <textarea name="section2_desc" class="form-control">{{ old('section2_desc', $homePage->section2_desc ?? '') }}</textarea>
                            </div>
                            <div class="col-md-3">
                                <label>Button Text</label>
                                <input type="text" name="section2_btn_text" class="form-control" value="{{ old('section2_btn_text', $homePage->section2_btn_text ?? '') }}">
                                <label class="mt-2">Button URL</label>
                                <input type="text" name="section2_url" class="form-control" value="{{ old('section2_url', $homePage->section2_url ?? '') }}">
                            </div>
                        </div>

                        <hr>
                        <h5 class="mb-3">Success Stories</h5>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>Tag</label>
                                <input type="text" name="success_stories_tag" class="form-control" value="{{ old('success_stories_tag', $homePage->success_stories_tag ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label>Heading</label>
                                <input type="text" name="success_stories_heading" class="form-control" value="{{ old('success_stories_heading', $homePage->success_stories_heading ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label>Description</label>
                                <textarea name="success_stories_desc" class="form-control">{{ old('success_stories_desc', $homePage->success_stories_desc ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-success px-4">
                                <i class="fa fa-save me-1"></i> {{ $action === 'edit' ? 'Update' : 'Save' }}
                            </button>
                        </div>
                    </form>
                @else
                    @if($homePageRecord)
                        <div class="table-responsive">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Services Heading</th>
                                        <th>Section1 Heading</th>
                                        <th>Section2 Heading</th>
                                        <th>Status</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $homePageRecord->id }}</td>
                                        <td>{{ $homePageRecord->services_heading }}</td>
                                        <td>{{ $homePageRecord->section1_heading }}</td>
                                        <td>{{ $homePageRecord->section2_heading }}</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        {{-- </td>
                                        <td>
                                            <a href="{{ route('admin.homepage', ['action' => 'edit', 'id' => $homePageRecord->id]) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.homepage.delete', $homePageRecord->id) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-center py-4 text-muted"><em>No home page content found.</em></p>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
