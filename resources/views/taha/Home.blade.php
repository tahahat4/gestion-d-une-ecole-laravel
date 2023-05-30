@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Home')


@section('content')

<div class="row">
  <div class="col-lg-3 col-md-6 col-12 mb-3">
    <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/formateur.jpg')}}" alt="chart success" class="rounded">
              </div>
            </div>
                <span class="fw-semibold d-block mb-1">Formateur</span> 
            <h3 class="card-title mb-2">15</h3>
          </div>
        </div>
  </div>

  <div class="col-lg-3 col-md-6 col-12 mb-3">
    <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/student.png')}}" alt="chart success" class="rounded">
              </div>
            </div>
                <span class="fw-semibold d-block mb-1">Student</span> 
            <h3 class="card-title mb-2">15</h3>
          </div>
        </div>
  </div>

<div class="col-lg-3 col-md-6 col-12 mb-3">
    <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/groupes.png')}}" alt="chart success" class="rounded">
              </div>
            </div>
                <span class="fw-semibold d-block mb-1">Groupe</span> 
            <h3 class="card-title mb-2">15</h3>
          </div>
        </div>
  </div>

  <div class="col-lg-3 col-md-6 col-12 mb-3">
    <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/module.png')}}" alt="chart success" class="rounded">
              </div>
            </div>
                <span class="fw-semibold d-block mb-1">Module</span> 
            <h3 class="card-title mb-2">15</h3>
          </div>
        </div>
  </div>
  

  
  



 </div>

@endsection