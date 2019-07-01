<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="box box-info">
                <div class="box-header with-border">

                    <h1>Accounts <span class="fa fa-users"></span> </h1>

                    <h3>
                        <?php
                        $query = $this->db->query('SELECT * FROM tbluser');
                        echo $query->num_rows();
                        ?>
                    </h3>
                </div>
            </div>

            <div class="box box-info">
                <div class="box-header with-border">
                    <h1>Products <span class="fa fa-laptop"></span></h1>
                    <h3> <?php
                            $query = $this->db->query('SELECT * FROM tblitem');
                            echo $query->num_rows();
                            ?>
                    </h3>
                </div>

            </div>
        </div>
    </div>
</div>