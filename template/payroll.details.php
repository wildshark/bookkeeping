<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Data Table</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <ul>
                        <?=menu($token)?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->

        <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <i class="header-icon ti-bell"></i>
                        </div>
                        <div class="dropdown dib">
                            <a href='?_page=log-off&token=<?=$_GET['token']?>'><i class="header-icon ti-power-off"></i></a>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <form method="post" action="index.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4">Ref</label>
                                            <input type="text" name="ref" value="<?="PT".time()?>" class="form-control" id="inputEmail4" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputCity">Pay Date</label>
                                            <input type="date" name="date" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Staff Name</label>
                                            <input type="text" name="staff" class="form-control" id="inputPassword4" placeholder="Surname">
                                        </div>                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Basic Salary</label>
                                            <input type="text" name="basic" class="form-control" id="inputPassword4" placeholder="0.00">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Provt Fund</label>
                                            <input type="text" name="provt_fund" class="form-control" id="inputPassword4" placeholder="0.00">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Payee</label>
                                            <input type="text" name="paye" class="form-control" id="inputPassword4" placeholder="0.00">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Education Loan</label>
                                            <input type="text" name="education_loan" class="form-control" id="inputPassword4" placeholder="0.00">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Salary Advance</label>
                                            <input type="text" name="salary_advance" class="form-control" id="inputPassword4" placeholder="0.00">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Rent Advance</label>
                                            <input type="text" name="rent_advance" class="form-control disable" id="inputPassword4" placeholder="0.00">
                                        </div>
                                    </div>                                           
                                    <button type="submit" name="_submit" value="payroll-details-add" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Ref</th>
                                                        <th>Staff</th>
                                                        <th>Basic</th>
                                                        <th>SSF</th>
                                                        <th>Taxable Inc.</th>
                                                        <th>Provt Fund</th>
                                                        <th>Paye</th>
                                                        <th>Gross</th>
                                                        <th>Edu. Loan</th>
                                                        <th>Sal. Advance</th>
                                                        <th>Rent Advance</th>
                                                        <th>Net</th>
                                                        <th>SSF 13%</th>
                                                        <th>SSNIT 13.50%</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        if((!isset($data))||($data == false)){
                                                            echo"<tr>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                                <td>Null</td>
                                                            </tr>";
                                                        }else{
                                                            foreach($data as $payroll){

                                                                if(!isset($n)){
                                                                    $n =1;
                                                                }else{
                                                                    $n = $n +1;
                                                                }
                                                               
                                                                echo"<tr>
                                                                <td>{$n}</td>
                                                                <td>{$payroll['ref']}</td>
                                                                <td>{$payroll['full_name']}</td>
                                                                <td>{$payroll['basic_salary']}</td>
                                                                <td>{$payroll['ssf']}</td> 
                                                                <td>{$payroll['taxable_income']}</td>
                                                                <td>{$payroll['provt_fund']}</td> 
                                                                <td>{$payroll['paye']}</td> 
                                                                <td>{$payroll['gross_salary']}</td>
                                                                <td>{$payroll['education_loan']}</td> 
                                                                <td>{$payroll['salary_advance']}</td> 
                                                                <td>{$payroll['rent_advance']}</td>
                                                                <td>{$payroll['net_salary']}</td> 
                                                                <td>{$payroll['ssf_13']}</td> 
                                                                <td>{$payroll['ssnit']}</td> 
                                                                <td><a href='?_submit=delete-payroll-slip&id={$payroll['payslip_id']}'>Delete</a></td>
                                                            </tr>";

                                                            }
                                                        }
                                                    ?>
                                                </tbody>    
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <?php include("model.php")?>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

</body>

</html>