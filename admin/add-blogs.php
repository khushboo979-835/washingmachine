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
        $uploadDir = 'uploads/blogs/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Image Upload Function
        function uploadImage($fileInputName) {
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

            if (move_uploaded_file($fileTmpPath, $targetFile)) {
                return $safeFileName;
            }
            return '';
        }

        // Sanitize Input Data
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
        $og_alt = $conn->real_escape_string($_POST['og_alt']);
        $twitter_title = $conn->real_escape_string($_POST['twitter_title']);
        $twitter_description = $conn->real_escape_string($_POST['twitter_description']);
        $twitter_alt = $conn->real_escape_string($_POST['twitter_alt']);
        $cover_title = $conn->real_escape_string($_POST['cover_title']);
        $cover_desc = $conn->real_escape_string($_POST['cover_desc']);
        $cover_alt = $conn->real_escape_string($_POST['cover_alt']);
        $banner_alt = $conn->real_escape_string($_POST['banner_alt']);
        $content_title = $conn->real_escape_string($_POST['content_title']);
        $long_content = $conn->real_escape_string($_POST['long_content']); // Sanitized content

        // Handle File Uploads
        $og_image = uploadImage('og_image');
        $twitter_image = uploadImage('twitter_image');
        $banner = uploadImage('banner');
        $cover_image = uploadImage('cover_image');

        $sql = "INSERT INTO blogs (
            google_tag, json_tag, page_title, slug, meta_title, meta_description, meta_keywords, 
            canonical_url, og_title, og_description, og_image, og_alt, 
            twitter_title, twitter_description, twitter_image, twitter_alt, 
            cover_title, cover_desc, cover_image, cover_alt, 
            banner, banner_alt, content_title, long_content
        ) VALUES (
            '$google_tag', '$json_tag', '$page_title', '$slug', '$meta_title', '$meta_description', '$meta_keywords',
            '$canonical_url', '$og_title', '$og_description', '$og_image', '$og_alt',
            '$twitter_title', '$twitter_description', '$twitter_image', '$twitter_alt',
            '$cover_title', '$cover_desc', '$cover_image', '$cover_alt',
            '$banner', '$banner_alt', '$content_title', '$long_content'
        )";

        if ($conn->query($sql) === TRUE) {
            // Updated redirect to blogs-list.php
            echo "<script>alert('Blog added successfully!'); window.location.href = 'blogs-list.php';</script>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . $conn->error . "</div>";
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
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-11 mb-4">
                                <div class="card p-4">
                                    <h4 class="fw-bold">Add New Blog</h4>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Page Title *</label>
                                                <input type="text" name="page_title" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">URL Slug *</label>
                                                <input type="text" name="slug" class="form-control" placeholder="e.g. washing-machine-repair" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" rows="2"></textarea>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Cover Image *</label>
                                                <input type="file" name="cover_image" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Cover Title</label>
                                                <input type="text" name="cover_title" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Short Cover Description</label>
                                            <textarea name="cover_desc" class="form-control" rows="2"></textarea>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Google Tag Script</label>
                                                <textarea name="google_tag" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">JSON-LD Tag</label>
                                                <textarea name="json_tag" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <h5 class="fw-bold">Social Media (OG/Twitter)</h5>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label class="form-label">OG Image</label>
                                                <input type="file" name="og_image" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Banner Image</label>
                                                <input type="file" name="banner" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Twitter Image</label>
                                                <input type="file" name="twitter_image" class="form-control">
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="mb-3">
                                            <label class="form-label">Main Content Heading</label>
                                            <input type="text" name="content_title" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Detailed Blog Content</label>
                                            <textarea name="long_content" id="long_content" class="form-control"></textarea>
                                        </div>

                                        <input type="hidden" name="meta_title" value="">
                                        <input type="hidden" name="meta_keywords" value="">
                                        <input type="hidden" name="canonical_url" value="">
                                        <input type="hidden" name="og_title" value="">
                                        <input type="hidden" name="og_description" value="">
                                        <input type="hidden" name="og_alt" value="blog image">
                                        <input type="hidden" name="twitter_title" value="">
                                        <input type="hidden" name="twitter_description" value="">
                                        <input type="hidden" name="twitter_alt" value="twitter image">
                                        <input type="hidden" name="cover_alt" value="cover image">
                                        <input type="hidden" name="banner_alt" value="banner image">

                                        <button type="submit" class="btn btn-success btn-lg">Publish Blog</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'common/footer.php'; ?>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        // Fixed: Matching ID with Textarea
        CKEDITOR.replace('long_content', {
            height: 400,
            allowedContent: true
        });
    </script>
</body>
</html>