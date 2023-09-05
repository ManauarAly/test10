@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Employee Management</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Department</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
    </div>

    <div class="box-header">
        <form action="admitCardPrint.php" target="_blank" method="post">

            <div class="row mb-3">
                <div class="col-md-6 d-flex content-justify-start">
                    <div class="btn-group">
                        <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">Sep</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex content-justify-end">
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">Quick Attendance</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="box-body table-responsive" id="form-content">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>SR</th>
                            <th>Name</th>
                            <th>01</th>
                            <th>02</th>
                            <th>03</th>
                            <th>04</th>
                            <th>05</th>
                            <th>06</th>
                            <th>07</th>
                            <th>08</th>
                            <th>09</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                            <th>15</th>
                            <th>16</th>
                            <th>17</th>
                            <th>18</th>
                            <th>19</th>
                            <th>20</th>
                            <th>21</th>
                            <th>22</th>
                            <th>23</th>
                            <th>24</th>
                            <th>25</th>
                            <th>26</th>
                            <th>27</th>
                            <th>28</th>
                            <th>29</th>
                            <th>30</th>
                            <th>31</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td align="left">1</td>
                            <td align="left">ALAUDDIN</td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                            <td><input title="" style="text-align: center; " type="text" value="" size="5" readonly=""> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @endsection