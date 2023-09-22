
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container center">
    <div class="row align-items-start">
        <div class="col">
    <h1>The Done List</h1>
            <ul>
            <?php echo \App\ViewHelpers\CompletedTasksViewHelper::displayDoneInAList($tasks)?>
            </ul>
            <a href="/">
                <button class="btn btn-outline-secondary">Go Back</button>
    </div>
</body>
</html>


