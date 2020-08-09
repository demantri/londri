<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="module">
        <div class="module-head">
            <h3>Activity</h3>
        </div>

        <div class="module-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add"><i class="menu-icon icon-plus"></i> Tambah event</button>
            <!-- <input type="button" class="btn btn-success text-right" value="Simpan"> -->
            <!-- <a href="#" class="button btn btn-info"><i class="menu-icon icon-plus"></i> Tambah Event</a> -->
            <br>
            <div id="calendar"></div>
        </div>

        <!-- add modal -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Events</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                    <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
<link href='<?= base_url()?>fullcalendar/lib/main.css' rel='stylesheet' />
<script src="<?= base_url()?>fullcalendar/lib/main.js"></script>
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
