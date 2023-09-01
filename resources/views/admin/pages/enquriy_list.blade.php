@extends('admin.app')
@section('main')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Agent</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List All</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">Add New Agent</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Travel Name</th>
                                <th>Agent Name</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($agentList as $list)
                            <tr>
                                <td>{{$list->trv_name}}</td>
                                <td>{{$list->agent_name}}</td>
                                <td>{{$list->mob}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->full_add}}</td>
                                <td>
                                    @if($list->status == '1')
                                    <div class="badge rounded-pill bg-light-info text-info w-100">Active</div>
                                    @else
                                    <div class="badge rounded-pill bg-light-info text-black w-100">Dective</div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex order-actions">	
                                        {{-- <a href="javascript:;" class="" title="Delete"><i class="bx bx-trash"></i></a> --}}
                                        {{-- <a href="{{route('eidtAgent', $list->id)}}" class="ms-4" title="Edit"><i class="bx bx-pencil"></i></a> --}}
                                    {{-- </div> 
                                </td>
                            </tr>
                            @endforeach  --}}
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Travel Name</th>
                                <th>Agent Name</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

@endsection

