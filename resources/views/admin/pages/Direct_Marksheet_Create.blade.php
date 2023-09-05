@extends('admin.app')
@section('main')

<div class="page-content">
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Marksheet New</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Direct Marksheet Create</li>
        </ol>
      </nav>
    </div>
    <div class="ms-auto">
      <div class="btn-group">
        <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
      </div>
    </div>
  </div>
  <section class="content-header">
    <div align="">
      <section class="content">

        <div class="box box-default card">
          <form action="" name="myform" method="post" enctype="multipart/form-data">
            <div class="card-body">
            <div class="box box-default">
                  <div class="box-header with-border">
                     <div class="box-tools pull-right">
                     </div>
                  </div>
                  <form action="" name="myform" method="post" enctype="multipart/form-data">
                     <!-- /.box-header -->
                     <div class="box-body">
                        <div class="row">
                           <input type="hidden" value=" " name="uidd">
                           <div class="col-md-3">
                              <div class="form-group" style="width:100%;">
                                 <label>Student Name</label>  
                                 <input type="text" class="form-control mb-2" name="nm" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group" style="width:100%;">
                                 <label>Roll No</label>  
                                 <input type="text" required="" class="form-control mb-2" name="stcode">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group" style="width:100%;">
                                 <label>Course:</label>  
                                 <input type="text" class="form-control mb-2" name="course" required=""> 
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group" style="width:100%;">
                                 <label>Session</label>  
                                 <input type="text" class="form-control mb-2" name="sess" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" style="width:100%;">
                                 <label>Name Of Branch</label>  
                                 <input type="text" class="form-control mb-2" name="nm_br" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" style="width:100%;">
                                 <label>Father's Name</label>  
                                 <input type="text" class="form-control mb-2" name="father_name" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" style="width:100%;">
                                 <label>Semester</label>
                                 <select name="semester" class="form-control mb-2">
                                    <option value="">Select Semester</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group" style="width:100%;">
                                 <label>Course Subject</label>  
                                 <input type="text" class="form-control mb-2" name="sub1" value="">
                                 <input type="text" class="form-control mb-2" name="sub2" value="">
                                 <input type="text" class="form-control mb-2" name="sub3" value="">  
                                 <input type="text" class="form-control mb-2" name="sub4" value="">  
                                 <input type="text" class="form-control mb-2" name="sub5" value="">  
                                 <input type="text" class="form-control mb-2" name="sub6" value="">  
                                 <input type="text" class="form-control mb-2" name="sub7" value="">  
                                 <input type="text" class="form-control mb-2" name="sub8" value="">  
                                 <input type="text" class="form-control mb-2" name="sub9" value="">  
                                 <input type="text" class="form-control mb-2" name="sub10" value="">  
                                 <input type="text" class="form-control mb-2" name="project" value="Project">  
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group" style="width:100%;">
                                 <label>Max.Marks</label>  
                                 <input type="text" class="form-control mb-2" name="mark1" value="" id="a">  
                                 <input type="text" class="form-control mb-2" name="mark2" value="" id="b">  
                                 <input type="text" class="form-control mb-2" name="mark3" value="" id="c">  
                                 <input type="text" class="form-control mb-2" name="mark4" value="" id="d">  
                                 <input id="e" type="text" class="form-control mb-2" name="mark5" value="">  
                                 <input type="text" class="form-control mb-2" name="mark6" value="" id="f">  
                                 <input type="text" class="form-control mb-2" name="mark7" value="" id="g">  
                                 <input type="text" class="form-control mb-2" name="mark8" value="" id="h">  
                                 <input type="text" class="form-control mb-2" name="mark9" value="" id="i">  
                                 <input type="text" class="form-control mb-2" name="mark10" value="" id="j">  
                                 <input type="text" class="form-control mb-2" name="project_pr" value="" id="k"><br>
                                 <input type="text" class="form-control mb-2" id="total" name="maxtotal" placeholder="Total Max Marks">  
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" style="width:100%;">
                                 <label>Obtained Marks</label>  
                                 <input id="aa" type="text" class="form-control mb-2" name="ob1">  
                                 <input id="bb" type="text" class="form-control mb-2" name="ob2">  
                                 <input id="cc" type="text" class="form-control mb-2" name="ob3">  
                                 <input id="dd" type="text" class="form-control mb-2" name="ob4">  
                                 <input id="ee" type="text" class="form-control mb-2" name="ob5">  
                                 <input id="ff" type="text" class="form-control mb-2" name="ob6">  
                                 <input id="gg" type="text" class="form-control mb-2" name="ob7">  
                                 <input id="hh" type="text" class="form-control mb-2" name="ob8">  
                                 <input id="ii" type="text" class="form-control mb-2" name="ob9">  
                                 <input id="jj" type="text" class="form-control mb-2" name="ob10">
                                 <input type="text" id="kk" class="form-control mb-2" name="project_main_payakitna" placeholder="Project Mark">  
                                 <br>
                                 <input type="text" class="form-control mb-2" id="total2" name="obttotal" placeholder="Obtained Total Marks">  
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group" style="width:100%;">
                                 <label>Date</label>  
                                 <input type="date" class="form-control mb-2" name="date" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group" style="width:100%;">
                                 <label>Director</label>  
                                 <input type="text" class="form-control mb-2" name="dir" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group" style="width:100%;">
                                 <label></label>  
                                 <input type="hidden" class="form-control mb-2" name="result" value="Pass">
                              </div>
                           </div>
                           <div class="col-md-2">
                              <!--- precnatge--->
                              <div class="form-group" style="width:100%;">
                                 <label></label>  
                                 <input type="hidden" class="form-control mb-2" name="out" placeholder="Percantge">
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group" style="width:100%;">
                                 <label></label>  
                                 <input type="hidden" class="form-control mb-2" name="grd" placeholder="grade">
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="col-md-3">
                              <div class="form-group">  
                                 <button type="submit" name="entry" class="btn-success form-control mb-2">Marksheet Create</button>
                              </div>
                           </div>
                                                      <!-- /.col -->
                        </div>
                        <!-- /.row -->
                     </div>
               </form></div>
            </div>
          </form>
        </div>
      </section>

    </div>
  </section>

</div>
@endsection