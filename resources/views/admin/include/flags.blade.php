@if ($action == 'add')
    @include('admin.include.flags.add')
@elseif ($action == 'edit')
    @include('admin.include.flags.edit')
@else
    @include('admin.include.flags.list')
@endif