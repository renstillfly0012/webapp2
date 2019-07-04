<div class="container">
    <div class="row">
        <?= $calendar ?>
        <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-primary">
            Add Event
        </button>

    </div>
</div>
</div>

<div class="modal fade in" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Add Event</h4>
            </div>
            <div class="modal-body">
                <form action="" method="get">
                    <div class="form-group">
                        <label>Event Name</label>
                        <div class="input-group">
                            <div class="input-group-addon">

                            </div>
                            <input type="text" class="form-control" placeholder="Enter Event Name" required>
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="dd/mm/yy" pattern="^((0|1)\d{1})/((0|1|2)\d{1})/((19|20)\d{2})" required>
                        </div>
                        <!-- /.input group -->
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="datepicker datepicker-dropdown dropdown-menu datepicker-orient-left datepicker-orient-top" style="top: 1188px; left: 63px; z-index: 10; display: block;">
    <div class="datepicker-days" style="">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th colspan="7" class="datepicker-title" style="display: none;"></th>
                </tr>
                <tr>
                    <th class="prev">«</th>
                    <th colspan="5" class="datepicker-switch">July 2019</th>
                    <th class="next">»</th>
                </tr>
                <tr>
                    <th class="dow">Su</th>
                    <th class="dow">Mo</th>
                    <th class="dow">Tu</th>
                    <th class="dow">We</th>
                    <th class="dow">Th</th>
                    <th class="dow">Fr</th>
                    <th class="dow">Sa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="old day" data-date="1561852800000">30</td>
                    <td class="day" data-date="1561939200000">1</td>
                    <td class="day" data-date="1562025600000">2</td>
                    <td class="day" data-date="1562112000000">3</td>
                    <td class="day" data-date="1562198400000">4</td>
                    <td class="day" data-date="1562284800000">5</td>
                    <td class="day" data-date="1562371200000">6</td>
                </tr>
                <tr>
                    <td class="day" data-date="1562457600000">7</td>
                    <td class="day" data-date="1562544000000">8</td>
                    <td class="day" data-date="1562630400000">9</td>
                    <td class="day" data-date="1562716800000">10</td>
                    <td class="day" data-date="1562803200000">11</td>
                    <td class="day" data-date="1562889600000">12</td>
                    <td class="day" data-date="1562976000000">13</td>
                </tr>
                <tr>
                    <td class="day" data-date="1563062400000">14</td>
                    <td class="day" data-date="1563148800000">15</td>
                    <td class="day" data-date="1563235200000">16</td>
                    <td class="day" data-date="1563321600000">17</td>
                    <td class="day" data-date="1563408000000">18</td>
                    <td class="day" data-date="1563494400000">19</td>
                    <td class="day" data-date="1563580800000">20</td>
                </tr>
                <tr>
                    <td class="day" data-date="1563667200000">21</td>
                    <td class="day" data-date="1563753600000">22</td>
                    <td class="day" data-date="1563840000000">23</td>
                    <td class="day" data-date="1563926400000">24</td>
                    <td class="day" data-date="1564012800000">25</td>
                    <td class="day" data-date="1564099200000">26</td>
                    <td class="day" data-date="1564185600000">27</td>
                </tr>
                <tr>
                    <td class="day" data-date="1564272000000">28</td>
                    <td class="day" data-date="1564358400000">29</td>
                    <td class="day" data-date="1564444800000">30</td>
                    <td class="day" data-date="1564531200000">31</td>
                    <td class="new day" data-date="1564617600000">1</td>
                    <td class="new day" data-date="1564704000000">2</td>
                    <td class="new day" data-date="1564790400000">3</td>
                </tr>
                <tr>
                    <td class="new day" data-date="1564876800000">4</td>
                    <td class="new day" data-date="1564963200000">5</td>
                    <td class="new day" data-date="1565049600000">6</td>
                    <td class="new day" data-date="1565136000000">7</td>
                    <td class="new day" data-date="1565222400000">8</td>
                    <td class="new day" data-date="1565308800000">9</td>
                    <td class="new day" data-date="1565395200000">10</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7" class="today" style="display: none;">Today</th>
                </tr>
                <tr>
                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="datepicker-months" style="display: none;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th colspan="7" class="datepicker-title" style="display: none;"></th>
                </tr>
                <tr>
                    <th class="prev">«</th>
                    <th colspan="5" class="datepicker-switch">2019</th>
                    <th class="next">»</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month focused">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7" class="today" style="display: none;">Today</th>
                </tr>
                <tr>
                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="datepicker-years" style="display: none;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th colspan="7" class="datepicker-title" style="display: none;"></th>
                </tr>
                <tr>
                    <th class="prev">«</th>
                    <th colspan="5" class="datepicker-switch">2010-2019</th>
                    <th class="next">»</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year focused">2019</span><span class="year new">2020</span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7" class="today" style="display: none;">Today</th>
                </tr>
                <tr>
                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="datepicker-decades" style="display: none;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th colspan="7" class="datepicker-title" style="display: none;"></th>
                </tr>
                <tr>
                    <th class="prev">«</th>
                    <th colspan="5" class="datepicker-switch">2000-2090</th>
                    <th class="next">»</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade focused">2010</span><span class="decade">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7" class="today" style="display: none;">Today</th>
                </tr>
                <tr>
                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="datepicker-centuries" style="display: none;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th colspan="7" class="datepicker-title" style="display: none;"></th>
                </tr>
                <tr>
                    <th class="prev">«</th>
                    <th colspan="5" class="datepicker-switch">2000-2900</th>
                    <th class="next">»</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7" class="today" style="display: none;">Today</th>
                </tr>
                <tr>
                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            format: 'MM/DD/YYYY h:mm A'
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>