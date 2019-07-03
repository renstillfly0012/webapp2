<!DOCTYPE html>
<html>

<head>
  <title>Account Verification</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
  <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
</head>

<body>
  <script type="text/javascript">
    $(document).ready(function() {
      swal({
        title: "Account Verification",
        text: "You have successfully verified your account",
        //timer: 1500,
        showConfirmButton: true,
        type: 'success'
      },
      function(isConfirm){
         window.location = "http://localhost/elitedev4/";
      }
      );

    });

    // $(".remove").click(function() {
    //   var id = $(this).parents("tr").attr("id");

    //   swal({
    //       title: "Are you sure?",
    //       text: "You will not be able to recover this imaginary file!",
    //       type: "warning",
    //       showCancelButton: true,
    //       confirmButtonClass: "btn-danger",
    //       confirmButtonText: "Yes, delete it!",
    //       cancelButtonText: "No, cancel plx!",
    //       closeOnConfirm: false,
    //       closeOnCancel: false
    //     },
    //     function(isConfirm) {
    //       if (isConfirm) {
    //         //   $.ajax({
    //         //      url: '/item-list/'+id,
    //         //      type: 'Delete',
    //         //      error: function() {
    //         //         alert('Something is wrong'+id);
    //         //      },
    //         //      success: function(data) {
    //         //           $("#"+id).remove();
    //         //           swal("Deleted!", "Your imaginary file has been deleted.", "success");
    //         //      }
    //         //     // window.location.href('home/login');
    //         //   });

    //       } else {
    //         swal("Cancelled", "Your imaginary file is safe :)", "error");
    //       }
    //     });

    // });
    
  </script>