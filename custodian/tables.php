<!-- database connection -->
<?php
  include_once 'controller.php';
  $result = mysqli_query($conn,  "select * from resident");
?>



<!-- Include unchanging header -->
<?php
  include("header.php");
?>
<!-- End of unchanging header -->

<!-- Custom styles for this page -->
<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar Included-->
    <?php
      $GLOBALS['activeTab'] = "tables"; //Name of active link
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
          <h1 class="h3 mb-2 text-gray-800">Tables of data</h1>
          <p class="mb-4">Data has been grouped in the respective table </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Datatables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <!-- Put the table inside here-->
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>RESIDENT NAME</th>
                      <th>GENDER</th>
                      <th>EMAIL</th>
                      <th>CONTACT</th>
                      <th>ROOM NAME</th>
                      <th>ROOM TYPE</th>
                      <th>FLOOR NUMBER</th>
                      <th>HOSTEL</th>
                      <th>IS STUDENT</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>RESIDENT NAME</th>
                      <th>GENDER</th>
                      <th>EMAIL</th>
                      <th>CONTACT</th>
                      <th>ROOM NAME</th>
                      <th>ROOM TYPE</th>
                      <th>FLOOR NUMBER</th>
                      <th>HOSTEL</th>
                      <th>IS STUDENT</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      while ($rows=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?php echo $rows['id']; ?></td>
                      <td><?php echo $rows['full_name']; ?></td>
                      <td><?php echo $rows['gender']; ?></td>
                      <td><?php echo $rows['email']; ?></td>
                      <td><?php echo $rows['telephone']; ?></td>
                      <td><?php echo $rows['room_id']; ?></td>
                      <td><?php echo $rows['room_type']; ?></td>
                      <td><?php echo $rows['floor_num']; ?></td>
                      <td><?php echo $rows['hostel']; ?></td>
                      <td><?php echo $rows['is_student']; ?></td>

                    </tr>
                    <?php
                      }
                    ?>

                  </tbody>
                </table>
                
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

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

  <!-- Datatables plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Datatables Initialize -->
  <script src="../js/init/datatables-init.js"></script>

</body>

</html>
