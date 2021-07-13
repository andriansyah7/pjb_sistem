@extends('HalamanDepan.beranda')

@section('title','Data History Main Equipment')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">   
      <div class="row">
            <div class="form-group col-mr-4">
             <table class="table table-borderless table-sm">
                <tbody>
            <form action="{{route('search-serp_history')}}" method="GET">
            @csrf
                <tr>
              <th><label>Lihat Top 10% <br>
              Berdasarkan PIC :</label></th>
                
            <th>  <select name="serp_pic_id"  class="form-control select2">
                @foreach ($pic as $item)
                  <option value="{{$item->serp_pic_id}}"> {{$item->serp_pic_name}} </option>
                @endforeach
              </select></th>
              
              <th width="10px"><button type="submit" class="btn btn-sm btn-primary">Search</button></th>
                </tr>
            </form>
                </tbody>
             </table>
              
             
            </div>
      </div>
      </div>

      		<!-- Import Excel -->
		
            <!-- /.card-header -->
            <div text-sm class="card-body">
              <div class="table-responsive">
              <table id="#example2" class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
                  <th width="10px">NO</th>
                  <th width="10px">TAHUN</th>
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
                
                </tr>
                </thead>
                <tbody>

                @foreach ($serp_main as $e=>$item)
                <tr>                 
                    <td>{{ $loop->iteration}}</td> 
                    <td>{{$item->history_serp_tahun}}</td>
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
                   
                </tr>
                @endforeach
                </tbody>
              </table>
              </div>
            </div>
</div>
</div>
@endsection



 


               