<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<?php include 'common/head.php'; ?>
<?php include 'common/session.php'; ?>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    include 'common/config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Path updated to blogs
        $uploadDir = 'uploads/blogs/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        function uploadImage($fileInputName)
        {
            global $uploadDir;
            if (!isset($_FILES[$fileInputName]) || $_FILES[$fileInputName]['error'] !== UPLOAD_ERR_OK) {
                return '';
            }
            $fileTmpPath = $_FILES[$fileInputName]['tmp_name'];
            $fileName = $_FILES[$fileInputName]['name'];
            $imageInfo = @getimagesize($fileTmpPath);

            if ($imageInfo === false) { return ''; }

            $safeFileName = time() . '_' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', $fileName);
            $targetFile = $uploadDir . $safeFileName;

            // Sirf filename return karenge taaki DB mein chota path rahe
            return move_uploaded_file($fileTmpPath, $targetFile) ? $safeFileName : '';
        }

        // Get Form Inputs
        $google_tag = $conn->real_escape_string($_POST['google_tag']);
        $json_tag = $conn->real_escape_string($_POST['json_tag']);
        $page_title = $conn->real_escape_string($_POST['page_title']);
        $slug = $conn->real_escape_string($_POST['slug']);
        $meta_title = $conn->real_escape_string($_POST['meta_title']);
        $meta_description = $conn->real_escape_string($_POST['meta_description']);
        $meta_keywords = $conn->real_escape_string($_POST['meta_keywords']);
        $canonical_url = $conn->real_escape_string($_POST['canonical_url']);
        $og_title = $conn->real_escape_string($_POST['og_title']);
        $og_description = $conn->real_escape_string($_POST['og_description']);
        $og_image = uploadImage('og_image');
        $og_alt = $conn->real_escape_string($_POST['og_alt']);
        $twitter_title = $conn->real_escape_string($_POST['twitter_title']);
        $twitter_description = $conn->real_escape_string($_POST['twitter_description']);
        $twitter_image = uploadImage('twitter_image');
        $twitter_alt = $conn->real_escape_string($_POST['twitter_alt']);
        $banner = uploadImage('banner');
        $banner_alt = $conn->real_escape_string($_POST['banner_alt']);
        $cover_image = uploadImage('cover_image');
        $cover_alt = $conn->real_escape_string($_POST['cover_alt']);
        $cover_title = $conn->real_escape_string($_POST['cover_title']);
        $cover_desc = $conn->real_escape_string($_POST['cover_desc']);
        $content_title = $conn->real_escape_string($_POST['content_title']);
        $long_content = $conn->real_escape_string($_POST['long_content']);

        // Updated Table name to 'blogs'
        $stmt = $conn->prepare("INSERT INTO blogs 
        (google_tag, json_tag, page_title, slug, meta_title, meta_description, meta_keywords, canonical_url,
         og_title, og_description, og_image, og_alt,
         twitter_title, twitter_description, twitter_image, twitter_alt,
         cover_title, cover_desc, cover_image, cover_alt,
         banner, banner_alt, content_title, long_content) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param(
            "ssssssssssssssssssssssss",
            $google_tag, $json_tag, $page_title, $slug, $meta_title, $meta_description, $meta_keywords, $canonical_url,
            $og_title, $og_description, $og_image, $og_alt,
            $twitter_title, $twitter_description, $twitter_image, $twitter_alt,
            $cover_title, $cover_desc, $cover_image, $cover_alt,
            $banner, $banner_alt, $content_title, $long_content
        );

        if ($stmt->execute()) {
            echo "<script>alert('Blog added successfully!'); window.location.href='blogs-list.php';</script>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
        $stmt->close();
    }
    ?>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include 'common/sidebar.php'; ?>
            <div class="layout-page">
                <?php include 'common/header.php'; ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card p-4">
                            <h4 class="fw-bold">Add New Blog</h4>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Page Title</label>
                                        <input type="text" name="page_title" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Slug (URL)</label>
                                        <input type="text" name="slug" class="form-control" placeholder="e.g. ac-repair-tips" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Short Description (for card)</label>
                                        <textarea name="cover_desc" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Cover Title</label>
                                        <input type="text" name="cover_title" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Cover Image</label>
                                        <input type="file" name="cover_image" class="form-control" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Detailed Content</label>
                                        <textarea name="long_content" id="long_content" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="google_tag" value="">
                                <input type="hidden" name="json_tag" value="">
                                <input type="hidden" name="meta_title" value="">
                                <input type="hidden" name="meta_description" value="">
                                <input type="hidden" name="meta_keywords" value="">
                                <input type="hidden" name="canonical_url" value="">
                                <input type="hidden" name="og_title" value="">
                                <input type="hidden" name="og_description" value="">
                                <input type="hidden" name="og_alt" value="image">
                                <input type="hidden" name="twitter_title" value="">
                                <input type="hidden" name="twitter_description" value="">
                                <input type="hidden" name="twitter_alt" value="image">
                                <input type="hidden" name="banner_alt" value="banner">
                                <input type="hidden" name="cover_alt" value="cover">
                                <input type="hidden" name="content_title" value="Blog Post">
                                <input type="file" name="banner" style="display:none">
                                <input type="file" name="og_image" style="display:none">
                                <input type="file" name="twitter_image" style="display:none">

                                <button type="submit" class="btn btn-primary">Publish Blog</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'common/footer.php'; ?>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('long_content');
    </script>
</body>
</html>