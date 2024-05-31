<style>
    body{
        background-color: #fdba74;
    }
</style>
<nav class="navbar navbar-expand-lg" style="background:teal;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('admin/home/')?>" style='color:white;'>ADMIN PANEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Writer
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('admin/add_writer')?>">New Writer</a></li>
            <li><a class="dropdown-item" href="<?= base_url('admin/writer-list')?>">Writer List </a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/event') ?>">Event</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Post
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('admin/post')?>">New Post</a></li>
            <li><a class="dropdown-item" href="<?= base_url('admin/post-list')?>">Post List </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url('admin/today')?>">Todays Post</a></li>
          </ul>
        </li>
        
      </ul>
      <div class="d-flex" role="search">
        <a href="<?= base_url('admin/logout') ?>" class="btn btn-danger" role="button">Logout</a>
    </div>
    </div>
  </div>
</nav>