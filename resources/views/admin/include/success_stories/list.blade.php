<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Success Stories</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Success Stories</li>
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
                        <div class="list-product-header mb-3">
                            <a class="btn btn-primary" href="/portal/success-stories/add">
                                <i class="fa fa-plus"></i> Add Success Story
                            </a>
                        </div>

                        <div class="list-service">
                            <table class="table align-middle" id="story-list">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 5%; text-align:center;">#</th>
                                        <th style="width: 55%;">Story</th>
                                        <th style="width: 15%;">Status</th>
                                        <th style="width: 20%; text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($stories as $index => $story)
                                        <tr class="story-item">
                                            <!-- Serial -->
                                            <td class="text-muted text-center">{{ $index + 1 }}</td>

                                            <!-- Combined Photo + Title -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        @if($story->photo)
                                                            <img src="{{ asset($story->photo) }}" 
                                                                alt="{{ $story->title }}" 
                                                                width="60" height="60" 
                                                                class="rounded shadow-sm border">
                                                        @else
                                                            <img src="{{ asset('admin/images/placeholder.png') }}" 
                                                                width="60" height="60" 
                                                                class="rounded shadow-sm border" 
                                                                alt="no image">
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">{{ $story->title }}</h6>
                                                        <small class="text-muted">
                                                            {!! $story->problem ? Str::limit(strip_tags($story->problem), 70) : 'No summary available.' !!}
                                                        </small>

                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Status -->
                                            <td>
                                                @if($story->status)
                                                    <span class="badge bg-success px-3 py-2">Active</span>
                                                @else
                                                    <span class="badge bg-danger px-3 py-2">Inactive</span>
                                                @endif
                                            </td>

                                            <!-- Actions -->
                                            <td class="text-center">
                                                <a href="{{ route('admin.success-stories',['action' => 'edit', 'href' => $story->href]) }}" 
                                                    class="btn btn-outline-primary btn-sm me-2" title="Edit">
                                                    <i class="bx bx-edit-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.success-stories.delete', $story->id) }}" 
                                                    method="POST" 
                                                    onsubmit="return confirm('Are you sure you want to delete this story?')" 
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-4">
                                                <em>No success stories found.</em>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
