<!-- Include unchanging header -->
<?php
  include("header.php");

include_once 'controller.php';
$result = mysqli_query($conn,  "select * from hostel");
?>
<!-- End of unchanging header -->
<title>Resident data</title>
  <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar Included-->
    <?php
      $GLOBALS['activeTab'] = "dashboard"; //Name of active link
      includeWithVariables("sidebar.php", $GLOBALS['activeTab']);
    ?>
    <!-- End of Sidebar Included-->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar Included-->
        <?php
          include("topbar.php");
        ?>
        <!-- End of Topbar Included-->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <table  id="row" align="center" border="1px" style="300px;">
    <tr>
      <th colspan="6"><h2>hostel data</h2></th>
    </tr>
    <tr>
      <th>ID</th>
      <th>HOSTEL NAME</th>
      <th>LOCATION</th>
      <th>FLOORS</th>
      <th>CUSTODIAN NAME</th>
      <th>UNIVERSITY ID</th>
     
    </tr>
    <?php
      while ($rows=mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <td><?php echo $rows['id']; ?></td>
          <td><?php echo $rows['name']; ?></td>
          <td><?php echo $rows['location']; ?></td>
          <td><?php echo $rows['num_floors']; ?></td>
          <td><?php echo $rows['cust_name']; ?></td>
          <td><?php echo $rows['university_id']; ?></td>

        </tr>
    <?php
      }
    ?>

  </table>






          </div>

          <!-- Content Row --> <!-- Put the content inside row-->
          <div class="row">
            
          </div>
          <!-- End of row -->  
        </div>
        <!-- End of container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; MIAH <?php echo date("Y"); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroller and Logout Modal Included -->
  <?php
    include("logout-modal-scroller.php");
  ?>
  <!-- End of Scroller and Logout Modal Included -->
  
  <!-- Page Scripts Included-->
  <?php
    include("scripts.php");
  ?>
  <!-- End of Page Scripts Included-->
</body>

</html>
