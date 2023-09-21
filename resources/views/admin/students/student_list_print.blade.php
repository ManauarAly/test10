@extends('admin.app')
@section('main')

<style>

  @media print {
    .d-print-inline {
      display: inline !important;
    }
    .d-print-inline-block {
      display: inline-block !important;
    }
    .d-print-block {
      display: block !important;
    }
    .d-print-grid {
      display: -ms-grid !important;
      display: grid !important;
    }
    .d-print-table {
      display: table !important;
    }
    .d-print-table-row {
      display: table-row !important;
    }
    .d-print-table-cell {
      display: table-cell !important;
    }
    .d-print-flex {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
    }
    .d-print-inline-flex {
      display: -webkit-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important;
    }
    .d-print-none {
      display: none !important;
    }
    .sidebar-wrapper, .topbar, .page-footer{
      display: none !important;
    }
    .page-wrapper{
      margin-left:0px;
    }
    .modern-invoice3{
      margin-top:-55px !important;
    }
    .print-row{
      justify-content: space-between !important;
      display: flex !important;
    }
    .print-two2{
      flex-wrap: unset !important;
    }
    .print-two2 > *{
      max-width: 100% !important;
      width: unset !important;
    }
  }
  strong {
    font-weight: 600;
  }

  .print-row{
      justify-content: space-between !important;
      display: flex !important;
    }

  hr {
    border-bottom: 1px solid #eeeeef;
    border-top: 0 none;
    margin: 30px 0;
    padding: 0;
  }

  .position-relative {
    position: relative;
  }

  .w-100 {
    width: 100%;
  }

  .text-capitalize {
    text-transform: capitalize;
  }

  .font-600 {
    font-weight: 600 !important;
  }

  .font-500 {
    font-weight: 500 !important;
  }

  .font-400 {
    font-weight: 400 !important;
  }

  .font-700 {
    font-weight: 700 !important;
  }

  .text-title {
    color: var(--primary-title);
  }

  .text-paragraph {
    color: var(--primary-paragraph);
  }

  /*----------------------------------------------------
    Regular invoice
  ----------------------------------------------------*/
  .invoice-wrapper {
    max-width: 980px;
    background-color: #fff;
    border: 1px solid var(secondary-border);
    border-radius: 6px;
    margin: 15px auto;
    padding: 50px;
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .invoice-wrapper {
      padding: 30px;
    }
  }
  @media (max-width: 575px) {
    .invoice-wrapper {
      padding: 20px;
    }
  }

  .modern-invoice {
    max-width: 880px;
    background-color: #fff;
    border: 1px solid var(secondary-border);
    border-radius: 6px;
    padding: 50px;
    overflow: hidden;
  }
  @media (max-width: 991px) {
    .modern-invoice {
      padding: 30px;
      padding-bottom: 40px;
    }
  }
  .modern-invoice .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    background-color: var(--primary);
    color: var(--white);
  }

  /*----------------------------------------------------
    Modern invoice
  ----------------------------------------------------*/
  .modern-invoice2 {
    max-width: 880px;
    border-radius: 6px;
    overflow: hidden;
  }
  .modern-invoice2 .card-headers {
    background: var(--primary);
    overflow: hidden;
  }
  .modern-invoice2 .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    background-color: var(--primary);
    color: var(--white);
  }
  .modern-invoice2 table thead {
    background: var(--primary);
    color: var(--white);
  }
  .modern-invoice2 .table-striped > tbody > tr:nth-of-type(2n+1) > * {
    --bs-table-accent-bg:none;
  }
  .modern-invoice2 .table-striped > tbody > tr:nth-of-type(even) > * {
    --bs-table-accent-bg: var(--bs-table-striped-bg) !important;
  }
  .modern-invoice2 .left-invoice {
    padding: 19px 50px;
  }
  .modern-invoice2 .right-invoice {
    position: relative;
    z-index: 1;
    padding: 20px 50px;
  }
  .modern-invoice2 .right-invoice::before {
    position: absolute;
    height: 131px;
    width: 400px;
    top: -11px;
    right: -4px;
    overflow: hidden;
    background-color: #000;
    content: "";
    z-index: -1;
    -webkit-clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
    clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
  }
  @media (max-width: 575px) {
    .modern-invoice2 .right-invoice::before {
      background: none;
    }
  }

  .modern-invoice3 {
    max-width: 880px;
    background-color: #fff;
    border: 1px solid var(secondary-border);
    border-radius: 6px;
    padding: 50px;
    overflow: hidden;
    border-bottom: 3px solid #000;
  }
  @media (max-width: 991px) {
    .modern-invoice3 {
      padding: 30px;
      padding-bottom: 40px;
    }
  }
  .modern-invoice3 .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    background-color: var(--primary);
    color: var(--white);
  }
  .modern-invoice3 .card-headers {
    background: var(--white);
    overflow: hidden;
  }
  .modern-invoice3 table thead {
    background: var(--primary);
    color: var(--white);
  }
  .modern-invoice3 .table-striped > tbody > tr:nth-of-type(2n+1) > * {
    --bs-table-accent-bg:none;
  }
  .modern-invoice3 .table-striped > tbody > tr:nth-of-type(even) > * {
    --bs-table-accent-bg: var(--bs-table-striped-bg) !important;
  }
  .modern-invoice3 .left-invoice {
    padding: 19px 50px;
  }
  .modern-invoice3 .right-invoice {
    position: relative;
    z-index: 1;
    padding: 20px 50px;
  }
  .modern-invoice3 .right-invoice::before {
    position: absolute;
    height: 131px;
    width: 400px;
    top: -11px;
    right: -4px;
    overflow: hidden;
    background-color: #000;
    content: "";
    z-index: -1;
    -webkit-clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
    clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
  }
  @media (max-width: 575px) {
    .modern-invoice3 .right-invoice::before {
      background: none;
    }
  }

  .footer-shape {
    display: block;
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
    height: 200px;
    overflow: hidden;
    width: 150%;
    margin-left: -200px;
    margin-bottom: -57px;
    left: 0;
    right: 0;
    position: relative;
    left: 0;
    right: 0;
    position: relative;
  }
  @media (max-width: 767px) {
    .footer-shape {
      width: 153%;
      height: 100px;
    }
  }
  @media (max-width: 575px) {
    .footer-shape {
      width: 240%;
    }
  }

  .main-wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin: 15px 10px;
    gap: 10px;
  }
  @media (max-width: 1199px) {
    .main-wrapper {
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
    }
  }

  @media (max-width: 1199px) {
    .modern-bill-button .d-print-none {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: row !important;
              flex-direction: row !important;
      padding-top: 30px;
    }
  }
  .modern-bill-button .d-print-none .btn-primary-fill,
  .modern-bill-button .d-print-none .btn-primary-outline {
    width: 50px;
    padding: 9px 5px;
    line-height: 27px;
    padding-bottom: 0;
  }

  .btn-primary-fill svg,
  .btn-primary-outline svg {
    width: 25px;
  }

  .total-pay {
    background: var(--primary);
    color: #fff;
  }

  .bg-title {
    background: var(--primary-title) !important;
  }

  .text-border {
    border-bottom: 1px solid var(--primary-title);
    display: inline-block;
  }

  .text-uppercase {
    text-transform: uppercase;
  }

  .pa-10 {
    padding: 3px 10px !important;
  }

  /* Width */
  .tm_width_1 {
    width: 8.33333333%;
  }

  .tm_width_2 {
    width: 16.66666667%;
  }

  .tm_width_3 {
    width: 25%;
  }

  .tm_width_4 {
    width: 33.33333333%;
  }

  .tm_width_5 {
    width: 41.66666667%;
  }

  .tm_width_6 {
    width: 50%;
  }

  .tm_width_7 {
    width: 58.33333333%;
  }

  .tm_width_8 {
    width: 66.66666667%;
  }

  .tm_width_9 {
    width: 75%;
  }

  .tm_width_10 {
    width: 83.33333333%;
  }

  .tm_width_11 {
    width: 91.66666667%;
  }

  .tm_width_12 {
    width: 100%;
  }

  .tm_table_responsive {
    overflow-x: auto;
  }
  .tm_table_responsive > table {
    min-width: 600px;
  }

  .tm_50_col > * {
    width: 50%;
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none;
  }

  .tm_no_border {
    border: none !important;
  }

  .tm_grid_row {
    display: -ms-grid;
    display: grid;
    grid-gap: 10px 20px;
    list-style: none;
    padding: 0;
  }

  .tm_col_2 {
    -ms-grid-columns: (1fr)[2];
    grid-template-columns: repeat(2, 1fr);
  }

  .tm_col_3 {
    -ms-grid-columns: (1fr)[3];
    grid-template-columns: repeat(3, 1fr);
  }

  .tm_col_4 {
    -ms-grid-columns: (1fr)[4];
    grid-template-columns: repeat(4, 1fr);
  }

  .tm_max_w_150 {
    max-width: 150px;
  }

  .tm_left_auto {
    margin-left: auto;
  }

  hr {
    height: 1px;
    border: none;
    margin: 0;
  }

  .tm_invoice {
    background: #fff;
    border-radius: 10px;
    padding: 50px;
  }

  .card-header {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    margin-bottom: 0;
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
  }

  .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
  }

  .card-footer {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
  }

  .signature img {
    max-height: 50px;
  }

  .regular-button .btn-primary-fill {
    background: var(--primary-title);
  }
  .regular-button .btn-primary-fill:hover {
    background: transparent;
    color: var(--primary-title);
    border-color: var(--primary-title);
  }
  .regular-button .btn-primary-fill:focus {
    border-color: var(--primary-title);
    background: var(--primary-title);
    color: #fff !important;
  }
  .regular-button .btn-primary-outline {
    border-color: var(--primary-title);
    color: var(--primary-title);
  }
  .regular-button .btn-primary-outline:hover {
    background: var(--primary-title);
    border-color: transparent;
    color: var(--white);
  }
  .regular-button .btn-primary-outline:focus {
    border-color: var(--primary-title);
    background: var(--primary-title);
    color: #fff !important;
  }

  /*----------------------------------------------
      Index Of All CSS Hera
  ------------------------------------------------

    @version         : 1.0.0
    @Template Name   : init-invoice
    @Template author : 

    :: Regular invoice       
    :: Modern invoice

  ----------------------------------------------------
      End-of CSS
  ----------------------------------------------------*/
  .receipt-wrapper {
    max-width: 340px;
    margin: 30px auto;
    margin-top: 30px;
    padding: 30px 30px;
    background-color: var(--white);
    -webkit-box-shadow: 0px 5px 20px rgba(222, 212, 207, 0.3);
            box-shadow: 0px 5px 20px rgba(222, 212, 207, 0.3);
  }
  .receipt-wrapper .card-header:first-child {
    background-color: var(--primary-title) !important;
    color: var(--white);
  }

  .receipt-top {
    text-align: center;
    margin-bottom: 18px;
  }



  .text-list.text-style1 {
    list-style: none;
    padding: 0;
    margin: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }

  .text-list.text-style1 li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 50%;
    font-size: 14px;
    line-height: 1.2em;
    margin-bottom: 7px;
  }

  .text-right {
    text-align: right;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }

  .text-list-title {
    margin-right: 4px;
  }

  .text-receipt-seperator {
    width: 100%;
    border-top: 1px dashed #b5b5b5;
    margin: 9px 0;
    margin-left: auto;
  }

  .receipt-table {
    width: 100%;
    margin-top: 10px;
    line-height: 1.3em;
  }

  .receipt-table thead th {
    font-weight: 500;
    color: var(--primary-title);
    text-align: left;
    padding: 8px 3px;
    border-top: 1px dashed #b5b5b5;
    border-bottom: 1px dashed #b5b5b5;
  }

  .receipt-table td {
    padding: 4px;
  }

  .receipt-table tbody tr:first-child td {
    padding-top: 10px;
  }

  .receipt-table tbody tr:last-child td {
    padding-bottom: 10px;
    border-bottom: 1px dashed #b5b5b5;
  }

  .receipt-table th:last-child,
  .receipt-table td:last-child {
    text-align: right;
    padding-right: 0;
  }

  .receipt-table th:first-child,
  .receipt-table td:first-child {
    padding-left: 0;
  }

  .receipt-table tr {
    vertical-align: baseline;
  }

  .text-bill-list {
    list-style: none;
    padding: 8px 0;
  }

  .text-bill-list-in {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    text-align: right;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    padding: 3px 0;
  }

  .text-bill-title {
    padding-right: 20px;
  }

  .text-bill-value {
    width: 90px;
  }

  .text-bill-value.text-bill-focus,
  .text-bill-title.text-bill-focus {
    font-weight: 500;
    color: var(--primary-title);
  }

  .company-name {
    font-weight: 500;
    color: var(--primary-title);
    font-size: 18px;
    line-height: 1.4em;
    margin-bottom: 10px;
  }

  .tm_pos_sample_text {
    text-align: center;
    line-height: 1.6em;
    color: #9c9c9c;
  }

  .tm_pos_sample_text img {
    width: 100%;
  }
</style>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Student</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List All</li>
                    </ol>
                </nav>
            </div>
            <div class="d-print-none" style="margin: 0 17em;"> 
                <a href="javascript:window.print()"class="btn-primary-fill">
                <i class="bx bx-printer" style="color:#0066FF;font-size:30px"></i>
                </a>
            </div>           
            <div class="ms-auto">           
                <div class="btn-group">
                    <a href="{{route('newStudent')}}" class="btn btn-primary">Add New Agent</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="student-list-example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Reg No</th>
                                <th width="10%">Class</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studlists as $studList)
                            <tr id="stu-id-{{$studList->id}}">
                                <td>{{$studList->reg}}</td>
                                <td>{{$studList->class}}</td>
                                <td>{{$studList->name}}</td>
                                <td>{{$studList->father}}</td>
                                <td>{{$studList->gender}}</td>
                                <td>{{$studList->dob}}</td>
                                <td>{{$studList->mob}}</td>
                                <td>
                                    <a href="student-profile/{{$studList->id}}" title="View Student Profile"><i class="bx bx-low-vision" style="color:#2A5A74;"></i></a>
                                    <a href="marksheet_create?ncid={{$studList->id}}" title="Marksheet Create"><i class="bx bx-book" style="color:#2A5A74;"></i></a>
                                    <a href="javascript:void(0)" data-id="{{$studList->id}}" class="delAdmStu" title="Delete Student Data"><i class="bx bx-trash" style="color:#FF0000;"></i></a>
                                    <a href="javascript:window.print()" target="_blank" title="View Details"><i class="bx bx-printer" style="color:#0066FF;"></i></a><br>
                                    <a href="student-edit/{{$studList->id}}" title="Edit Student Data"><i class="bx bx-edit" style="color:#009966;"></i></a>
                                    <a href="admitCardCreate?ncid={{$studList->id}}" title="Admit Card Print" class="text-dark"><i class="bx bx-credit-card-front"></i></a>
                                    <a href="student_id_card?ncid={{$studList->id}}" title="Print ID Card"><i class="bx bx-book"></i></a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Reg No</th>
                                <th width="10%">Class</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script> 
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

    @section('script')
    
        <script>
            $('body').on('click', '.delAdmStu', function(){
                var delStuId = $(this).data('id');
                swal({
                    title: "Are you sure?",
                    text: "You want to delete.",
                    icon: "warning",
                    dangerMode: true,
                    buttons: {
                        cancel : 'No',
                        confirm : {text:'Yes',className:'sweet-warning'},
                    }

                }).then((willDelete) => {
                    if (willDelete) {
                        console.log('true');
                        // console.log(delStuId);
                        $.ajax({
                            type:'POST',
                            url:'{{route("delStudent")}}',
                            data: {'_token':'<?php echo csrf_token() ?>', 'stuId':delStuId},
                            success:function(data) {
                                if(data.type==1){
                                    console.log(data.msg);
                                    $('#stu-id-'+delStuId).hide();
                                }else if(data.type==0){
                                    console.log(data.msg);
                                }
                                
                            }
                        });

                    } else {
                        console.log('false');
                    }
                });
            })
        </script>
    @endsection

@endsection

