@extends('HalamanDepan.beranda')

@section('title','Data Disposisi Kajian Engineering')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      <a><b>Kajian Engineering yang perlu dihandle oleh : </b></a><a style="color:red"><b>{{$nama}} ({{$jumlah}})</b></a>   

      </div>
    
        
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
               
                  <th>#</th>
                  <th>NO KAJIAN</th>
                  <th>NAMA SPV</th>
                  <th>JUDUL</th>
                  <th>PROGRES</th>
                  <th>DIBUAT TANGGAL</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($staffso as $e=>$item)
                <tr>
                <td>{{ $loop->iteration}}</td>                    
                    <td>{{$item->kajian_no}}</td>
                    <td>{{$item->spv->user_name}}</td>
                    <td>{{$item->kajian_judul}}</td>
                    <td><i>{{$item->progres_kajian->progres_kajian_name}}</i></td>
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>

                    <td>
                    @php
                    $spv= $item->kajian_spv;
                       $kajian_no = str_replace('/','-',$item->kajian_no);
                    @endphp
                    <a href="{{route('show-kajian',$kajian_no)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i>Detail</a>
                   
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



 
