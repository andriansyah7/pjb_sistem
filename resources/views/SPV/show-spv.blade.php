@extends('HalamanDepan.beranda')

@section('title','Detail Evaluate ECP From Supervisor')

@section('container')
 
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ECP NO: {{$spv->ecpnomor}}</h5>
       <p> <h6 class="card-text">Disetujui: {{$spv->keputusan_spv}}</h6></p>
        <p class="card-text">Alasan: {{$spv->alasan_spv}}</p>
        <p class="card-text">Nama Supervisor: {{$spv->nama_spv}}</p>
        <p class="card-text">Tanggal Disetujui: {{$spv->created_at}}</p>
        


        <a href="{{route('data-spv')}}" class="btn btn-primary btn-sm">Back</a>
      </div>
    </div>
  </div>
  </div>
  @endsection