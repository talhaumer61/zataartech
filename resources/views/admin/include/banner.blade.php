@if ($action == 'add')
    @include('admin.include.banner.add')
@elseif ($action == 'edit')
    @include('admin.include.banner.edit')
@else
    @include('admin.include.banner.list')
@endif