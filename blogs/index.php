<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("../common/config.php"); 
    include("../common/head.php"); 
    
    // Blog list query
    $query = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 9";
    $result = $conn->query($query);
    ?>
    <title>Our Blogs - Hansraj Enterprises</title>
    <meta name="description" content="Latest articles, repair guides, and appliance maintenance tips from Hansraj Enterprises.">
    
    <style>
        .breadcrumb-section { background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('../assets/images/banner/blogs-banner.jpg') center/cover; background-attachment: fixed; }
        .breadcrumb-box { background: rgba(255, 255, 255, 0.08); border-radius: 10px; backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.15); }
        .breadcrumb-list { list-style: none; padding-left: 0; }
        .breadcrumb-list li a { color: #fcd34d; text-decoration: none; }
        .breadcrumb-list .breadcrumb-item + .breadcrumb-item::before { content: "›"; color: #fcd34d; margin: 0 8px; }
        
        .blogs .card { border-radius: 12px; overflow: hidden; transition: 0.3s ease-in-out; height: 100%; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.08); background: #fff;}
        .blogs .card:hover { transform: translateY(-8px); box-shadow: 0 12px 25px rgba(0,0,0,0.15); }
        .blogs .card-title { color: #0056b3; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px; }
        .blogs .card-text { color: #555 !important; line-height: 1.5; font-size: 0.95rem; }
        .blogs .text-muted { color: #888 !important; }
        .blogs a { text-decoration: none; }
        .blogs .card img { width: 100%; aspect-ratio: 4/3; object-fit: contain; background: #fff; }
        :root { --main-blue: #0056b3; --text-dark: #333; }
    </style>
</head>

<body>
    <?php include("../common/header.php"); ?>
    
    <section class="breadcrumb-section py-5">
        <div class="container">
            <div class="breadcrumb-box p-4 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0 text-white">Our Blogs</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active text-white">Blogs</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-5 blogs">
        <div class="container">
            <div class="head-title text-center mb-5">
                <h2 class="fw-bold">Latest <span style="color: #0056b3;">Articles</span></h2>
                <div class="underline mx-auto" style="width: 60px; height: 4px; background: #0056b3; margin-bottom: 15px; border-radius: 2px;"></div>
                <p class="fst-italic">Expert tips, repair guides, and insights for your home appliances.</p>
            </div>
            <div class="row g-4">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($blog = $result->fetch_assoc()): ?>
                    <div class="col-md-4">
                        <a href="blog-details.php?slug=<?= urlencode($blog['slug']); ?>">
                            <div class="card h-100">
                                <img src="../admin/uploads/blogs/<?= htmlspecialchars($blog['cover_image']); ?>" 
                                     alt="<?= htmlspecialchars($blog['cover_alt']); ?>" 
                                     class="card-img-top">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?= htmlspecialchars($blog['page_title']); ?></h5>
                                    <p class="card-text flex-grow-1">
                                        <?= htmlspecialchars(substr(($blog['content_title'] ?? $blog['cover_desc'] ?? ''), 0, 120)) . '...'; ?>
                                    </p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <small class="text-muted">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        <?= date('d M Y', strtotime($blog['created_at'])); ?>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12 text-center py-5">
                        <i class="bx bx-book bx-lg text-muted mb-3 d-block"></i>
                        <h4>No blog posts yet.</h4>
                        <p class="text-muted">Check back soon for new articles!</p>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php if ($result && $result->num_rows == 9): ?>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg">Load More Blogs</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include("../common/footer.php"); ?>
</body>
</html>
