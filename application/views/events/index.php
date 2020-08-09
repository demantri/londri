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
			<h3>Form Edit</h3>
        </div>
        
        <div class="module-body">
            <div id="calendar"></div>
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
