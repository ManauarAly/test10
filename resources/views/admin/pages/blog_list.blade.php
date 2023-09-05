@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Blog </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Meta key..</th>
                        <th scope="col">Meta Desc..</th>
                        <th scope="col">Post Title</th>
                        <th scope="col">Post Desc..</th>
                        <th scope="col">Created On</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>What is a software ?</td>
                        <td>software keya hota hai, what is software, software in computer</td>
                        <td></td>
                        <td>What is a Software?</td>
                        <td><b>Software</b> is a collection</td>
                        <td>30th October</td>
                        <td><img src="./jds.png" alt=""></td>
                        <td><i class="bi-trash"></i> Delete</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>What is a software ?</td>
                        <td>software keya hota hai, what is software, software in computer</td>
                        <td></td>
                        <td>What is a Software?</td>
                        <td><b>Software</b> is a collection</td>
                        <td>30th October</td>
                        <td><img src="./jds.png" alt=""></td>
                        <td><i class="bi-trash"></i> Delete</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>What is a software ?</td>
                        <td>software keya hota hai, what is software, software in computer</td>
                        <td></td>
                        <td>What is a Software?</td>
                        <td><b>Software</b> is a collection</td>
                        <td>30th October</td>
                        <td><img src="./jds.png" alt=""></td>
                        <td><i class="bi-trash"></i> Delete</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection