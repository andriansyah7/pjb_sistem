@extends('HalamanDepan.beranda')

@section('title','Data Unit')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-serp_unit')}}" class="btn btn-success btn-sm">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="#example2" class="table table-bordered table-striped myTable">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA UNIT</th>
                  <th>NAMA BLOK</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($serp_unit as $e=>$item)
                <tr>
                    <td>{{$e+1}}</td>                                 
                    <td>{{$item->serp_unit_name}}</td>
                    <td>{{$item->blok->serp_blok_name}}</td>                  
                    <td>
                      <a href="{{route('edit-serp_unit',$item->serp_unit_id)}}" class="badge badge-dark"><i class="fas fa-edit" style="color:blue "></i> Edit</a> 
                      |
                      <a href="{{route('delete-serp_unit',$item->serp_unit_id)}}" class="badge badge-dark"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
</div>
</div>
@endsection



 
