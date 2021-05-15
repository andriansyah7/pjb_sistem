@extends('HalamanDepan.beranda')

@section('title','Data Bidang Kerja')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-unit')}}" class="btn btn-success btn-sm">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="#example2" class="table table-bordered table-striped myTable">
                <thead>
                <tr>
                  <th>NO</th>
                  
                  <th>BIDANG KERJA</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($unit as $e=>$item)
                <tr>
                    <td>{{$e+1}}</td> 
                                    
                    <td>{{$item->unit_name}}</td>
                    <td>
                      <a href="{{route('edit-unit',$item->unit_id)}}"><i class="fas fa-edit"></i></a> 
                      |
                      <a href="{{route('delete-unit',$item->unit_id)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
</div>
</div>
@endsection



 
