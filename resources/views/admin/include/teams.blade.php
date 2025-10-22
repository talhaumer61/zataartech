@if ($action == 'add')
    @include('admin.include.teams.add')
@elseif ($action == 'edit')
    @include('admin.include.teams.edit')
@else
    @include('admin.include.teams.list')
@endif