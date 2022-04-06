@extends('layouts.admin')

@php
$activeNav = 'dashboard';
@endphp

@section('content')
  <div class="card mb-3 mt-5">
    <div class="card-header-tab card-header">
      <h2 class="text-capitalize font-weight-bold">
        <i class="header-icon lnr-charts icon-gradient bg-happy-green"></i>
        Dashboard Performance
      </h2>
    </div>

    <div class="no-gutters row">
      <div class="col-sm-6 col-md-4 col-xl-4">
        <div class="card bg-transparent py-2 px-4 text-left">
          <div class="icon-wrapper rounded-circle">
            <div class="icon-wrapper-bg bg-warning opacity-10"></div><i class="lnr-laptop-phone text-dark opacity-8"></i>
          </div>
          <div class="widget-chart-content">
            <div class="widget-subheading">Cash Deposits</div>
            <div class="widget-numbers">1,7M</div>
            <div class="widget-description opacity-8 text-focus">
              <div class="d-inline text-danger pr-1">
                <span class="pl-1">54.1%</span>
              </div> less earnings
            </div>
          </div>
        </div>
        <div class="divider d-md-none d-sm-block m-0"></div>
      </div>

      <div class="col-sm-6 col-md-4 col-xl-4">
        <div class="card bg-transparent py-2 px-4 text-left">
          <div class="icon-wrapper rounded-circle">
            <div class="icon-wrapper-bg opacity-9 bg-danger"></div><i class="lnr-graduation-hat text-white"></i>
          </div>
          <div class="widget-chart-content">
            <div class="widget-subheading">Invested Dividents</div>
            <div class="widget-numbers"><span>9M</span></div>
            <div class="widget-description opacity-8 text-focus"> Grow Rate: <span class="text-info pl-1">
                <span class="pl-1">14.1%</span>
              </span></div>
          </div>
        </div>
        <div class="divider d-md-none d-sm-block m-0"></div>
      </div>

      <div class="col-sm-12 col-md-4 col-xl-4">
        <div class="card bg-transparent py-2 px-4 text-left">
          <div class="icon-wrapper rounded-circle">
            <div class="icon-wrapper-bg opacity-9 bg-success"></div><i class="lnr-apartment text-white"></i>
          </div>
          <div class="widget-chart-content">
            <div class="widget-subheading">Capital Gains</div>
            <div class="widget-numbers text-success"><span>$563</span></div>
            <div class="widget-description text-focus"> Increased by
              <span class="text-warning pl-1">
                <span class="pl-1">7.35%</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
