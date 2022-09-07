
 <?php

$upDate = strtotime('13-02-2021');

$name =  "Jo Edeki";

$empno = "4681745";

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
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
