@extends('HalamanDepan.beranda')

@section('title','Detail Kajian Engineering')
@section('container')
 
<div class="content">
<div class="container-fluid">
<div class="row">
          <!-- left column -->
          <div class="col-md-13">

      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      <h5 class="card-title">Identifikasi Awal</h5>
      @php
                       $spv= $kajian->kajian_spv; 
                       $kajian_no = str_replace('/','-',$kajian->kajian_no);
                       $staf = $kajian->kajian_disposisi_staff_so;
                    @endphp  
    
    @if ((auth()->user()->user_nid == $staf) && ($kajian->progres_kajian_id=='2'))      
      <a href="{{route('progres-kajianbystaffso',$kajian_no)}}" style="float:right"class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>&nbsp Dokumen Kajian </a> 
   @endif 
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
                    <a href="{{route('progres-kajianbyspv',$kajian_no)}}" class="badge badge-dark"><i class="fas fa-file-signature">Disposisikan ke STAFF SO</i></a>
                    @endif
                </div>
                  
                  
            
             </div>
            </div>
             </div>
</div>

<div class ="card card-info card-outline">  
      <div class ="card-header">     
         @foreach ($kajian_analisa as $item) 
      <h5 class="card-title"> No : {{$kajian->kajian_no}} <br> Nama Pembuat Dokumen Kajian : {{$item->staff->user_name}} <br>  <b> Judul : {{$item->kajian_judul}} </b>     </h5>
     
   
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-15">
             <table class="table-sm table-noborder">
                <tbody>
               

                   <embed src="{{asset($item->kajian_file)}}" type="application/pdf"  width="1000" height="600"></embed>
                
              
                
               
                @endforeach
                </tbody>
             </table>
             </div>
            </div>
         </div>
      </div>

      <div class ="card card-info card-outline">  
      <div class ="card-header">     
         <h5 class="card-title">Approval Supervisor SO </h5>
         @php
         $spv= $kajian->kajian_spv; 
         $kajian_no = str_replace('/','-',$kajian->kajian_no);
         
         @endphp  
         
         @if ((auth()->user()->user_nid == $spv) && ($kajian->progres_kajian_id=='3'))  
         <a href="{{route('progres-approvalspvso',$kajian_no)}}" style="float:right"class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>&nbsp Approval Kajian </a> 
         @endif
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <div class="row">
            <div class="col-15">
               <table class="table-sm table-noborder">
                @foreach ($approval_spv as $item) 
                <tbody>
                <tr>
                <th >No Kajian </th>
                <th>:</th>
                <th>{{$item->kajian_no}}</th>
                </tr>
                <tr>
                
                <th width="120px">Tanggal Approval </th>
                <th>:</th>
                <th>{{date('d M Y H:i:s',strtotime($item->created_at))}}</th>
                </tr>
                <tr>
                <th>Nama Supervisor</th>
                <th>:</th>
                <th>{{$item->user->user_name}}</th>
                </tr>
                <tr>
                <th>Status</th>
                <th>:</th>
                @if($item->status_kajian_id == 1)
                    <td> <label class="badge badge-success">{{$item->status_kajian->status_kajian_name}} </label></td>          
                    @elseif($item->status_ecp_id == 2)
                    <td> <label class="badge badge-danger">{{$item->status_kajian->status_kajian_name}} </label></td>
                    @endif
                </tr>
                
                <tr>
                <th>Alasan</th>
                <th>:</th>
                <td>{{$item->spv_approval_alasan}}</td>
                </tr>
              
                @endforeach
                </tbody>
             </table>
             </div>
            </div>
         </div>
      </div>

      <div class ="card card-info card-outline">  
      <div class ="card-header">     
         <h5 class="card-title">Approval Manager Engineering & Quality Assurance </h5>
         @php   
         $kajian_no = str_replace('/','-',$kajian->kajian_no);    
         @endphp  
         
         @if ((auth()->user()->fungsi_id=='4') && ($kajian->progres_kajian_id=='4'))  
         <a href="{{route('progres-approvalmeqa',$kajian_no)}}" style="float:right"class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>&nbsp Approval Kajian </a> 
         @endif
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <div class="row">
            <div class="col-15">
               <table class="table-sm table-noborder">
                  <tbody>
                     @foreach ($approval_meqa as $item) 
                <tr>
                <th >No Kajian </th>
                <th>:</th>
                <th>{{$item->kajian_no}}</th>
                </tr>
                <tr>
                
                <th width="120px">Tanggal Approval </th>
                <th>:</th>
                <th>{{date('d M Y H:i:s',strtotime($item->created_at))}}</th>
                </tr>
                <tr>
                <th>Nama Manager EQA</th>
                <th>:</th>
                <th>{{$item->user->user_name}}</th>
                </tr>
                <tr>
                <th>Status</th>
                <th>:</th>
                @if($item->status_kajian_id == 1)
                    <td> <label class="badge badge-success">{{$item->status_kajian->status_kajian_name}} </label></td>          
                    @elseif($item->status_ecp_id == 2)
                    <td> <label class="badge badge-danger">{{$item->status_kajian->status_kajian_name}} </label></td>
                    @endif
                </tr>
                
                <tr>
                <th>Alasan</th>
                <th>:</th>
                <td>{{$item->meqa_approval_alasan}}</td>
                </tr>
            
                @endforeach
                </tbody>
             </table>
             </div>
            </div>
         </div>
      </div>

</div>
</div>
</div>

@endsection



 
