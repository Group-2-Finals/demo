<?php
$members = array(
   "Mark Louie Villanueva",
   "Christian James Torrillo",
   "Aldin Leycano",
   "Denise Gabrielle Suarez",
   "Lira Angela Torralba",
   "Christian James Torrillo"
);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    
    <!-- STYLINGS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="shared/assets/css/style.css">
</head>

<body>
    <h1 class="text-center py-2">Team members</h1>
    <div class="container">
        <div class="row">
            <?php foreach($members as $member){ ?>
            <div class="col">
                <div class="card p-5 m-2">
                    <h3><?php echo $member ?></h3>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="shared/assets/js/script.js"></script>
</body>

</html>