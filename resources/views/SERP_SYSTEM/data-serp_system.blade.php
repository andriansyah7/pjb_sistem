@extends('HalamanDepan.beranda')

@section('title','Data System')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
          <div class ="card-tools inlane m-2">
          <a href="{{route('ekspor-serp_system')}}" class="btn btn-info btn-sm">Ekspor Data <i class="fas fa-download"></i></a>
          <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#importExcel">Impor Data <i class="fas fa-upload"></i></a>
            <a href="{{route('create-serp_system')}}" class="btn btn-success btn-sm">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
      </div>
      <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="{{route('impor-serp_system')}}" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Impor Data</h5>
						</div>
						<div class="modal-body">
 
							@csrf
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Impor</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="#example2" class="table table-sm table-bordered table-striped myTable">
                <thead>
                <tr>
                  <th  width="1px">NO</th>
                  <th>NAMA SYSTEM</th>
                  <th>NAMA UNIT</th>
                  <th width="150px">AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($serp_system as $e=>$item)
                <tr>
                    <td>{{$e+1}}</td>                                 
                    <td>{{$item->serp_system_name}}</td>
                    <td>{{$item->unit->serp_unit_name}}</td>                  
                    <td>
                      <a href="{{route('edit-serp_system',$item->serp_system_id)}}" class="badge badge-dark"><i class="fas fa-edit" style="color:blue"></i> Edit</a>  
                      |
                      <a href="{{route('delete-serp_system',$item->serp_system_id)}}" class="badge badge-dark"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
</div>
</div>
@endsection



 
