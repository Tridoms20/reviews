@extends('layout.app')
@section('title', 'Dashboard')
@section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="file"></i></div>
                                            Dashboard
                                        </h1>
                                        <div class="page-header-subtitle">Use this blank page as a starting point for creating new pages inside your project!</div>
                                    </div>
                                    <div class="col-12 col-xl-auto mt-4">Optional page header content</div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card">
                            <div class="card-header">Example Card</div>
                            <div class="card-body">This is a blank page. You can use this page as a boilerplate for creating new pages!</div>
                        </div>
                    </div>
@endsection
