<div class="page-body">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4>{{ isset($team) ? 'Edit Term ' : 'Add Term ' }}</h4>
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
                            <a href="{{ route('admin.terms') }}">Terms and Conditions</a>
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
                <form action="{{ isset($term) ? route('admin.terms.update',$term->id) : route('admin.terms.store') }}"
                    method="POST">
                    @csrf

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title',$term->title ?? '') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status',$term->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status',$term->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Content *</label>
                            <textarea name="content" class="form-control" rows="6">
                                {{ old('content',$term->content ?? '') }}
                            </textarea>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.terms') }}" class="btn btn-outline-secondary">Back</a>
                        <button class="btn btn-primary">
                            {{ isset($term) ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
