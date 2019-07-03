<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Accounts</span>
                        <span class="info-box-number"> <?php
                                                        $query = $this->db->query('SELECT * FROM tbluser');
                                                        echo $query->num_rows();
                                                        ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Products</span>
                        <span class="info-box-number"><?php
                                                        $query = $this->db->query('SELECT * FROM tblitem');
                                                        echo $query->num_rows();
                                                        ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>
    </div>
   