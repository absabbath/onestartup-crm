@extends('layouts.admin.admin-layout')

@section('content')
 <div class="row"> 
  <div class="col-md-12">
    <div class="box">
      <div class="box-header dark">
        <h2>Listado de clientes</h2>
      </div>

        <div class="box-body">

          <div class='table-responsive'>
            <table class='table table-striped b-t b-b table-hover' id='registros'>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Teléfono</th>
                  <th>Landing</th>
                  <th>Origin</th>
                  <th>Fecha de registro</th>
                  <th>URL</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>

        <div class="dker p-a text-right">  
        </div>
        
    </div>
  </div>


</div>
@endsection

@push('scripts')
<script>
  $(function() {
    $('#registros').DataTable({
      processing: true,
      serverSide: true,
      pageLength: 25,
      ajax: '{{ route("crm.datatable") }}',
      columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'landing', name: 'landing'},
            {data: 'origin', name: 'origin'},
            {data: 'created_at', name: 'created_at'},
            {data: 'details_url', name: 'details_url'}
        ]
    });

  });
</script>
@endpush
