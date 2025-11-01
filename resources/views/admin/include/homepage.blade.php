@if ($action == 'add')
    @include('admin.include.homepage.add')
@elseif ($action == 'edit')
    @include('admin.include.homepage.edit')
@else
    @include('admin.include.homepage.list')
@endif