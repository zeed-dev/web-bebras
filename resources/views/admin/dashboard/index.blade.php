@extends('layouts.main')
@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fa fa-book-open text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>BERITA</h4>
                        </div>
                        <div class="card-body">
                            {{ App\Post::count() ?? '0' }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fa fa-bell text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>AGENDA</h4>
                        </div>
                        <div class="card-body">
                            {{ App\Event::count() ?? '0' }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fa fa-users text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>USERS</h4>
                        </div>
                        <div class="card-body">
                            {{ App\User::count() ?? '0' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection