
 <?php

$upDate = strtotime('21-01-2023');

$name =  "Abbaas";

$empno = "9802174";

$now = time();

$removeOldDate = $now - 1814400; //remove after three weeks

$hide = 'style="display: none;"';


 ?>


<?php include('../css/header.php'); ?>
    <table class = "table table-bordered table-sm table-responsive m-t-3 m-b-3"> <!-- cellspacing='0' is important, must stay -->

      <thead class="thead-dark" <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

      <th>Week Ending</th>
      <th>Roster No</th>
      <th>Sunday</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
      </thead>
      
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>38</td>
        <td class=' black'>07:00 - 15:30 North Greenwich</td>
        <td class=' black'>05:00 - 12:30 North Greenwich</td>
        <td class=' black'>05:00 - 12:30 North Greenwich</td>
        <td class=' black'>05:00 - 12:30 North Greenwich</td>
        <td class=' black'>05:00 - 12:30 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>

      </tr>
     
        <?php


        for ($i = 0; $i < 5; $i++) {
          # code...

          include '../css/inc.php';
        }

        ?>



      </table>
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
