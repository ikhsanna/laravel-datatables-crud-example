@extends('template')

@section('tittle', 'pegawai')

@section('content')

    @section('tab')
        <ul id="main-menu" class="metismenu">                            
            <li>
                <a href="#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
                <ul>
                    <li></li><a href="{{url('/')}}">Dashboard</a></li>     
                </ul>
            </li>
            <li>
                <a href="#App" class="has-arrow"><i class="icon-grid"></i> <span>Pegawai</span></a>
                <ul>
                    <li class="active"><a href="{{url('/pegawai')}}">Data Table</a></li>
                </ul>
            </li>
        </ul>
    @endsection

{{-- main content --}}
<div id="main-content">
    <div class="container-fluid">

        {{-- Content Header --}}
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Data Table</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Data Table</li>
                        
                    </ul>
                </div>            
                
            </div>
        </div>

        {{-- Card Content Table --}}
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Table Pegawai</h2>
                        <div class="d-grid d-md-flex justify-content-md-end">
                            <button type="button" name="tambah" class="btn btn-outline-success" id="tambah" data-toggle="modal" data-target="#PegawaiModal">Tambah Pegawai</button>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0 c_list " id="pegawai-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="fancy-checkbox">
                                                <input class="select-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                            
                                        </th>
                                        <th>Name</th>                   
                                        <th>Address</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- end Card Content Table --}}

    </div>



    {{-- Modal Form --}}
    <div class="modal" id="PegawaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formData">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                            <input type="hidden" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label class="control-label">address</label>
                            {{-- <input type="hidden" id="address" name="address"> --}}
                            <input type="text" class="form-control" name="address" id="address">
                            
                        </div>
                    </div>    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="tutup" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="simpan">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal form --}}


    {{-- modal edit --}}


    {{-- end modal edit --}}

{{-- end div main-content --}}
</div>

@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>


@include('partial.script')
    
@endpush

@endsection
