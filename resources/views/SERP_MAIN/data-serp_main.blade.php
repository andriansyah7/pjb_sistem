@extends('HalamanDepan.beranda')

@section('title','Data Main Equipment')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-serp_main')}}" class="btn btn-success btn-sm">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="#example2" class="table table-bordered table-striped myTable">
                <thead>
                <tr>
                  <th>KKS</th>
                  <th>NAMA EQUIPMENT</th>
                  <th>NAMA SYSTEM</th>
                  <th>OC</th>
                  <th>PT</th>
                  <th>PQ</th>
                  <th>SF</th>
                  <th>RC</th>
                  <th>PE</th>
                  <th>RT</th>
                  <th>SCR</th>
                  <th>OCR</th>
                  <th>ACR</th>
                  <th>AFPF</th>
                  <th>MPI</th>
                  <th>PIC</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($serp_main as $e=>$item)
                <tr>                 
                    <td>{{$item->serp_main_equipment_id}}</td>
                    <td>{{$item->serp_main_equipment_name}}</td>
                    <td>{{$item->system->serp_system_name}}</td>
                    <td>{{$item->OC}}</td>
                    <td>{{$item->PT}}</td>
                    <td>{{$item->PQ}}</td>
                    <td>{{$item->SF}}</td>
                    <td>{{$item->RC}}</td>
                    <td>{{$item->PE}}</td>
                    <td>{{$item->RT}}</td>
                    <td>{{$item->SCR}}</td>
                    <td>{{$item->OCR}}</td>
                    <td>{{$item->ACR}}</td>
                    <td>{{$item->AFPF}}</td>
                    <td>{{$item->MPI}}</td>
                    <td>{{$item->pic->serp_pic_name}}</td>
                    <td>{{$item->serp_main_equipment_keterangan}}</td>
                    <td>
                      <a href="{{route('edit-serp_main',$item->serp_main_equipment_id)}}"><i class="fas fa-edit"></i></a> 
                      |
                      <a href="{{route('delete-serp_main',$item->serp_main_equipment_id)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
</div>
</div>
@endsection



 


               