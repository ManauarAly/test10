@extends('admin.app')
@section('main')

<div id="printableArea">
    <center>
        <div align="center">
            <br><br>
        </div>

        <img src="{{URL::asset('assets/images/rama-print-header.jpeg')}}"><hr/>
                    
        <div style="text-transform:uppercase; font-size:24px; font-weight:900; padding-bottom:15px;"> Student Admission Receipt</div>
        
        <img src="{{URL::asset('assets/images/studentImgs/'.$student->img)}}" height="100" class="img-responsive" style="margin-left:70px;"><br>

        <div><br>

            <table border="1" cellspacing="0" cellpadding="3" style="width:98%; height:auto;">
                    <thead bgcolor="#0061A8" style="border:none;">
                        <th width="16%" style="color:#FFFFFF;">Session</th>
                        <th width="16%" style="color:#FFFFFF;">Reg No</th>
                        <th width="18%" style="color:#FFFFFF;">Admission Date</th>
                        <th width="17%" style="color:#FFFFFF;">Course</th>
                    <tbody>
                        <td>{{ $student->session }}</td>
                        <td>{{ $student->reg }}</td>
                        <td>{{ $student->admission_date }}</td>
                        <td>{{ $student->class }}</td>
                    </tbody>
                </table><br>
                    <table border="1" cellspacing="0" cellpadding="3" style="border:none; width:98%; height:auto;">
                        <tr>
                            <th width="16%" align="left">Student Name</th>
                            <td width="33%"><font style="text-transform:capitalize;">{{ $student->name }}</font></td>
                            <th width="17%" align="left">Father's Name</th>
                            <td width="34%"><font style="text-transform:capitalize;">{{ $student->father }}</font></td>
                        </tr>
                        <tr>
                            <th width="16%" align="left">Gender</th>
                            <td width="33%"><font style="text-transform:capitalize;">{{ $student->gender }}</font></td>
                            <th width="17%" align="left">Date of Birth</th>
                            <td width="34%"><font style="text-transform:capitalize;">{{ $student->dob }}</font></td>
                        </tr>
                        
                        <tr>
                            <th width="16%" align="left">Total Fee</th>
                            <td width="33%"><font style="text-transform:capitalize;">{{ $student->fee }}</font></td>
                            <th width="17%" align="left">Gardian Mobile No</th>
                            <td width="34%"><font style="text-transform:capitalize;">{{ $student->gardian }}</font></td>
                        </tr>
                        
                        <tr>
                            <th width="16%" align="left">City</th>
                            <td width="33%"><font style="text-transform:capitalize;">{{ $student->city }}</font></td>
                            <th width="17%" align="left">Student Mobile No.</th>
                            <td width="34%"><font style="text-transform:capitalize;">{{ $student->mob }}</font></td>
                        
                        </tr>
                        <tr>
                            <th width="16%" align="left">Last School</th>
                            <td width="33%"><font style="text-transform:capitalize;">{{ $student->last_school }}</font></td>
                            <th width="17%" align="left">Board</th>
                            <td width="34%"><font style="text-transform:capitalize;">{{ $student->board }}</font></td>
                        </tr>
                        <tr>
                            <th width="16%" align="left">Full Address</th>
                            <td colspan="3" width="33%"><font style="text-transform:capitalize;">{{ $student->address }}</font></td>
                            
                        </tr>
                        
                    </table><br />
                    
            </div>
    </center>
</div>
<div align="center">
    <button type="button" class="btn btn-primary" id="btn" onClick="printDiv('printableArea')">Print</button>	
    <a href="{{route('studentList')}}"><button type="button" class="btn btn-danger">Back</button></a>
</div>

@endsection

@section('script')
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>
@endsection