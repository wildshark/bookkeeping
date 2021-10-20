<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Basic Form </title>

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
                                    <li class="breadcrumb-item active">Form-Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Categories Setup</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" action="index.php">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Transaction Category</p>
                                                <input type="text" name="title" class="form-control input-default " placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Transaction Type</p>
                                                <select name='type' id="inputState" class="form-control input-default">
                                                    <option value='1'>Income</option>
                                                    <option value="2">Expenses</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="_submit" value="category-add" class="form-control btn-primary" placeholder="Input Focus"> Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Categories</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <!-- Nav tabs -->
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-stats-down"></i></span> <span class="hidden-xs-down">Income</span></a> </li>
												<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="ti-stats-up"></i></span> <span class="hidden-xs-down">Expenses</span></a> </li>
												<!--li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li-->
											</ul>
											<!-- Tab panes -->
											<div class="tab-content tabcontent-border">
												<div class="tab-pane active" id="home" role="tabpanel">
													<div class="p-20">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                            <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Categories</th>
                                                                        <th>Status</th>
                                                                        <th></th>                                                                    
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        if((!isset($incomes))||($incomes == false)){
                                                                            echo"";
                                                                        }else{
                                                                            foreach($incomes as $i){

                                                                                if(!isset($n)){
                                                                                    $n = 1;
                                                                                }else{
                                                                                    $n = $n + 1;
                                                                                }
                                                                                if($i['status_id'] == 1){
                                                                                    $css="color-success";
                                                                                    $btn ="Enable";
                                                                                    $status =2;
                                                                                }else{
                                                                                    $css = "color-danger";
                                                                                    $btn ="Disable";
                                                                                    $status=1;
                                                                                }
                                                                                $id =$i['category_id'];

                                                                                echo"
                                                                                    <tr>
                                                                                        <th scope='row'>{$n}</th>
                                                                                        <td>{$i['category_title']}</td>
                                                                                        <td>
                                                                                            <a href='?_submit=category-status&id={$id}&status={$status}' class='{$css}'>{$btn}</a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href='?_submit=category-delete&id={$id}' class='color-danger'>Remove</a>
                                                                                        </td>
                                                                                    </tr>"
                                                                                ;

                                                                            }
                                                                        }   
                                                                    ?>
                                                                   
                                                                </tbody>
                                                            </table>
                                                        </div>
													</div>
												</div>
												<div class="tab-pane" id="profile" role="tabpanel">
                                                    <div class="p-20">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Categories</th>
                                                                        <th>Status</th>
                                                                        <th></th>                                                                    
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        if((!isset($expenses))||($expenses == false)){
                                                                            echo"";
                                                                        }else{
                                                                            foreach($expenses as $i){

                                                                                if(!isset($n)){
                                                                                    $n = 1;
                                                                                }else{
                                                                                    $n = $n + 1;
                                                                                }
                                                                                if($i['status_id'] == 1){
                                                                                    $css="color-success";
                                                                                    $btn ="Enable";
                                                                                    $status =2;
                                                                                }else{
                                                                                    $css = "color-danger";
                                                                                    $btn ="Disable";
                                                                                    $status=1;
                                                                                }
                                                                                $id =$i['category_id'];

                                                                                echo"
                                                                                    <tr>
                                                                                        <th scope='row'>{$n}</th>
                                                                                        <td>{$i['category_title']}</td>
                                                                                        <td>
                                                                                            <a href='?_submit=category-status&id={$id}&status={$status}' class='{$css}'>{$btn}</a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href='?_submit=category-delete&id={$id}' class='color-danger'>Remove</a>
                                                                                        </td>
                                                                                    </tr>"
                                                                                ;

                                                                            }
                                                                        }   
                                                                    ?>
                                                                   
                                                                </tbody>
                                                            </table>
                                                        </div>
													</div>
                                                </div>
												<div class="tab-pane p-20" id="messages" role="tabpanel">3</div>
											</div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <?php include("model.php")?>
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





</body>

</html>