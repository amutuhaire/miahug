<!-- Include unchanging header -->
<?php
  include("header.php");
?>
<!-- End of unchanging header -->

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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1></div>

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
