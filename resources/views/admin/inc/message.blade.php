<script src="{{asset('js/sweetalert.min.js')}}"></script>
@if(Session::has('success'))
<script>
swal({  title: 'Done',
    text: "{{Session::get('success')}}!",
    icon: 'success',
    timer: 3000,
    buttons: false,});
//swal("Dome", "{{Session::get('success')}}!", "success");
</script>
{{Session::forget('success')}}
@endif

@if(Session::has('notice'))
<script>
swal({  title: 'Security Notice',
    text: "{{Session::get('notice')}}!",
    icon: 'warning',
    timer: 5000,
    buttons: {
                cancel : false,
                confirm : {text:'Ok',className:'sweet-warning'},
            }});
//swal("Dome", "{{Session::get('success')}}!", "success");
</script>
{{Session::forget('notice')}}
@endif
@if(Session::has('error'))
<script>
swal("Error", "{{Session::get('error')}}!", "error");
</script>
{{Session::forget('error')}}
@endif
<script>
function success_message(message) {
    swal("Success!", message, "success");
    var delayInMilliseconds = 1000; //1 second

    setTimeout(function() {
        return window.location.reload();
    }, delayInMilliseconds);


}

function warning_message() {
    return swal("Be Alert!", "Warning Message!", "warning");
}

function info_message() {
    return swal("Let's See!", "Info Message", "info");
}

function danger_message(message) {
    return swal("Oops!", message, "error");
}


function logout_confirm(location) {
    swal({
            title: "Are you sure?",
            text: "Once logout, You will have to Login again ",
            icon: "warning",
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            },
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = location;
            } else {
                swal("You Are Still Logged In");
            }
        });
}


function delete_confirm(url) {
    swal({
            title: "Are you sure?",
            text: "Once Deleted, You Can Not Recover Data",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            }

        })
        .then((willDelete) => {
            if (willDelete) {

                location.href = url;

            } else {
                swal("Not Deleted Yet! Your Data Is Safe");
            }
        });
}


function alert_confirm() {
    swal({
            title: "Are you sure?",
            text: "You want to process.",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            }

        })
        .then((willDelete) => {
            if (willDelete) {

                return true;

            } else {
                return false;
            }
        });

        return false;
}
function confirmBeforeAction(element,status) {
    swal({
            title: "Are you sure?",
            text: "You want to process.",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            }

        })
        .then((willDelete) => {
            if (willDelete) {

                if(element == 'adminActionStatus' && (status == '0' || status == '1' )){
                    $("#"+element).val(status);
                    $('#cover-spin').show();
                    $('#AffiliationActionForm').submit();
                }else if(element == 'deputyRegistrarActionStatus' && status=='3'){

                    $("#"+element).val(status);
                    $('#cover-spin').show();
                    $('#deputyRegistrarActionForm').submit();

                }else if(element == 'registrarActionStatus' && status == '4' ){
                    $("#"+element).val(status);
                    $('#cover-spin').show();
                    $('#RegistrarActionForm').submit();

                }else if(element == 'vcActionStatus'  && (status == '5' || status == '1' || status=='2')){
                    $("#"+element).val(status);
                    $('#cover-spin').show();
                    $('#VCActionForm').submit();

                }else{
                    $("#remarkModal").modal('show');
                    $("#"+element).val(status);
                }



            } else {
                return false;
            }
        });

        return false;
}


function reject_confirm(url,id) {
    swal({
            title: "Are you sure?",
            text: "Rejected applications can not be processed further.",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            }

        })
        .then((willDelete) => {
            if (willDelete) {

                location.href = url+'/'+id;

            } else {
                swal("Not Rejected !");
            }
        });
}
function approve_confirm(url,id) {

    swal({
            title: "Are you sure?",
            text: "",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            }

        })
        .then((willDelete) => {
            if (willDelete) {
                if(url == '{{ url('originalDegreeReject') }}')
                {
                    $("#degreeRejectMessage").modal('show');
                    $("#degreeApplicationId").val(id);
                }
                else
                {
                    location.href = url+'/'+id;
                }

            } else {
                swal("No any action performed");
            }
        });
}
function studentResultStatusConfirm(url,id,type) {

    swal({
            title: "Are you sure?",
            text: "Approve or Reject you can rollback",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            }

        })
        .then((willDelete) => {
            if (willDelete) {

                location.href = url+'/'+id+'/'+type;

                /** with ajax */

                // data = {
                //     "_token": "{{ csrf_token() }}",
                //     "id" : id,
                //     "type" : type
                // }

                // $.ajax({
                //     url: url,
                //     method: "POST",
                //     data: data,
                //     success: function(response) {

                //         alert(response);

                //             $('#cover-spin').hide(0);

                //     },
                //     error: function(error) {
                //         console.log(error);
                //         $('#cover-spin').hide(0);
                //     },

                // });


            } else {
                swal("Not Approved!");
            }
        });
}
function pending_confirm(url,id) {
    swal({
            title: "Are you sure?",
            text: "Once pending, proccess from starting",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel : 'No',
                confirm : {text:'Yes',className:'sweet-warning'},
            }

        })
        .then((willDelete) => {
            if (willDelete) {

                $('#remarkModal').modal('show');
                location.href = url+'/'+id;

            } else {
                swal("Not Pending!");
            }
        });
}


</script>
