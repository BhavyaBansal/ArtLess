<?php
session_start();
if(isset($_SESSION['email']))
{
    // header('Location:testSkill.php');
} 
else{
    header('Location:login.php');
    $_SESSION['msgheading']="Warning";
    $_SESSION['msg']="Login First Before Accessing This Page.";
}
?>
<?php
include "dom/simple_html_dom.php ";
// session_start();
// require '';
// Create DOM from URL or file
$html = file_get_html("https://clist.by/");   
echo $html->find("title",0);
$h =  $html->find(".contest.row");
$val = count($h);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
  <?php include 'Nav.php' ?>
  <div class="container">
  <table class="mt-3 table table-hover  table-bordered" style="text-align:center;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
  <thead style="background-color: honeydew;">
    <tr class=" text-info ">
      <th>S.no</th>
      <th scope="col">Start/End Time</th>
      <th scope="col">Duration</th>
      <th scope="col">Time Left</th>
      <th scope="col">Event</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $c = 0;
    for ($x = 0; $x <=$val; $x++) {
      $c = $c+1;
    $startdate=$html->find(".col-md-5.col-sm-12.start-time  a",$x);
    $duration=$html->find(".col-md-3.col-sm-6.duration",$x);
    $timeleft=$html->find(".col-md-4.col-sm-6.timeleft.countdown",$x);
    $weblink=$html->find(".resource_search .text-muted",$x);
    $name=$html->find(".title_search",$x);


    echo '<tr>
      <th>'.$c.'</th>
      <td scope="row">'.$startdate.'</td>
      <td>'.$duration.'</td>
      <td>'.$timeleft.'</td>
      <td>'.$name.'</td>
      
      <td>'.$weblink.'</td>
    </tr>';
    }  
    ?>
  </tbody>
</table>
</div>

</body>
</html>















<!-- // echo $html->find(".contest.row.running.bg-success",0);
// echo $html->find(".contest.row.running.bg-success")
//  $duration = $html->find(".col-md-3.col-sm-6.duration");
//     // console.log()
    // echo  $html->find(".col-md-4.col-sm-6.timeleft.countdown",0);
//     $Name = selectortool(".title_search");
//  $weblink = selectortool(".resource_search .text-muted");

// echo $weblink;

?> -->
<!-- <p>hello</p> -->