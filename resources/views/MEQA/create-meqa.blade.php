@extends('HalamanDepan.beranda')

@section('title','Approval MEQA')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-meqa')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-7">
          <div class="form-group">
            <label>No ECP</label>
              <select class="form-control select2 @error('ecp_no') is-invalid @enderror" id="ecp_no" name="ecp_no" value="{{old('ecp_no')}}">
                <option selected disabled>Pilih ECP</option>
              @foreach($ecpapproval as $ecpapproval1)
                <option value="{{$ecpapproval1->ecp_no}}">{{$ecpapproval1->ecp_no}} : {{$ecpapproval1->ecp_deskripsi}} -> Diajukan Oleh {{$ecpapproval1->user->user_name}}</option>
              @endforeach
              </select>
              @error('ecpapproval1') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>

              <div class="form-group">
              <table class="table align-middle table-sm table-borderless ">
              <thead>
              <tr>
              <th width="3px">Drawings:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
              </thead>
              <tbody>
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('drawings') is-invalid @enderror"  name="drawings1" value="{{old('drawings1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('drawings') is-invalid @enderror"  name="drawings2" value="{{old('drawings2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="drawings3" value="{{old('drawings3')}}">
                </td>
                </tr>
               <tr> <td></td></tr>
              <tr>
              <th width="3px">Operating Manual:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
              
              <tr>
              <th></th>
               <td> <select class="form-control-sm select2 @error('operating_manual') is-invalid @enderror"  name="operating_manual1" value="{{old('operating_manual1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('operating_manual') is-invalid @enderror"  name="operating_manual2" value="{{old('operating_manual2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="operating_manual3" value="{{old('operating_manual3')}}">
                </td>
                </tr>
                
              
              <tr><td></td></tr>
              <tr>
              <th width="5px">   SOP:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
              
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('SOP') is-invalid @enderror"  name="SOP1" value="{{old('SOP1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('SOP') is-invalid @enderror"  name="SOP2" value="{{old('SOP2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="SOP3" value="{{old('SOP3')}}">
                </td>
                </tr>

                <tr><td></td></tr>
              <tr>
              <th width="3px">Maint. Manual:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
             
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('maint_manual') is-invalid @enderror"  name="maint_manual1" value="{{old('maint_manual1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('maint_manual') is-invalid @enderror"  name="maint_manual2" value="{{old('maint_manual2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option>  
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="maint_manual3" value="{{old('maint_manual3')}}">
                </td>
                </tr>

                <tr><td></td></tr>
              <tr>
              <th width="3px">Predictive Maint Schedules:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
             
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('predictive maint schedules') is-invalid @enderror"  name="predictive_maint_schedules1" value="{{old('predictive_maint_schedules1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('predictive maint schedules') is-invalid @enderror"  name="predictive_maint_schedules2" value="{{old('predictive_maint_schedules2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="predictive_maint_schedules3" value="{{old('predictive_maint_schedules3')}}">
                </td>
                </tr>

                <tr><td></td></tr>
              <tr>
              <th width="3px">Preventative Maint Schedules:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
             
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('preventative_maint_schedules') is-invalid @enderror"  name="preventative_maint_schedules1" value="{{old('preventative_maint_schedules1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('preventative_maint_schedules') is-invalid @enderror"  name="preventative_maint_schedules2" value="{{old('preventative_maint_schedules2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="preventative_maint_schedules3" value="{{old('preventative_maint_schedules3')}}">
                </td>
                </tr>

                <tr><td></td></tr>
              <tr>
              <th width="3px">MIMS Equipment:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
             
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('MIMS_equipment') is-invalid @enderror"  name="MIMS_equipment1" value="{{old('MIMS_equipment1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('MIMS_equipment') is-invalid @enderror"  name="MIMS_equipment2" value="{{old('MIMS_equipment2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="MIMS_equipment3" value="{{old('MIMS_equipment3')}}">
                </td>
                </tr>

                <tr><td></td></tr>
              <tr>
              <th width="3px">Process Control System:</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
             
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('process_control_system ') is-invalid @enderror"  name="process_control_system1" value="{{old('process_control_system1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('process_control_system ') is-invalid @enderror"  name="process_control_system2" value="{{old('process_control_system2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="process_control_system3" value="{{old('process_control_system3')}}">
                </td>
                </tr>

                
                <tr><td></td></tr>
              <tr>
              <th width="3px">Business Process</th>
              <th>Dibutuhkan :</th>
              <th>Lengkap :
              <th>Nama :</th>
              </tr>
             
              <tr>
              <td></td>
               <td> <select class="form-control-sm select2 @error('business_process') is-invalid @enderror"  name="business_process1" value="{{old('business_process1')}}">
                <option selected disabled><-Dibutuhkan-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>

                <td> <select class="form-control-sm select2 @error('business_process') is-invalid @enderror"  name="business_process2" value="{{old('business_process2')}}">
                <option selected disabled><-Lengkap-></option> 
                <option value="YA">YA</option> 
                <option value="TIDAK">TIDAK</option> 
                </select>
                </td>
                <td>
                <input type="text" class="form-control-sm" name="business_process3" value="{{old('business_process3')}}">
                </td>
                </tr>

                </tbody>
                </table>
              </div>

          </div>

          <div class="col-md-3">
              <div class="form-group">
                <label for="user_nid">Nama MEQA</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="user_nid" name="user_nid" value="{{old('user_nid')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
              
                <div class="form-group">
                
            <label>Status ECP </label>
              <select class="form-control select2 @error('status_ecp_id') is-invalid @enderror" id="status_ecp_id" name="status_ecp_id" value="{{old('status_ecp_id')}}">
                <option selected disabled><-Status ECP-></option>
              @foreach($status as $item)
                <option value="{{$item->status_ecp_id}}">{{$item->status_ecp_name}}</option>
              @endforeach
              </select>
              @error('status_ecp_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>
              </div>


           
            </div>
        </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>

            


    <!-- /.content -->  
      </div>
    </div>
  @endsection
  <!-- /.content-wrapper -->

