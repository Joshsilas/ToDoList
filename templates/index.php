<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container center">
    <div class="row align-items-start">
        <div class="col">
    <h1 class="container text center">The To Do List</h1>
    <form method="POST" action="/addTask" class="input-group w-25">
        <input type="text" name="task" class="form-control">
        <button type="submit" class="btn btn-outline-secondary">Add</button>
    </form>
            <?php echo \App\ViewHelpers\ToDoListViewHelper::displayToDoInAList($tasks) ?>
    </div>
        <div>
            <a href="showCompletedTask">
                <button class="btn btn-info">See Completed</button>
            </a>
        </div>
</body>
</html>
