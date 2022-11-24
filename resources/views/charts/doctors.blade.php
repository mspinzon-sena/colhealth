@extends('layouts.panel')
@section('title','Desempeño')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Reporte: Desempeño médico</h6>
            </div>
            <div class="card-body">
            
            <div class="input-daterange datepicker row align-items-center" data-date-format="yyyy-mm-dd">
    </div>
</div>
              <div id="container">
              </div>
            </div>
           
        </div>
      </div>
    </div>

@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="{{asset('js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 

<script src="{{asset('js/charts/doctors.js')}}"></script>
@endsection