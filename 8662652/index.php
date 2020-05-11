
 <?php

$upDate = strtotime('31-03-2018');

$name =  "Helen Slaughter";

$empno = "8662652";

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
        <td class=''>1</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>15:30 - 23:15 Canary Wharf</td>
        <td class=' gray'>15:00 - 23:00 Canary Wharf</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>2</td>
        <td class=' gray'>15:30 - 00:30 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' red'>R</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>3</td>
        <td class=' red'>R</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' black'>09:00 - 17:00 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>07:00 - 15:00 Canary Wharf</td>



      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>4</td>
        <td class=' gray'>07:00 - 15:30 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>5</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>15:30 - 23:15 Canary Wharf</td>
        <td class=' gray'>15:00 - 23:00 Canary Wharf</td>



      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>6</td>
        <td class=' gray'>15:30 - 00:30 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' red'>R</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>7</td>
        <td class=' red'>R</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>8</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>9</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>10</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class=' red'>R</td>

      </tr>
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
      <td class=''>11</td>
      <td class=' red'>R</td>
      <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
      <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
      <td class=' black'>12:15 - 19:30 North Greenwich</td>
      <td class=' red'>R</td>
      <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
      <td class=' gray'>07:00 - 15:00 Canary Wharf</td>

      </tr>

      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
      <td class=''>12</td>
      <td class=' gray'>07:00 - 15:30 Canary Wharf</td>
      <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
      <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
      <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
      <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
      <td class=' red'>R</td>
      <td class=' red'>R</td>
      </tr>

      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
      <td class=''>13</td>
      <td class=' red'>R</td>
      <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
      <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
      <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
      <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
      <td class=' gray'>13:30 - 21:25 Canary Wharf</td>
      <td class=' red'>R</td>

      </tr>

      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
      <td class=''>14</td>
      <td class=' red'>R</td>
      <td class=' red'>R</td>
      <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
      <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
      <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
      <td class=' gray'>15:30 - 23:15 Canary Wharf</td>
      <td class=' gray'>15:00 - 23:00 Canary Wharf</td>
      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>15</td>
        <td class=' gray'>15:30 - 00:30 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>07:00 - 15:00 Canary Wharf</td>
      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>16</td>
        <td class=' gray'>07:00 - 15:30 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>17</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' gray'>15:30 - 23:15 Canary Wharf</td>
        <td class=' gray'>15:00 - 23:00 Canary Wharf</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>18</td>
        <td class=' gray'>15:30 - 00:30 Canary Wharf</td>
        <td class=' gray'>16:30 - 01:20 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' red'>R</td>
      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>19</td>
        <td class=' red'>R</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' gray'>12:15 - 20:15 Canary Wharf</td>
        <td class=' per'>08:30 - 16:30 Cross</td>
        <td class=' red'>R</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>07:00 - 15:00 Canary Wharf</td>



      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>20</td>
        <td class=' gray'>07:00 - 15:30 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' gray'>05:10 - 12:15 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>



      </tr>
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
        <td class=''>21</td>
        <td class=' red'>R</td>
        <td class=' gray'>07:30 - 15:45 Canary Wharf</td>
        <td class=' gray'>07:30 - 15:45 Canary Wharf</td>
        <td class=' gray'>07:30 - 15:45 Canary Wharf</td>
        <td class=' gray'>07:30 - 15:45 Canary Wharf</td>
        <td class=' gray'>07:30 - 15:45 Canary Wharf</td>
        <td class=' red'>R</td>
      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>22</td>
        <td class=' red'>R</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>15:00 - 23:00 North Greenwich</td>
        <td class=' red'>R</td>
      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>23</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>24</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>25</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class=' red'>R</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>26</td>
        <td class=' red'>R</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' red'>R</td>
      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>27</td>
        <td class=' black'>07:00 - 15:30 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' red'>R</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>28</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>15:30 - 23:15 North Greenwich</td>
        <td class=' black'>15:00 - 23:00 North Greenwich</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>29</td>
        <td class=' black'>15:30 - 00:30 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' black'>09:00 - 17:00 North Greenwich</td>
        <td class=' black'>08:30 - 15:30 North Greenwich</td>
        <td class=' black'>07:00 - 15:00 North Greenwich</td>



      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>30</td>
        <td class=' black'>07:00 - 15:30 North Greenwich</td>
        <td class=' black'>09:00 - 17:00 North Greenwich</td>
        <td class=' black'>09:00 - 17:00 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>07:00 - 15:00 North Greenwich</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>31</td>
        <td class=' black'>07:00 - 15:30 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        </tr>
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
        <td class=''>32</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>15:30 - 23:15 North Greenwich</td>
        <td class=' black'>15:00 - 23:00 North Greenwich</td>



      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>33</td>
        <td class=' black'>15:30 - 00:30 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' black'>12:15 - 19:30 North Greenwich</td>
        <td class=' black'>12:15 - 20:30 North Greenwich</td>
        <td class=' black'>15:00 - 23:00 North Greenwich</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>34</td>
        <td class=' black'>15:30 - 00:30 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>07:00 - 15:00 North Greenwich</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>35</td>
        <td class=' black'>07:00 - 15:30 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' black'>05:00 - 12:15 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>36</td>
        <td class=' red'>R</td>
        <td class=' black'>12:15 - 19:30 North Greenwich</td>
        <td class=' black'>12:15 - 19:30 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>16:30 - 01:20 North Greenwich</td>
        <td class=' black'>15:30 - 23:15 North Greenwich</td>
        <td class=' red'>R</td>


      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>37</td>
        <td class=' red'>R</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>38</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>39</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>

      </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>40</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class='bg-primary'>COVER WEEK</td>
        <td class=' red'>R</td>


      </tr>
        <?php


        for ($i = 0; $i < 4; $i++) {
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
