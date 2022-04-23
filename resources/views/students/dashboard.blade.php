@extends('layouts.admin_header')

@section('title', 'Student Dashboard')

@section('content')

<section id="content">
    <div class="page page-dashboard dashboard-only">
        <div class="pageheader">
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html"><i class="fa fa-home"></i> HOME</a>
                    </li>

                    <li>
                        <a href="index.html">Dashboard</a>
                    </li>
                </ul>

                <div class="page-toolbar">
                    <a role="button" tabindex="0" class="btn btn-lightred no-border pickDate"> <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i> </a>
                </div>
            </div>
        </div>

        <!-- cards row -->

        <div class="row">
            <!-- col -->

            <div class="card-container col-lg-4 col-sm-6 col-sm-12">
                <div class="card">
                    <div class="card-panel">
                        <div class="header">
                            <h3>Academic Information</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/student-avatar.png') }}" alt="logo" class="logo_image img-responsive img-fluid" />
                            </div>
                            <div class="col-md-8">
                                <h4 class="title">Ahansan Ahmad</h4>
                                <p><strong>REG: </strong>544353454</p>
                                <p><strong>Mob: </strong>9898787676</p>
                                <p><strong>Class: </strong>2<sup>nd</sup> A</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection