@extends('template.layout')
@section('container')
<div class="wrapper ">
        <!-- MainBar -->
        <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <x-navs.main/>
            <div class="sidebar-background"></div>
        </div>
        <div class="main-panel">
            <!-- End MainBar -->
            <!-- Navbar -->
                <x-navs.top/>
            <!-- End Navbar -->
            <div class="content">
                <div class="content">
                    <div class="container-fluid">
                        <x-tables.llamas/>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
@endsection
@section('footer')  
    <script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="module" src="{{asset('assets/js/scripts/functions.js')}}" type="text/javascript"></script>
    <script type="module" src="{{asset('assets/js/scripts/llama.js')}}" type="text/javascript"></script>
@endsection