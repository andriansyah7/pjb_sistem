@extends('HalamanDepan.beranda')

@section('title','Detail Kajian Engineering')
@section('container')
 
<div class="content">
<div class="container-fluid">
<div class="row">
          <!-- left column -->
          <div class="col-md-6">

      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      <h5 class="card-title">No : {{$kajian->kajian_no}}</h5>      
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-15">
             <table class="table-sm table-noborder">
                <tbody>
                <tr>
                <th>No Kajian Engineering </th>
                <th>:</th>
                <th>{{$kajian->kajian_no}}</th>
                </tr>

                <tr>
                <th>Tanggal Pembuatan</th>
                <th>:</th>
                <th>{{date('d M Y H:i:s',strtotime($kajian->created_at))}}</th>
                </tr>

                <tr>
                <th>SPV SO</th>
                <th>:</th>
                <th>{{$kajian->spv->user_name}}</th>
                </tr>
                
               
                <tr>
                <th>Requester</th>
                <th>:</th>
                <th>{{$kajian->requester->user_name}}</th>
                </tr>
               
                @php
                       $pihak = str_replace('"','',$kajian->kajian_pihak_terlibat);
                       $terlibat = str_replace(',',', ',$pihak);
                       $a = str_replace('[',' ',$terlibat);
                       $b = str_replace(']',' ',$a);
                    @endphp
                <tr>
                <th>Pihak Terlibat</th>
                <th>:</th>
                <th>{{$b}}</th>
                </tr>

                <tr>
                <th>Judul Kajian</th>
                <th>:</th>
                <td>{{$kajian->kajian_judul}}</td>
                </tr>

                <tr>
                <th>Deskripsi Kajian</th>
                <th>:</th>
                <td>{{$kajian->kajian_deskripsi}}</td>
                </tr>
               

                <tr>
                <th>Sumber Informasi</th>
                <th>:</th>
                <th> <a href="{{asset($kajian->kajian_sumber_informasi) }}" class="badge badge-info" download="">Download File      <i class="fas fa-download"></i></a></th>
                </tr>

                <tr>
                <th>Didisposisikan ke STAFF SO</th>
                <th>:</th>
                <th>{{$kajian->disposisi_staffso->user_name}}</th>
                </tr>
                
                </tbody>
             </table>

             
             <div>
                    @php
                       $spv= $kajian->kajian_spv; 
                       $kajian_no = str_replace('/','-',$kajian->kajian_no);
                    @endphp
                    @if ((auth()->user()->user_nid == $spv) && ($kajian->progres_kajian_id=='1'))
                    <a href="{{route('progres-kajianbyspv',$kajian_no)}}" class="badge badge-dark"><i class="fas fa-file-signature">Didisposisikan ke STAFF SO</i></a>
                    @endif
                </div>
                  
                  
            
             </div>
            </div>
             </div>
</div>
</div>
</div>
</div>
</div>

@endsection



 
