@extends('layout.admin')
@section('title', 'Laporan')
@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title" style="font-size: 1.5rem; font-weight: 600;">
                                            Laporan
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">Optional page header content</div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="container-xl px-4 mt-4">
                    <!-- Container baru di atas boxed -->
                    <div class="bg-white border rounded shadow-sm p-3">
                            Pilih Tutor (Dropdown)
                    </div>
                    </div>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <div class="card mb4">
                            <div class="card-header">Boxed Layout Example</div>
                            <div class="card-body">This is an example of a page with the default boxed layout. We've expanded Bootstrap by adding a new xxl breakpoint. As the screen width gets larger, the container element will set a max width to the content. The boxed layout uses the max width container element on the page header and in the main page content in this example.</div>
                        </div>
                    </div>
                </main>
@endsection
