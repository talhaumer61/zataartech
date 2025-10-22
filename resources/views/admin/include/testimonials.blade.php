@if ($action == 'add')
    @include('admin.include.testimonials.add')
@elseif ($action == 'edit')
    @include('admin.include.testimonials.edit')
@else
    @include('admin.include.testimonials.list')
@endif