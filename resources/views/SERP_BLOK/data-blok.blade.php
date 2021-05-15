@extends('HalamanDepan.beranda')

@section('title','Data Blok')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-blok')}}" class="btn btn-success btn-sm">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="#example2" class="table table-bordered table-striped myTable">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA BLOK</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($blok as $e=>$item)
                <tr>
                    <td>{{$e+1}}</td>                  
                    <td>{{$item->serp_blok_name}}</td>
                    <td>
                      <a href="{{route('edit-blok',$item->serp_blok_id)}}"><i class="fas fa-edit"></i></a> 
                      |
                      <a href="{{route('delete-blok',$item->serp_blok_id)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
</div>
</div>
@endsection



 
