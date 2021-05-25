@extends('HalamanDepan.beranda')

@section('title','Data ECP')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      @if (auth()->user()->role_id=='5')
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-ecp')}}" class="btn btn-success btn-sm">Buat ECP <i class="fas fa-plus-square"></i></a>
         </div>
         @endif
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="#example2" class="table table-bordered table-striped myTable">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NO ECP</th>
                  <th>NAMA</th>
                  <th>DESKRIPSI</th>
                  <th>APPROVAL1</th>
                  <th>APPROVAL2</th>
                  <th>FILE PENDUKUNG</th>
                  <th>TANGGAL PENGAJUAN</th>
                  <th>PROGRES</th>
                  <th width="260px">AKSI</th>
                </tr>
                </thead>
                <tbody>
                <!-- git config --global user.email "you@example.com"
  git config --global user.name "Your Name" -->
                @foreach ($ecp as $item)
                <tr>
                <td>{{ $loop->iteration}}</td>                   
                    <td>{{$item->ecp_no}}</td>
                    <td>{{$item->user->user_name}}</td>
                    <td>{{$item->ecp_deskripsi}}</td>
                    <td>{{$item->approval1->user_name}}</td>
                    <td>{{$item->approval2->user_name}}</td>
                    <td> <p> <a href="{{asset($item->ecp_file_pendukung) }}" class="btn btn-xs btn-info" download=""><i class="fas fa-download"></i>  Download File </a></p></td>
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
                    <td><i>{{$item->progres->progres_name}}</i></td>
                    <td>
                    @php
                       $ecp_no = str_replace('/','-',$item->ecp_no);
                    @endphp
                    <a href="{{route('show-ecp',$ecp_no)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i>Detail</a>
                    @if (auth()->user()->role_id=='4')
                    <a href="{{route('progres-notulen',$ecp_no)}}" class="badge badge-light"><i class="fas fa-file-signature" style="color:darkblue">+Notulen</i></a>
                    <a href="{{route('progres-tindaklanjut',$ecp_no)}}" class="badge badge-light"><i class="fas fa-file-export" style="color:tomato"></i>+Tindak Lanjut</a>

                    @endif
                    @if ($item->user_nid==auth()->user()->user_nid)
                      <a href="{{route('edit-ecp',$ecp_no)}}" class="badge badge-light"><i class="fas fa-edit" style="color:blue"></i>Edit</a> 
            
                      <a href="{{route('delete-ecp',$ecp_no)}}" class="badge badge-light"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
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



 
