<?php

include("config.php");
include("session.php");
$query = "SELECT * FROM faculty WHERE   id='$s' and role='FACULTY'";
$query_run = mysqli_query($db, $query); // Execute the query
$student = mysqli_fetch_array($query_run);
    $dept  = 'COMPUTER SCIENCE AND ENGINEERING';
?>
<!--- for fetching details -->
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<!-- Favicon icon -->   
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <title>SRMS</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- for qr code generation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <!--for jquerry-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
    <!-- pdf generation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>

    <!--script-- for pdf >
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div> 
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="main">
                        <!-- Logo icon -->
     
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/srms.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
      
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

                                <a class="dropdown-item" href="Logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
			<?php include("Aside.php"); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bonafide Requests</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
    
                <div class="card p-20">  
                <div class="table-responsive" >
                            <table id="bonafide_table" class="table table-bordered table-striped">

                            </table>

                                        </div>
                                   
                            
                        </div>
                        <div class="modal fade" id="rejectedInfoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rejected Reason</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="rejectedreason"></span>
            </div>
        </div>
    </div>
</div>
                        <script>
    function printReasonToConsole(reason) { 
        console.log('Rejection Reason:', reason);
        $("#rejectedreason").text(reason);
    }
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    reloadTable();
});
</script>
                        <script>
                                        $(document).on('click', '.deletepcBtn', function(e) {
                                            e.preventDefault();
                                            var refno = $(this).val();
                                            var whereValue = refno;

                                            $.ajax({
                                                url: 'fetch.php',
                                                method: 'GET',
                                                data: {
                                                    condition: whereValue
                                                }, // Pass the condition as a parameter
                                                dataType: 'json',
                                                success: function(data) {
                                                    $("#refno1").text(data[0].refno);
                                                    var inputDate = data[0].applydate;
                                                    var dateParts = inputDate.split("-");

                                                    // Rearrange the parts in "dd/mm/yyyy" format
                                                    var formattedDate = dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
                                                    $("#applydate").text(formattedDate);
                                                    $("#fname").text(data[0].fname);
                                                    $("#lname").text(data[0].lname);
                                                    $("#regno").text(data[0].regno);
                                                    $("#aadhar").text(data[0].aadhar);
                                                    if (data[0].gender == "MALE") {
                                                        $("#mark").text("S");
                                                    } else {
                                                        $("#mark").text("D");
                                                    }
                                                    $("#syear1").text(data[0].syear);
                                                    $("#ayear1").text(data[0].ayear);
                                                    $("#degree").text(data[0].degree);
                                                    $("#dept").text(data[0].dept);
                                                    $("#boarding").text(data[0].boarding);
                                                    var inputDate1 = data[0].dob;
                                                    var dateParts1 = inputDate1.split("-");
                                                    document.getElementById('profileImage').src = data[0].photo;
                                                   
                                                    // Rearrange the parts in "dd/mm/yyyy" format
                                                    var formattedDate1 = dateParts1[2] + "/" + dateParts1[1] + "/" + dateParts1[0];
                                                    
                                                    $("#dob").text(formattedDate1);
                                                    $("#purpose").text(data[0].purpose);
                                                    $("#print").show();
                                                },
                                                error: function(xhr, status, error) {
                                                    console.error('Error fetching data:', error);
                                                }
                                            });

                                        });
                                    </script>

                <!--modeal for showing the full details inn staff login-->
                                        <div class="modal fade" id="mod1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Bonafide info</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="cform">
                                        <div class="modal-body">

                                            <div id="errorMessage" class="alert alert-warning d-none"></div>

                                            <div class="mb-3">
                                                <label for=""> Name:</label>
                                                <input type="text" id="name" name="name" class="form-control" disabled />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Rollno:</label>
                                                <input type="text" id="rollno" name="rollno" class="form-control" disabled />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Reason:</label>
                                                <input type="text" id="reason" name="reason" class="form-control" disabled />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Type:</label>
                                                <input type="text" name="type" id="type" class="form-control" disabled />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Date:</label>
                                                <input type="text" id="date" name="date" class="form-control" disabled />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="print" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">

                                            <div class="modal-content " style="width:100%;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="container p-4">
                                                    <div class="ant-card-body snipcss0-0-0-1 snipcss-CGE7r">
                                                        <div class="ant-row ant-row-space-between css-1n7nwfa snipcss0-1-1-2 snipcss0-0-0-1">
                                                            <div class="ant-col css-1n7nwfa snipcss0-2-2-3 snipcss0-1-1-2">
                                                                <h6 class="snipcss0-3-3-4 snipcss0-2-2-3 style-aNVXw" id="style-aNVXw">
                                                                    Ref No: <span id="refno1"></span>
                                                                </h6>
                                                            </div>
                                                            <div class="ant-col css-1n7nwfa snipcss0-2-2-5 snipcss0-1-1-4">
                                                                <h6 class="snipcss0-3-5-6 snipcss0-2-4-5 style-DUXyg" id="style-DUXyg">
                                                                    Date : <span class="snipcss0-3-5-6 snipcss0-2-4-5 style-DUXyg"><span id="applydate"></span></span>
                                                                </h6>
                                                            </div>
                                                            <div class="ant-divider css-1n7nwfa ant-divider-horizontal snipcss0-2-2-7 snipcss0-1-1-6" role="separator">
                                                            </div>
                                                        </div>
                                                        <header class="snipcss0-1-1-8">
                                                            <h4 class="snipcss0-2-8-9 style-wKfrt" id="style-wKfrt">
                                                                BONAFIDE CERTIFICATE
                                                            </h4>
                                                        </header>
                                                        <h5 class="snipcss0-2-10-11 style-PrYLE" id="style-PrYLE" style="line-height: 1.5;">

                                                            This is to certify that <span id="fname"></span> <span id="lname"></span> (Reg No : <span id="regno"></span>, Aadhar No : <span id="aadhar"></span>) <span id="mark"></span>/O Mr. <span id="fathername"></span> is a bonafide student of our College, Studying in <span id="syear1"></span> Year <span id="degree"></span> <span id="dept"></span> during academic year <span id="ayear1"></span>.
                                                        </h5>
                                                        <br class="snipcss0-2-10-12">
                                                        <div class="ant-row ant-row-space-between css-1n7nwfa snipcss0-2-10-13">
                                                            <div class="ant-col css-1n7nwfa snipcss0-3-13-14 style-hDTO4" id="style-hDTO4">
                                                                <h5 class="snipcss0-4-14-15 style-7icRK" id="style-7icRK" style="line-height: 1.5;">
                                                                    Date of Birth : <span id="dob"></span>
                                                                    <br class="snipcss0-5-15-16">
                                                                    Boarding : <span id="boarding"></span>
                                                                    <br class="snipcss0-5-15-19">
                                                                </h5>
                                                            </div>
                                                            <div class="ant-col css-1n7nwfa snipcss0-3-13-20 style-FhLRf" id="style-FhLRf">
                                                            <img src="" class="snipcss0-4-20-21 style-FZVbo" id="profileImage" height="200" width="200">                                                            </div>
                                                        </div>

                                                        <br class="snipcss0-5-15-16">

                                                        <h5 class="snipcss0-2-10-24 style-HCsIX" id="style-HCsIX">
                                                            This Certificate Applying for the Purpose of <span id="purpose"></span>.</h5>

                                                        <br class="snipcss0-2-10-33">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="rejectModalLabel">Reject Reason</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="rejectForm<?= $student['uid'] ?>" method="post">
                                                                    <input type="hidden" name="student_uid" value="<?= $student['uid'] ?>"></input>
                                                                    <label for="rejectReason">Reason for Rejection:</label>
                                                                    <textarea type="text" name="rejectReason" id="rejectReason" class="form-control rejectReason" required></textarea>

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" id='submitRejection' class="btn btn-danger submitRejection">Reject </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


            </div>
            </div>
    </div>
    <?php include "./footer.html" ?>
    </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           
        </div>
        
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!--for accepting bonafide-->
    <!--script for pdf -->
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
    

    <script>
       function rejectOpen(uid){
        console.log(uid)
            document.getElementById("submitRejection").setAttribute('student-id',uid)
        }
    $(document).on('click', '.submitRejection', function () {
        var row_id =document.getElementById("submitRejection").getAttribute('student-id')
        var rejectReason = $('#rejectReason').val();
        console.log("hisadfasid"+row_id);
        // Print the rejection reason to the console
        console.log('Rejection Reason:', rejectReason);
        
        $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                'reject_bonafide': true,
                'student_id': row_id,
                'rejectReason': rejectReason
            },
            success: function (response) {
                try {
                    var res = JSON.parse(response);

                    if (res.status == 200) {
                        swal.fire({
                            icon: 'success',
                            title: 'Done',
                            text: 'Details rejected'
                        });

                        // Hide the modal
                        $('#rejectModal').modal('hide');
                        reloadTable();

                        // Clear the input field
                        $('#rejectReason').val('');
                    } else {
                        alert(res.message);
                    }
                } catch (error) {
                    console.error('Error parsing JSON:', error);
                    alert('Error parsing JSON');
                }
            }
        });
    });
</script>

<script>
    $(document).on('click', '.acceptbonafide', function (e) {
        e.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, accept it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var student_id3 = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'accept_bonafide': true,
                        'student_id3': student_id3
                    },
                    success: function (response) {
                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: res.message
                            });
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'Done',
                                text: 'Bonafide accepted'
                            });
                            reloadTable();
                            
                        }
                    }
                });
            }
        });
    });
</script>

    <!-- script for showing full info-->
    <script>
   $(document).ready(function() {
    $('.cform1').click(function() {
        var student_id3 = $(this).data('uid'); // Get the uid from the data-uid attribute
        
        // Fetch data using AJAX
        $.ajax({
            url: 'bonafideview.php',
            method: 'GET',
            data: { student_id: student_id3 },
            success: function(data) {
                var complaintData = JSON.parse(data);
                // Populate modal fields with data
                $('#name').val(complaintData.name);
                $('#rollno').val(complaintData.regno);
                $('#reason').val(complaintData.purpose);
                $('#type').val(complaintData.type);
                $('#date').val(complaintData.applydate);
                
                // Open the modal
                $('#mod1').modal('show');
            }
        });
    });
});
</script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
        // let request = new FormData();
        // request.append("reload",true)
        // fetch("endpoint.php",{
        //     method:"POST",
        //     body:request
        // }).then((res)=>(res.json())).then((data)=>{
        //     console.log(data);
        // })
        <?php
        $query = "select uid , fname ,type, purpose , applydate , status,rejection_reason,regno from bonafide2";
        $query_run = mysqli_query($db, $query);
        ?>
        let tableData = <?php echo json_encode($query_run->fetch_all(MYSQLI_ASSOC)) ?>;
        populateDataTable(tableData)

        function populateDataTable(tableData) {
            let table = new DataTable('#bonafide_table', {
                data: tableData,
                // ...

columns: [
    {
        title: 'S.no',
        data: 'uid',
        render: function(data, type, row, meta) {
            // Use meta.row to get the current row index, add 1 to start from 1
            return meta.row + 1;
        }
    },
    {
        title: 'Name',
        data: 'fname'
    },
    {
        title: "Roll No.",
        data: "regno"
    },
    {
        title: 'Type',
        data: 'type'
    },
    {
        title: 'Purpose',
        data: 'purpose'
    },
    {
        title: 'Action',
        data: 'uid',
        render: function(data, type, row, meta) {
            let order = 0; // default order for pending rows
            if (row['status'] == "1") {
                order = 2; // move accepted rows to the end
            } else if (row['status'] == "10") {
                order = 3; // move rejected rows to the end
            }

            return `
                ${order === 0 ? 
                    `<button type="submit" value=${row['uid']} class="acceptbonafide btn btn-success bi bi-check2"></button>
                    <button type="button" class="deletebonafide btn btn-danger bi bi-x" data-bs-toggle="modal" onclick="rejectOpen(${row['uid']})" data-bs-target="#rejectModal"></button>` 
                    : ''
                }
                ${row['status'] == "1" ?
                    `<button type="button" class="btn btn-success">Accepted</button>`
                    : ''
                }
                ${row['status'] == "10" ?
                    `<button type="button" class="btn btn-danger data-toggle="modal">Rejected</button>
                    <button type="button" class="btn btn-info bi bi-info" data-bs-toggle="modal" data-bs-target="#rejectedInfoModal" data-rejected-reason=${row['rejection_reason']} onclick="printReasonToConsole('${row['rejection_reason']}')"></button>`
                    : ''
                }
                <button type="button" name="submit" class="btn btn-primary bi bi-eye deletepcBtn" value=${row["uid"]} data-toggle="modal" data-target="#print"></button>
            `;
        },
        order: [[5, 'asc']],
    }
],

// ...

            });
        }

        async function reloadTable() {
            let reqbody = new FormData()
            reqbody.append('reload', true)
            let req = await fetch("endpoint2.php", {
                method: "POST",
                body: reqbody
            })
            let data = await req.json()
            $('#bonafide_table').DataTable().destroy();
            populateDataTable(data)
            data.sort(function(a, b) {
        if (a.status === '0') return -1;  // Move pending entries to the front
        if (b.status === '0') return 1;
        // For accepted and rejected entries, maintain the existing sorting
        if (a.status === '1' || a.status === '10') return 1;
        if (b.status === '1' || b.status === '10') return -1;
        return 0;
    });

    $('#bonafide_table').DataTable().clear().rows.add(data).draw();
        }
    </script>
</body>

</html>