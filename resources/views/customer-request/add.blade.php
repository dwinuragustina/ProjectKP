@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <h2 class="card-title">Input Customer Request</h2>
        <hr>
        <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input name="name" type="name" class="form-control @error('name') is-invalid @enderror" id="inputEmail3" placeholder="Nama Customer" value="{{ old('name') }}">
                @error('name')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                  <input name="phoneNumber" type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" id="inputEmail3" placeholder="08xxxxxxxxx" value="{{ old('phoneNumber') }}">
                  @error('phoneNumber')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Latlong</label>
                <div class="col-sm-10">
                  <input name="latlong" type="name" class="form-control @error('latlong') is-invalid @enderror" id="inputEmail3" placeholder="Latitude & Longitude" value="{{ old('latlong') }}">
                  @error('latlong')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input name="address" type="name" class="form-control @error('address') is-invalid @enderror" id="inputEmail3" placeholder="Alamat" value="{{ old('address') }}">
                  @error('address')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Service</label>
                <div class="col-sm-10">
                    <select name="service_id" class="form-select @error('service_id') is-invalid @enderror" aria-label="Default select example">
                      <option>-----Select the service-----</option>  
                      @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                      @endforeach
                    </select>
                    @error('service_id')
                      <div class="alert alert-danger mt-2">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
        </form>
    </div>
@endsection