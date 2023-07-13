
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
                            <h4 class="card-title">Ajout Contrat</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="https://templates.iqonic.design/posdash/html/backend/page-list-users.php" data-toggle="validator">
                            <div class="row"> 
                            <div class="col-md-12">


                                    <div class="form-group">
                                            <p id="date"></p>

                                            <script>
                                                     var dateElement = document.getElementById("date");
                                                    var date = new Date();
                                                     var options = { year: 'numeric', month: 'long', day: 'numeric' };
                                                     var dateString = date.toLocaleDateString(undefined, options);
                                                     dateElement.textContent = "Date actuelle : " + dateString;
                                                    </script>
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label>Nom du Personnel*</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Hadi</option>
                                            <option>Mettre le code </option>
                                        </select>
                                    </div>
                                       
                                        <div class="form-group">
                                        <label>Telephone *</label>
                                        <input type="text" class="form-control" placeholder="Enter votre contact" required> </div>
                                        
                                                                                                           
                                        <div class="form-group">
                                        <label>Parcelle</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Mettre un code</option>
                                           
                                        </select></div>
                                   
                                      
                                        <div class="form-group">
                                        <label>Type de Contrat</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Location propre</option>
                                            <option>Location</option>
                                            <option>Rachat</option>
                                        </select></div>



                                        <div class="form-group">
                                        <label>Monant Avance*</label>
                                        <input type="text" class="form-control" placeholder="Enter le montant" required>
                                        <div class="help-block with-errors"></div>

                                        <div class="form-group">
                                         <label>Duree du contrat*</label>
                                        <input type="text" class="form-control" placeholder="Enter le temps impartie" required>
                                        <div class="help-block with-errors"></div>


                                       
                                    
                                    
                                </div> 
                               
                                
                                 
                                       
                                    </div>
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