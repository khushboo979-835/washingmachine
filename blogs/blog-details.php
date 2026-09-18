<?php
// 1. Database Connection & Variable Setup
include_once '../admin/common/config.php'; 
$base_path = $_SERVER['DOCUMENT_ROOT'] . "/";

if(!isset($base_url)) { 
    $base_url = "https://hansrajenterprises.com/"; 
}

$blog = null; 
if(isset($_GET['slug']) && !empty($_GET['slug'])) {
    $slug = mysqli_real_escape_string($conn, $_GET['slug']);
    
    // Aapke admin panel ke hisab se query
    $sql = "SELECT * FROM blogs WHERE slug = '$slug' LIMIT 1";
    $result = $conn->query($sql);
    
    if($result && $result->num_rows > 0){
        $blog = $result->fetch_assoc();
    }
}

if(!$blog){
    include_once '../common/header.php';
    echo "<div class='container text-center' style='margin-top:200px;'><h2>Blog Not Found</h2><a href='index.php'>Go Back</a></div>";
    include_once '../common/footer.php';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= $base_url ?>">
    <?php include_once '../common/head.php'; ?>
    
    <title><?= htmlspecialchars($blog['meta_title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($blog['meta_description']) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($blog['meta_keywords']) ?>">
    
    <style>
        body { padding-top: 0 !important; background: #fff; }
        
        .blog-header-section {
            background: white;
            color: #333;
            padding: 20px 0;
            margin-bottom: 30px;
            border-bottom: 1px solid #e0e0e0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .blog-header-section h1 {
            font-size: 2rem;
            font-weight: 700;
            margin: 10px 0 15px 0;
            color: #0056b3;
            letter-spacing: -0.5px;
        }
        
        .blog-meta {
            display: flex;
            gap: 20px;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #666;
            flex-wrap: wrap;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .meta-item i { font-size: 1.1rem; }
        
        .breadcrumb { 
            background: transparent; 
            padding: 0; 
            margin-bottom: 10px;
        }
        
        .breadcrumb-item a { color: #0056b3; font-weight: 500; text-decoration: none; }
        .breadcrumb-item a:hover { text-decoration: underline; }
        .breadcrumb-item.active { color: #666; }
        
        .blog-banner { 
            width: 100% !important; 
            max-height: 450px !important;
            object-fit: contain !important; 
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin: 20px auto 30px auto;
            display: block;
            background: #f8f9fa;
        }
        
        .blog-subtitle {
            color: #0056b3;
            font-size: 1.1rem;
            font-weight: 600;
            margin: 20px 0 20px 0;
            padding-bottom: 0;
            border-bottom: none;
            display: block;
        }
        
        .detailed-content { 
            line-height: 1.9; 
            color: #333; 
            font-size: 1.05rem;
        }
        
        .detailed-content p {
            margin-bottom: 20px;
            text-align: justify;
        }
        
        .detailed-content h2 { 
            margin-top: 30px; 
            margin-bottom: 15px;
            font-weight: 700;
            color: #0056b3;
            font-size: 1.6rem;
            border-left: none;
            padding-left: 0;
        }
        
        .detailed-content h3 { 
            margin-top: 20px; 
            margin-bottom: 12px;
            font-weight: 600;
            color: #0056b3;
            font-size: 1.2rem;
        }
        
        .detailed-content ul, .detailed-content ol {
            margin: 15px 0 15px 25px;
        }
        
        .detailed-content li {
            margin-bottom: 10px;
            line-height: 1.7;
        }
        
        .blog-content-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 40px;
            margin: 30px 0;
        }
        
        .blog-content-card.intro {
            background: #f8f9fa;
            border-left: none;
        }
        
        @media (max-width: 768px) {
            .blog-header-section h1 { font-size: 1.5rem; }
            .blog-content-card { padding: 20px; }
            .blog-meta { font-size: 0.8rem; gap: 15px; }
            .detailed-content { font-size: 1rem; }
        }
    </style>
    
    <?php if(!empty($blog['json_tag'])): ?>
        <?php if(strpos(trim($blog['json_tag']), '<script') === false): ?>
            <script type="application/ld+json">
                <?= $blog['json_tag'] ?>
            </script>
        <?php else: ?>
            <?= $blog['json_tag'] ?>
        <?php endif; ?>
    <?php endif; ?>
</head>
<body>
    <?php include_once '../common/header.php'; ?>

    <!-- Blog Header Section -->
    <section class="blog-header-section">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>blogs/">Blogs</a></li>
                    <li class="breadcrumb-item active"><?= htmlspecialchars(substr($blog['page_title'], 0, 40)) ?></li>
                </ol>
            </nav>
            
            <h1><?= htmlspecialchars($blog['page_title']) ?></h1>
            
            <div class="blog-meta">
                <div class="meta-item">
                    <i class="bx bx-calendar"></i>
                    <span><?= date('d M Y', strtotime($blog['created_at'] ?? 'now')) ?></span>
                </div>
                <div class="meta-item">
                    <i class="bx bx-user"></i>
                    <span>Hansraj Enterprises</span>
                </div>
                <div class="meta-item">
                    <i class="bx bx-time"></i>
                    <span>5 min read</span>
                </div>
            </div>
        </div>
    </section>

    <main class="container py-5" style="margin-top: 20px;">
        <?php if(!empty($blog['content_title'])): ?>
            <p class="blog-subtitle"><?= htmlspecialchars($blog['content_title']) ?></p>
        <?php endif; ?>

        <?php 
        $mainImg = !empty($blog['banner']) ? $blog['banner'] : (!empty($blog['cover_image']) ? $blog['cover_image'] : '');
        if(!empty($mainImg)): 
        ?>
            <div>
                <img src="../admin/uploads/blogs/<?= $mainImg ?>" class="blog-banner" alt="<?= htmlspecialchars($blog['banner_alt_text'] ?? $blog['page_title']) ?>">
            </div>
        <?php endif; ?>

        <div class="blog-content-card intro">
            <div class="detailed-content">
                <?php 
                $content = '';
                if(!empty($blog['long_content'])){
                    $content = $blog['long_content'];
                } elseif(!empty($blog['detailed_content'])){
                    $content = $blog['detailed_content'];
                } elseif(!empty($blog['meta_description'])){
                    $content = $blog['meta_description'];
                }
                
                if($content){
                    echo $content;
                }
                ?>
            </div>
        </div>

        <?php if(!empty($blog['google_tag'])): ?>
            <div class="mt-5">
                <?= $blog['google_tag'] ?>
            </div>
        <?php endif; ?>
    </main>

    <?php include_once '../common/footer.php'; ?>
</body>
</html>