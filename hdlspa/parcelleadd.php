
<?php include "head.php" ?>

  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      <div class="iq-sidebar  sidebar-default ">
        <?php include "sidebar.php" ?>

      </div>
      <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
        <?php include "header.php" ?>

      </div>  
          <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Ajout Parcelle</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="https://templates.iqonic.design/posdash/html/backend/page-list-users.php" data-toggle="validator">
                            <div class="row"> 

                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nom de la parcelle *</label>
                                        <input type="text" class="form-control" placeholder="Enter Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>    
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Latitude *</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone No" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                               
                                </div> 
                                <div class="col-md-13">
                                    <div class="form-group">
                                        <label>Produit planter</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Mettre la list des produit de la db ici</option>
                                            
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-13">
                                    <div class="form-group">
                                        <label>Localisation *</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone No" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                                
                               
                               
                                </div>
                                <div class="col-md-12">
                                   <div class="checkbox d-inline-block mb-3">
                                       
                                    </div>
                                </div>                               
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add Customer</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <?php include "footer.php" ?>

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
  </body>
</html>