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
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Investment</div>
                                        <div class="stat-digit"><?=number_format($total['invest'],2)?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Returns</div>
                                        <div class="stat-digit"><?=number_format($total['profit'],2)?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Cashout</div>
                                        <div class="stat-digit"><?=number_format($total['cashout'],2)?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" data-toggle='modal' data-target='#investmentModalCenter' class="btn btn-success m-b-10 m-l-5">Add New</a>
                             <!--form add new-->
                            <div class="modal fade" id="investmentModalCenter">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">New Grant</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <form action="index.php" method="get">
                                            <div class="modal-body">
                                                <!--form-->
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="date" name="date" class="form-control">
                                                        </div>
                                                        <div class="col-sm-6 mt-2 mt-sm-0">
                                                            <input type="text" name='ref' value='<?=uniqid()?>' class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <input type="text" name="details" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select name="type" class="form-control">
                                                                <option>Investment</option>
                                                                <option>Returns</option>
                                                                <option>Cashout</option>
                                                            </select>                                                            
                                                        </div>
                                                        <div class="col-sm-6 mt-2 mt-sm-0">
                                                            <input type="text" name='amount' class="form-control">
                                                        </div>
                                                    </div>
                                                <!--/form-->
                                            </div>
                                                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="_submit" value="investment-details-add" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>     
                                    </div>
                                </div>
                            </div>
                            <div class="card">                                
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Details</th>
                                                    <th>Ref</th>
                                                    <th>Investment</th>
                                                    <th>Profit</th>
                                                    <th>Cashout</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    if((!isset($res))||($res ==false)){
                                                        echo"";
                                                    }else{
                                                        foreach($res as $r){
                                                            if(!isset($n)){
                                                                $n = 1;
                                                            }else{
                                                                $n =$n +1;
                                                            }   
                                                            $id = $r['invest_detail_id'];
                                                            echo" 
                                                            <tr>
                                                                <td>{$n}</td>
                                                                <td>{$r['tran_date']}</td>
                                                                <td>{$r['details']}</td>
                                                                <td>{$r['ref']}</td>
                                                                <td>{$r['invest']}</td>
                                                                <td>{$r['profit']}</td>
                                                                <td>{$r['cashout']}</td>
                                                                <td>
                                                                    <a herf='?_submit=investment-details-delete&id={$id}' class='text-danger'>Delete</a>
                                                                </td>
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