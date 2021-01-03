<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #add input, textarea {
        width: 97%;
    }
</style>
<body>
    <div class="module">
        <div class="module-head">
            <h3>Activity</h3>
        </div>

        <div class="module-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add"><i class="menu-icon icon-plus"></i> Tambah event</button>
            <!-- <input type="button" class="btn btn-success text-right" value="Simpan"> -->
            <!-- <a href="#" class="button btn btn-info"><i class="menu-icon icon-plus"></i> Tambah Event</a> -->
            <div id="calendar"></div>
        </div>

        <!-- add modal -->
        <div id="add" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add events</h4>
                    </div>

                    <!-- modal body -->
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Add title here">
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Description</label>
                                <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"> -->
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add description here"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Another label</label>
                                <input type="text" class="form-control datepicker" id="formGroupExampleInput2" placeholder="Another input">
                                <!-- <input type="text" name="datefilter" value="" id="datepicker"/> -->  
                            </div>
                        </form>
                    </div>

                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
<link href='<?= base_url()?>fullcalendar/lib/main.css' rel='stylesheet' />
<script src="<?= base_url()?>fullcalendar/lib/main.js"></script>
<script>
    $( function() {
        $( ".datepicker" ).datepicker({
            dateFormat: "yy-mm-dd",
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var events = <?php echo json_encode($data) ?>;
        console.log(events)
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            showNonCurrentDates : false,
            events : events
        });
        calendar.render();
      });
</script>
