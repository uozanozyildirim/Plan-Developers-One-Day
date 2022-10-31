<head>
    <title>To Do Planning Table</title>
</head>

<body>

<style>
    table, th, td {
        border: 1px solid black;
        margin: 10px;
    }
</style>


<h1>Task Manager</h1>

<table style="width: 100%;">
@foreach($taskManager as $tmp)
    <tr>
            <th>Developer</th>
            <th>Task</th>
            <th>Estimated Hours To Finish</th>
    </tr>

    <tr>
        <td>{{ $tmp['developer_name'] }}</td>
        <td>{{ $tmp['task_name'] }}</td>
        <td>{{ $tmp['estimated_time_to_finish'] }}</td>
    </tr>
@endforeach
</table>


</body>
