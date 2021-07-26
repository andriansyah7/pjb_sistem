@extends('HalamanDepan.beranda')

@section('title','Data Top 10 %')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">   
 
      <div style="float:left" class ="card-tools inlane mb-2">
      <div  class="row">
            <div class="form-group col-mr-4">
             <table class="table table-borderless table-sm">
                <tbody>
            <form action="{{route('search-top_ten')}}" method="GET">
            @csrf
                <tr>
                <th>
                <a  class="btn btn-light btn-sm"><b>Filter by PIC &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : </b></a>
                </th>
                
            <th>  <select name="serp_pic_id"  class="form-control select2">
            <option value="A" {{($serp_pic_id=="A") ? 'selected':''}}>ALL</option>
            @foreach ($pic as $item)
                  <option value="{{$item->serp_pic_id}}"  {{($serp_pic_id==$item->serp_pic_id) ? 'selected':''}}> {{$item->serp_pic_name}} </option>
                @endforeach
              </select></th>
              
              <th width="10px"><button type="submit" class="btn btn-sm btn-primary">Search</button></th>
                </tr>

                <tr>
           <th><a href="{{route('insert-history')}}" onclick="return confirm('Yakin insert history?')" class="btn btn-danger btn-sm"><i class="fas fa-plus-circle"></i> Insert History SERP {{$tahun}} </a>
           </th>
                </tr>
            </form>
                </tbody>
             </table>
              
            </div>
            </div>
      </div>

      <div style="float:right" class ="card-tools inlane mb-2">

            <a href="{{route('ekspor-top_ten',$serp_pic_id)}}" class="btn btn-info btn-sm">Ekspor Data <i class="fas fa-download"></i></a>

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
 
							<label for="formFile" class="form-label">Pilih file excel</label><br><i style="color:red">*Pastikan hapus header sebelum import data <br>*Format tanggal YYYY-MM-DD HH:ii:ss (ex: 2021-07-13 17:52:31 ) </i></a> <br>
							<div class="form-group">
								<input class="form-control" type="file" id="formFile" name="file" required="required">
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
                  <th width="10px">NO</th>
                  <th width="10px">KKS</th>
                  <th width="200px">NAMA EQUIPMENT</th>
                  <th width="100px">NAMA UNIT</th>
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
                  <th >AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($serp_main as $e=>$item)
                <tr>                 
                    <td>{{ $loop->iteration}}</td> 
                    <td>{{$item->serp_main_equipment_id}}</td>
                    <td>{{$item->serp_main_equipment_name}}</td>
                    <td>{{$item->system->unit->serp_unit_name}}</td>
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
                    <td>
                      <a href="{{route('edit-serp_main',$item->serp_main_equipment_id)}}" class="badge badge-light"><i class="fas fa-edit" style="color:blue"></i>Edit</a> 
                      <a href="{{route('history-serp',$item->serp_main_equipment_id)}}" class="badge badge-light"><i class="fas fa-plus-circle" style="color:blue"></i>History</a> 
                     
                      <a href="{{route('delete-serp_main',$item->serp_main_equipment_id)}}" class="badge badge-light"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
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



 


               