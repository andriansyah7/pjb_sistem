@extends('HalamanDepan.beranda')

@section('title','Data RCFA')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      @if (auth()->user()->role_id=='5')
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-rcfa')}}" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i> Dokumen RCFA </a>
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
                  <th>NO DOKUMEN RCFA</th>
                  <th>NAMA PEMBUAT DOKUMEN</th>
                  <th>DESKRIPSI</th>
                  <th>TANGGAL PEMBUATAN DOKUMEN </th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
               
                @foreach ($rcfa as $item)
                <tr>
                <td>{{ $loop->iteration}}</td>                   
                    <td>{{$item->rcfa_no}}</td>
                    <td>{{$item->user->user_name}}</td>
                    <td>{{$item->rcfa_deskripsi}}</td>  
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
                   
                    <td>
                    @php
                       $rcfa_no = str_replace('/','-',$item->rcfa_no);
                    @endphp
                    <a href="{{route('show-rcfa',$rcfa_no)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i>Detail</a> 
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



 
