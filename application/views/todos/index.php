<?php
$this->load->view('partials/header');
?>

<div class="container mt-5">
  <h2 class="mb-4">To-Do List</h2>
  <a href="<?php echo site_url('todos/create'); ?>" class="btn btn-primary mb-3">Add New Task</a>
  <?php if (!empty($todos)): ?>
    <ul class="list-group">
      <?php foreach ($todos as $todo): ?>
        <li class="list-group-item <?php echo $todo['is_completed'] ? 'bg-success text-white' : ''; ?>">
          <div class="d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">
              <a data-bs-toggle="collapse" href="#collapse-<?php echo $todo['id']; ?>" role="button" class="btn p-0 fs-5 fw-semibold <?php echo $todo['is_completed'] ? 'text-white' : ''; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $todo['id']; ?>">
                <?php echo $todo['title']; ?>
              </a>

              <?php if ($todo['is_completed']): ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg ms-2" viewBox="0 0 16 16">
                  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                </svg>
              <?php endif; ?>
            </span>
            <span>
              <a href="<?php echo site_url('todos/edit/' . $todo['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="<?php echo site_url('todos/delete/' . $todo['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
            </span>
          </div>

          <div class="collapse mt-2" id="collapse-<?php echo $todo['id']; ?>">

              <?php echo $todo['description']; ?>
     
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <p class="alert alert-warning">No tasks available.</p>
  <?php endif; ?>
</div>

<?php
$this->load->view('partials/footer');
?>