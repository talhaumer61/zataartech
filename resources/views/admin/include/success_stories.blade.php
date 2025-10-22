@if ($action == 'add')
    @include('admin.include.success_stories.add')
@elseif ($action == 'edit')
    @include('admin.include.success_stories.edit')
@else
    @include('admin.include.success_stories.list')
@endif