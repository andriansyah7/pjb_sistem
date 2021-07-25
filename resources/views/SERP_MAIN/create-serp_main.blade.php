@extends('HalamanDepan.beranda')

@section('title','Tambah Data Main Equipment')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-serp_main')}}" method="post">
          @csrf
          <div class="row">

            <div class="form-group col-sm-7">
            <label>KKS</label>
              <input type="text" name="serp_main_equipment_id" class="form-control @error('serp_main_equipment_id') is-invalid @enderror" placeholder="Masukkan KKS">
              @error('serp_main_equipment_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-7">
            <label>Nama Equipment</label>
              <input type="text" name="serp_main_equipment_name" class="form-control @error('serp_main_equipment_name') is-invalid @enderror" placeholder="Masukkan Nama Main Equipment">
              @error('serp_main_equipment_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-5">
            <label>System</label>
              <select class="form-control select2 @error('serp_system_id') is-invalid @enderror"  name="serp_system_id" value="{{old('serp_system_id')}}">
                <option selected disabled>Pilih System-></option>
              @foreach($serp_system as $data)
                <option value="{{$data->serp_system_id}}">{{$data->unit->serp_unit_name}} - {{$data->serp_system_name}}</option>
               @endforeach
              </select>
              @error('serp_system_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">

            <div class="form-group col-sm-1">
            <label>PT &nbsp </label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringPT" style="color:darkgoldenrod"></i>
              <input type="text" name="PT" class="form-control @error('PT') is-invalid @enderror" placeholder="Nilai PT">
              @error('PT') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>OC &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringOC" style="color:darkgoldenrod"></i>
              <input type="text" name="OC" class="form-control @error('OC') is-invalid @enderror" placeholder="Nilai OC">
              @error('OC') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>PQ &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringPQ" style="color:darkgoldenrod"></i>
              <input type="text" name="PQ" class="form-control @error('PQ') is-invalid @enderror" placeholder="Nilai PQ">
              @error('PQ') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>SF &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringSF" style="color:darkgoldenrod"></i>
              <input type="text" name="SF" class="form-control @error('SF') is-invalid @enderror" placeholder="Nilai SF">
              @error('SF') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>RT &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringRT" style="color:darkgoldenrod"></i>
              <input type="text" name="RT" class="form-control @error('RT') is-invalid @enderror" placeholder="Nilai RT">
              @error('RT') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            
            <div class="form-group col-sm-1">
            <label>RC &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringRC" style="color:darkgoldenrod"></i>
              <input type="text" name="RC" class="form-control @error('RC') is-invalid @enderror" placeholder="Nilai RC">
              @error('RC') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>PE &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringPE" style="color:darkgoldenrod"></i>
              <input type="text" name="PE" class="form-control @error('PE') is-invalid @enderror" placeholder="Nilai PE">
              @error('PE') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>


            <div class="form-group col-sm-1">
            <label>OCR &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringOCR" style="color:darkgoldenrod"></i>
              <input type="text" name="OCR" class="form-control @error('OCR') is-invalid @enderror" placeholder="Nilai OCR">
              @error('OCR') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>AFPF &nbsp</label> <i class="fas fa-table"data-toggle="modal" data-target="#scoringAFPF" style="color:darkgoldenrod"></i>
              <input type="text" name="AFPF" class="form-control @error('OCR') is-invalid @enderror" placeholder="Nilai AFPF">
              @error('AFPF') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-4">
            <label>PIC</label>
              <select class="form-control select2 @error('serp_pic_ id') is-invalid @enderror"  name="serp_pic_id" value="{{old('serp_pic_id')}}">
                <option selected disabled>Pilih Pic-></option>
              @foreach($serp_pic as $data)
                <option value="{{$data->serp_pic_id}}">{{$data->serp_pic_name}}</option>
               @endforeach
              </select>
              @error('serp_pic_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-7">
            <label>Keterangan</label>
              <input type="text" name="serp_main_equipment_keterangan" class="form-control @error('serp_main_equipment_keterangan') is-invalid @enderror" placeholder="Masukkan Keterangan Main Equipment">
              @error('serp_main_equipment_keterangan') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>
            
    
            

            <div class="row">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
    <!-- /.content -->  
      </div>
    </div>


    		<!-- TABEL SCORING -->
		<div class="modal fade" id="scoringPT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring PT</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
            <img src="{{asset('adminLTE')}}/dist/img/skoring/PT.png" height="410px" weight="100px" >
						</div>
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringOC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring OC</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body"> 
            <img src="{{asset('adminLTE')}}/dist/img/skoring/OC.png" height="410px" weight="100px" >
						</div>
						
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringPQ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring PQ</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
             <img src="{{asset('adminLTE')}}/dist/img/skoring/PQ.png" height="210px" weight="200px" >
						</div>			
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringSF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring SF</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
              <img src="{{asset('adminLTE')}}/dist/img/skoring/SF.png" height="210px" weight="100px">
              <br><a> H = High <br> L = Low </a>
						</div>
						
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringRT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring RT</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
            <img src="{{asset('adminLTE')}}/dist/img/skoring/RT.png" height="210px" weight="100px" > 
						</div>
						
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringRC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring RC</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
            <img src="{{asset('adminLTE')}}/dist/img/skoring/RC.png" height="360px" weight="100px" > 
						</div>
						
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringPE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring PE</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
            <img src="{{asset('adminLTE')}}/dist/img/skoring/PE.png" height="210px" weight="100px" > 
						</div>
						
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringOCR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring OCR</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
            <img src="{{asset('adminLTE')}}/dist/img/skoring/OCR.png" height="400px" weight="100px" > 
						</div>
						
					</div>
				</form>
			</div>
		</div>

    <div class="modal fade" id="scoringAFPF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><b>Tabel Skoring AFPF</b></h5> <i class="fas fa-times" data-dismiss="modal" style="color:red"></i>
						</div>
						<div class="modal-body">
            <img src="{{asset('adminLTE')}}/dist/img/skoring/AFPF.png" height="400px" weight="100px" > 
						</div>
						
					</div>
				</form>
			</div>
		</div>
        
  @endsection
  

