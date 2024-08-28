<?php
$this->load->view('partials/header');
?>

<div class="container mt-5">
  <h2 class="mb-4">Edit Task</h2>
  <?php echo form_open('todos/edit/' . $todo['id']); ?>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $todo['title']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control"><?php echo $todo['description']; ?></textarea>
  </div>
  <div class="form-check mb-3">
    <input type="checkbox" name="is_completed" class="form-check-input" id="is_completed" value="1" <?php echo ($todo['is_completed']) ? 'checked' : ''; ?>>
    <label for="is_completed" class="form-check-label">Mark as completed</label>
  </div>
  <button type="submit" class="btn btn-primary">Update Task</button>
  <a href="<?php echo site_url('todos'); ?>" class="btn btn-secondary">Back to list</a>
  <?php echo form_close(); ?>
</div>


<?php
$this->load->view('partials/footer');
?>