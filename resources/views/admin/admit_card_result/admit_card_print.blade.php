@extends('admin.app')
@section('title', 'Admit Card Print')
@section('main')

<style>
    body{
        background:grey; 
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #eeeeee;
        text-align: left;
        padding: 5px 5px;
    }
    .top-con{
        width:84%;
        background:white;
        margin-left:auto;
        margin-right:auto;
        padding:20px;
    }
    .containerr{
        width:100%;
        background:white;
        margin-left:auto;
        margin-right:auto;
        padding: 10px;
        border: 2px dashed #e3e3e3;
    }
    .flex-container {
        display: flex;
    }
    .flex-container > div {
        width:100%;
    }
    .flex-container-logo{
        margin: 10px;
        padding: 10px;
    }
</style>

<div class="top-con">
  <div class="containerr">
 <table>
    <tr>
        <th style="border:none" colspan="1"><img src="https://manauaraly.in/public/web/assets/images/lite-logo.png" width="80px"></th>
        <th colspan="4" style="border:none;text-align:center"><h5 style="color:#9e0b0f;">RAMA TECHNICAL INSTITUTE<br>(admit card for written examination 2022-2023)</h5></th>
        <th colspan="4" style="border:none"><br></th>
    </tr>
   
    <tr>
        <td style="border:none"><h5>Examination date 21 march 2021</h5></td>
        <td  style="border:none;text-align:center" ><h3><br></h3></td> <td  style="border:none;text-align:center" ><h3><br></h3>
        </td> <td  style="border:none;text-align:center" ><h3><br></h3></td>
        <th style="border:none"><h5>Examination time 11:00</h5></th>
        </td> <td  style="border:none;text-align:center" ><h3><br></h3></td>
        </td> <td  style="border:none;text-align:center" ><h3><br></h3></td> 
    </tr>
   
    <tr>
        <th>Candidate Roll No.</th>
        <td colspan="3">71030</td>
        <th colspan="3" rowspan="6" style="text-align:center;">
            <img src="https://i.pinimg.com/236x/07/15/6b/07156b4680962b650af1c6927c7019d5.jpg">
            <h6>(Signature Of Candidate)</h6>
        </th>
    </tr>
    <tr>  
        <th>Candidate Name</th>
            <td colspan="3">Rohit kumar</td>
        </td>    
    </tr>

    <tr>  
    <th>
            Father's Name 
        </th>
            <td colspan="3"  >
            Manohar Lal 
        </td>
            
        </td>
                
      </tr>



<tr>  
  <th>
           Date Of Birth
      </th>
         <td colspan="3"  >
           31/07/1995
      </td>
        
      </td>
                
      </tr>



<tr>  
  <th>
           Reporting Time
      </th>
         <td colspan="3"  >
           10:00
      </td>
        
      </td>
                
      </tr>


<tr>  
        <th>
        Examination Center
      </th>
        <td colspan="3">
           PML SD Public School Block-C, Sector 32-C, <br>Chandigarh - 160032
        </td>
        
      </td>
                
      </tr>

      <tr>
        <td style="border:none"><h5>Subject</h5></td>
      </tr>

    <tr>
        <td colspan="100%"  > 
            <!-- <div style="height:300px;text-align:center;" ><h3>Important Instruction</h3> -->
    </td>
    </div>
    </td>
</table>

    <hr style="border: 2px dashed #939393; border-style: none none dashed;">
    <div class="justify-content-between d-flex">
        <p><b>Examiner Signature</b>  ......................................</p>
        <p><b>Director Signature</b>  ......................................</p>
    </div>
</div>
</div>

@endsection