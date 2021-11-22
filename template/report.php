<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <div class="jumbotron">
        <h1>Financial Report</h1>      
        <p>From Date:<?=$_GET['start']?> to <?=$_GET['end']?></p>
    </div>
    <h3>Income</h3>         
    <table class="table">
        <thead>
        <tr>
            <th>Article</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($income as $i){
                    echo"
                    <tr>
                        <td>{$i['category_title']}</td>
                        <td>{$i['total']}</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    <p></p>
    <h3>Expenses</h3>
    <table class="table">
        <thead>
        <tr>
            <th>Article</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($expenses as $e){
                    echo"
                    <tr>
                        <td>{$e['category_title']}</td>
                        <td>{$e['total']}</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>