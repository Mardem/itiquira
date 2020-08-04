<table id="tableDataTable" class="table table-striped table-bordered">
</table>

<form method="post" class="hidden" action="" id="deleteData">
    @csrf
    @method('DELETE')
</form>

{{ $slot }}