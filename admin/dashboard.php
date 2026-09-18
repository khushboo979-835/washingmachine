$result = $conn->query("SELECT id, title FROM blogs LIMIT 10");<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Hansraj Enterprises</title>

    <!-- Required admin assets -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="assets/js/config.js"></script>
    <script src="assets/vendor/js/helpers.js"></script>
</head>

<body>
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'common/session.php'; 
include 'common/config.php'; 

// Initialize stats
$total_blogs = 0;
$blogs_data = [];

if ($conn) {
    $result = $conn->query("SELECT id, page_title FROM blogs LIMIT 10");
    if ($result) {
        $total_blogs = $result->num_rows;
        while ($row = $result->fetch_assoc()) {
            $blogs_data[] = $row;
        }
    }
}
?>


<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <?php include 'common/sidebar.php'; ?>
    
    <div class="layout-page">
      <?php include 'common/header.php'; ?>
      
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          
          <!-- Dashboard Header -->
          <div class="row">
            <div class="col-12">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Admin /</span> Dashboard
              </h4>
            </div>
          </div>

          <!-- Stats Cards -->
          <div class="row">
            <div class="col-lg-8 col-md-6 order-0">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="card-info">
                      <small class="text-muted d-block">Total Blogs</small>
                      <h3 class="card-title text-nowrap flex-shrink-0"><?php echo $total_blogs; ?></h3>
                    </div>
                    <div class="card-icon">
                      <span class="badge bg-label-primary rounded-circle p-2">
                        <i class="bx bx-book-content bx-lg"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 order-1">
              <div class="card mb-4">
                <div class="card-body">
                  <a href="add-blogs.php" class="btn btn-primary w-100">
                    <i class="bx bx-plus me-2"></i>Add New Blog
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Blogs List Table -->
          <div class="card">
            <h5 class="card-header d-flex justify-content-between align-items-center">
              <span>Blogs List</span>
              <a href="add-blogs.php" class="btn btn-sm btn-primary">Add Blogs</a>
            </h5>
            
            <?php if (!empty($blogs_data)): ?>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Blog Title</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <?php foreach ($blogs_data as $index => $blog): ?>
                  <tr>
                    <td><span class="fw-bold"><?php echo ($index + 1); ?></span></td>
                    <td>
                        <span><?php echo htmlspecialchars(substr($blog['page_title'], 0, 60)); ?></span>
                        <?php if (strlen($blog['page_title']) > 60) echo '...'; ?>
                     
                    </td>
                    <td>
                      <a href="update-blogs.php?id=<?php echo $blog['id']; ?>" class="btn btn-sm btn-warning">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                      </a>
                      <button class="btn btn-sm btn-danger">
                        <i class="bx bx-trash me-1"></i> Delete
                      </button>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <?php else: ?>
            <div class="card-body">
              <p class="text-center text-muted my-3">No blogs found. <a href="add-blogs.php">Create one now</a></p>
            </div>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'common/footer.php'; ?>

</body>
</html>

