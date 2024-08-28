<?php
$this->load->view('partials/header');
?>

<div class="container mt-5">
    <h2 class="mb-4">Add New Task</h2>
    <?php echo form_open('todos/create'); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
        <a href="<?php echo site_url('todos'); ?>" class="btn btn-secondary">Back to list</a>
    <?php echo form_close(); ?>
</div>

<?php
$this->load->view('partials/footer');
?>