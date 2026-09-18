<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<?php 
include 'common/session.php'; 
include 'common/config.php'; 

// Pagination & Search
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$limit = 10;
$offset = ($page - 1) * $limit;
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$where = $search ? "WHERE page_title LIKE '%$search%' OR slug LIKE '%$search%'" : '';
$total_query = "SELECT COUNT(*) as total FROM blogs $where";
$total_result = $conn->query($total_query);
$total = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total / $limit);

// Handle delete
if (isset($_GET['delete_id'])) {
  $delete_id = intval($_GET['delete_id']);
  $get_img_sql = "SELECT banner, cover_image FROM blogs WHERE id = ?";
  $stmt = $conn->prepare($get_img_sql);
  $stmt->bind_param("i", $delete_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $project = $result->fetch_assoc();
  
  if ($project) {
    if (!empty($project['banner']) && file_exists('uploads/blogs/' . $project['banner'])) {
      unlink('uploads/blogs/' . $project['banner']);
    }
    if (!empty($project['cover_image']) && file_exists('uploads/blogs/' . $project['cover_image'])) {
      unlink('uploads/blogs/' . $project['cover_image']);
    }
  }
  
  $delete_sql = "DELETE FROM blogs WHERE id = ?";
  $stmt = $conn->prepare($delete_sql);
  $stmt->bind_param("i", $delete_id);
  $stmt->execute();
  
  header("Location: " . $_SERVER['PHP_SELF'] . (isset($_GET['page']) ? '?page=' . $_GET['page'] : '') . (isset($_GET['search']) && $_GET['search'] ? '&search=' . urlencode($_GET['search']) : ''));
  exit();
}

// Fetch blogs
$query = "SELECT * FROM blogs $where ORDER BY id DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($query);
?>
<?php include 'common/head.php'; ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include 'common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include 'common/header.php'; ?>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-12 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <h4 class="fw-bold mb-0">Blogs Management</h4>
                  <a href="add-blogs.php" class="btn btn-primary">
                    <i class="bx bx-plus me-1"></i>Add New Blog
                  </a>
                </div>
                
                <!-- Search Form -->
                <div class="card mb-4">
                  <div class="card-body">
                    <form method="GET" class="row g-3">
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search by title or slug...">
                      </div>
                      <div class="col-md-3">
                        <button type="submit" class="btn btn-outline-primary w-100">
                          <i class="bx bx-search me-1"></i>Search
                        </button>
                      </div>
                      <?php if ($search): ?>
                      <div class="col-md-4">
                        <a href="blogs-list.php" class="btn btn-secondary w-100">Clear</a>
                      </div>
                      <?php endif; ?>
                    </form>
                  </div>
                </div>
                
                <!-- Blogs Table -->
                <div class="card">
                  <div class="card-body">
                    <?php if ($result->num_rows > 0): ?>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Cover Image</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Date</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = $offset + 1; while ($row = $result->fetch_assoc()): ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td>
                              <?php if (!empty($row['cover_image']) && file_exists('uploads/blogs/' . $row['cover_image'])): ?>
                                <img src="uploads/blogs/<?php echo htmlspecialchars($row['cover_image']); ?>" alt="Cover" width="80" class="rounded">
                              <?php else: ?>
                                No Image
                              <?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars(substr($row['page_title'], 0, 50)) . (strlen($row['page_title']) > 50 ? '...' : ''); ?></td>
                            <td><?php echo htmlspecialchars($row['slug']); ?></td>
                            <td><?php echo date('d M Y', strtotime($row['created_at'] ?? $row['id'])); ?></td>
                            <td>
                              <a href="update-blogs.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning me-1">Edit</a>
                              <a href="?delete_id=<?php echo $row['id']; ?><?php echo ($page > 1 ? '&page=' . $page : ''); ?><?php echo ($search ? '&search=' . urlencode($search) : ''); ?>" 
                                 class="btn btn-sm btn-danger" 
                                 onclick="return confirm('Delete this blog? Images will be removed too.')">
                                Delete
                              </a>
                            </td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                    
                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                    <nav>
                      <ul class="pagination justify-content-center">
                        <?php if ($page > 1): ?>
                        <li class="page-item">
                          <a class="page-link" href="?page=<?php echo $page-1; ?><?php echo $search ? '&search=' . urlencode($search) : ''; ?>">Previous</a>
                        </li>
                        <?php endif; ?>
                        
                        <?php for ($i = max(1, $page-2); $i <= min($total_pages, $page+2); $i++): ?>
                        <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                          <a class="page-link" href="?page=<?php echo $i; ?><?php echo $search ? '&search=' . urlencode($search) : ''; ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                        
                        <?php if ($page < $total_pages): ?>
                        <li class="page-item">
                          <a class="page-link" href="?page=<?php echo $page+1; ?><?php echo $search ? '&search=' . urlencode($search) : ''; ?>">Next</a>
                        </li>
                        <?php endif; ?>
                      </ul>
                    </nav>
                    <?php endif; ?>
                    
                    <?php else: ?>
                    <div class="text-center py-5">
                      <i class="bx bx-book bx-lg text-muted mb-3"></i>
                      <h5>No blogs found<?php echo $search ? ' matching "' . htmlspecialchars($search) . '"' : ''; ?>.</h5>
                      <a href="add-blogs.php" class="btn btn-primary mt-2">Add Your First Blog</a>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include 'common/footer.php'; ?>
</body>
</html>
