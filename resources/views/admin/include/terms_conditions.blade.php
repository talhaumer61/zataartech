@if ($action == 'add')
    @include('admin.include.tac.add')
@elseif ($action == 'edit')
    @include('admin.include.tac.edit')
@else
    @include('admin.include.tac.list')
@endif