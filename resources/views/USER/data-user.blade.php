@extends('HalamanDepan.beranda')

@section('title','Data User')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-user')}}" class="btn btn-success btn-sm">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-striped myTable">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NID</th>
                  <th>NAMA</th>
                  <th>JABATAN</th>
                  <th>FUNGSI</th>
                  <th>BIDANG</th>
                  <th>ROLE</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($user as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>                  
                    <td>{{$item->user_nid}}</td>
                    <td>{{$item->user_name}}</td>
                    <td>{{$item->jabatan->jabatan_name}}</td>
                    <td>{{$item->fungsi->fungsi_name}}</td>
                    <td>{{$item->unit->unit_name}}</td>
                    <td>{{$item->roles->role_name}}</td>
                    <td>
                      
                      @if($item->role_id==1)
                      <a href="{{route('edit-user',$item->user_nid)}}"><i class="fas fa-edit"></i></a> 
                      |
                      <a><i onclick="return confirm('Super User Tidak Bisa Dihapus')" class="fas fa-trash-alt" style="color:red"></i></a>
                      @else
                      <a href="{{route('edit-user',$item->user_nid)}}"><i class="fas fa-edit"></i></a> 
                      |
                      <a href="{{route('delete-user',$item->user_nid)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
</div>
</div>
@endsection

<script src="{{asset('adminLTE')}}/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
    });
</script>



 
