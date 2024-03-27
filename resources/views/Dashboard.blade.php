@extends('template')

@section('tittle', 'dashboard')

@section('content')

   @section('tab')
    <ul id="main-menu" class="metismenu">                            
        <li>
            <a href="#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
            <ul>
                <li class="active"><a href="{{url('/dashboard')}}">Dashboard</a></li>         
            </ul>
        </li>
        <li>
            <a href="#App" class="has-arrow"><i class="icon-grid"></i> <span>Pegawai</span></a>
            <ul>
                <li><a href="{{url('/pegawai')}}">Data Table</a></li>
                <li class=""><a href="{{url('')}}">Table 2 </a></li>
            </ul>
        </li>
        
    </ul>

    @endsection

    <div class="main-content">

        
    </div>

@endsection