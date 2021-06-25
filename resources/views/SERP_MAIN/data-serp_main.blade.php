@extends('HalamanDepan.beranda')

@section('title','Data Main Equipment')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">   
      <div class="form-group">
            <div class="form-group">
            <form action="{{route('search-serp_main')}}" method="GET">
            @csrf
              <label for="">PIC</label>
              <select name="serp_pic_id" id="" class="form-control">
                @foreach ($pic as $item)
                  <option value="{{$item->serp_pic_id}}"> {{$item->serp_pic_name}} </option>
                @endforeach
              </select>
              <div class="form-group">
              <button type="submit" class="btn btn-primary mb-1">Search</button>
              </div>
            </div>  
            </form>
          </div>
          <div class ="card-tools inlane m-2">
            <a href="{{route('ekspor-serp_main')}}" class="btn btn-info btn-sm">Ekspor Data <i class="fas fa-download"></i></a>
            <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#importExcel">Impor Data <i class="fas fa-upload"></i></a>
            <a href="{{route('create-serp_main')}}" class="btn btn-success btn-sm">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
      </div>

      		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="{{route('impor-serp_main')}}" enctype="multipart/form-data">
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
            <div text-sm class="card-body">
              <div class="table-responsive">
              <table id="#example2" class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
                  <th width="10px">KKS</th>
                  <th width="200px">NAMA EQUIPMENT</th>
                  <th width="200px">NAMA SYSTEM</th>
                  <th width="1px">PT</th>
                  <th width="1px">OC</th>
                  <th width="1px">PQ</th>
                  <th width="1px">SF</th>
                  <th width="1px">RT</th>
                  <th width="1px">RC</th>
                  <th width="1px">PE</th>
                  <th width="2px">SCR</th>
                  <th width="1px">OCR</th>
                  <th width="2px">ACR</th>
                  <th width="1px">AFPF</th>
                  <th width="2px">MPI</th>
                  <th >PIC</th>
                  <th >KETERANGAN</th>
                  <th >AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($serp_main as $e=>$item)
                <tr>                 
                    <td>{{$item->serp_main_equipment_id}}</td>
                    <td>{{$item->serp_main_equipment_name}}</td>
                    <td>{{$item->system->serp_system_name}}</td>
                    <td>{{$item->PT}}</td>
                    <td>{{$item->OC}}</td>
                    <td>{{$item->PQ}}</td>
                    <td>{{$item->SF}}</td>
                    <td>{{$item->RT}}</td>
                    <td>{{$item->RC}}</td>
                    <td>{{$item->PE}}</td>
                    <td>{{$item->SCR}}</td>
                    <td>{{$item->OCR}}</td>
                    <td>{{$item->ACR}}</td>
                    <td>{{$item->AFPF}}</td>
                    <td>{{$item->MPI}}</td>
                    <td>{{$item->pic->serp_pic_name}}</td>
                    <td>{{$item->serp_main_equipment_keterangan}}</td>
                    <td>
                      <a href="{{route('edit-serp_main',$item->serp_main_equipment_id)}}" class="badge badge-light"><i class="fas fa-edit" style="color:blue"></i></a> 
                     
                      <a href="{{route('delete-serp_main',$item->serp_main_equipment_id)}}" class="badge badge-light"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
              </div>
            </div>
</div>
</div>
@endsection



 


               