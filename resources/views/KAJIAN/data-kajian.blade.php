@extends('HalamanDepan.beranda')

@section('title','Data Kajian Engineering')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      @if ((auth()->user()->role_id=='3') && (auth()->user()->unit_id=='1'))
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-kajian')}}" class="btn btn-success btn-sm">Buat Kajian <i class="fas fa-plus-square"></i></a>
         </div>
         @endif
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
              <table id="#example2" class="table table-bordered table-striped myTable table-sm ">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NO KAJIAN</th>
                 
                  <th>JUDUL KAJIAN</th>
                  
                  <th>TANGGAL IDENTIFIKASI AWAL</th>
                  <th>PROGRES</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
               
                @foreach ($kajian as $item)
                <tr>
                <td>{{ $loop->iteration}}</td>                   
                    <td>{{$item->kajian_no}}</td>
                   
                    <td>{{$item->kajian_judul}}</td>  
                   
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
                    <td><i>{{$item->progres_kajian->progres_kajian_name}}</i></td>
                    <td>
                    @php
                    $spv= $item->kajian_spv;
                       $kajian_no = str_replace('/','-',$item->kajian_no);
                    @endphp
                    <a href="{{route('show-kajian',$kajian_no)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i>Detail</a>
                    @if ((auth()->user()->user_nid == $spv) && ($item->progres_kajian_id=='1')) 
                    <a href="{{route('delete-kajian',$kajian_no)}}" class="badge badge-light"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
                    @endif
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



 
