<?php
$this->load->view('partials/header');
?>

<div class="container mt-5">
  <h2 class="mb-4">Task Details</h2>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $todo['title']; ?></h5>
      <p class="card-text"><?php echo $todo['description']; ?></p>
      <p><strong>Status:</strong> <?php echo ($todo['is_completed']) ? 'Completed' : 'Incomplete'; ?></p>
      <a href="<?php echo site_url('todos/edit/' . $todo['id']); ?>" class="btn btn-warning">Edit</a>
      <a href="<?php echo site_url('todos/delete/' . $todo['id']); ?>" class="btn btn-danger">Delete</a>
      <a href="<?php echo site_url('todos'); ?>" class="btn btn-secondary">Back to list</a>
    </div>
  </div>
</div>

<?php
$this->load->view('partials/footer');
?>