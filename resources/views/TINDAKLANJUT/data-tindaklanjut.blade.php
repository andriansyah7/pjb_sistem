@extends('HalamanDepan.beranda')

@section('title','Data Tindak Lanjut ECP')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
                     <th>#</th>
                     
                    <th>NO ECP</th>
                    <th>NOTULIS</th>
                    <th>DESKRIPSI</th>
                    <th>FILE TERKAIT</th>
                    <th>TANGGAL DIBUAT</th>
                    <th>DEADLINE MONITORING</th>
                    <th width="200px">AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($tindaklanjut as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>                    
                    <td>{{$item->ecp->ecp_no}}</td>
                    <td>{{$item->notulis->user_name}}</td>
                    <td>{{$item->tindaklanjut_deskripsi}}</td>
                    <td> <p> <a href="{{asset($item->tindaklanjut_file_terkait) }}" class="badge  badge-info" download=""><i class="fas fa-download"></i>  Download File </a></p></td>

                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
                    <td>{{date('d M Y',strtotime($item->updated_at))}}</td>
                    <td>
                    @if (auth()->user()->role_id=="4")
                      <a href="{{route('show-tindaklanjut',$item->tindaklanjut_id)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i>Detail</a>
                       |
                      <a href="{{route('edit-tindaklanjut',$item->tindaklanjut_id)}}" class="badge badge-light"><i class="fas fa-file" style="color: blue"></i> Edit</a>
                       | 
               
                      <a href="{{route('delete-tindaklanjut',$item->tindaklanjut_id)}}" class="badge badge-light"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
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



 





