<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>
</head>

<body>
  <h2>To-Do List</h2>
  <a href="<?php echo site_url('todos/create'); ?>">Add New Task</a>
  <ul>
    <?php foreach ($todos as $todo): ?>
      <li>
        <a href="<?php echo site_url('todos/view/' . $todo['id']); ?>">
          <?php echo $todo['title']; ?>
        </a>
        <a href="<?php echo site_url('todos/edit/' . $todo['id']); ?>">Edit</a>
        <a href="<?php echo site_url('todos/delete/' . $todo['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a>
      </li>
    <?php endforeach; ?>
  </ul>

  <!-- <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Makan</td>
        <td>yey makan asik</td>
        <td></td>
      </tr>
      <tr>
        <td>Makan</td>
        <td>yey makan asik</td>
        <td></td>
      </tr>
      <tr>
        <td>Makan</td>
        <td>yey makan asik</td>
        <td></td>
      </tr>
      <tr>
        <td>Makan</td>
        <td>yey makan asik</td>
        <td></td>
      </tr>
    </tbody>
  </table> -->
</body>

</html>