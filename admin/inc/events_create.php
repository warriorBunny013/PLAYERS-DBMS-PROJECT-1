<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>events create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('db.config.php'); ?>
        <?php include('essentials.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Event Add 
                            <a href="events.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="events_crud.php" method="POST">

                            <div class="mb-3">
                                <label>Category</label>
                                <input type="text" name="event_category" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Event_name</label>
                                <input type="text" name="event_name" class="form-control">
                            </div>
                    
                            <div class="mb-3">
                                <button type="submit" name="save_events" class="btn btn-primary">Save events</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
