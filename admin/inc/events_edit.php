<?php
session_start();
require 'db.config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Event Edit 
                            <a href="events.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $event_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM events WHERE id='$event_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $event = mysqli_fetch_array($query_run);
                                ?>
                                <form action="events_crud.php" method="POST">
                                    <input type="hidden" name="event_id" value="<?= $row['id']; ?>">

                                    <div class="mb-3">
                                        <label>Category</label>
                                        <input type="text" name="category" value="<?=$row['event_category'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <input type="date" name="date" value="<?=$row['date'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>event name</label>
                                        <input type="text" name="name" value="<?=$row['event_name'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_event" class="btn btn-primary">
                                            Update Event
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>