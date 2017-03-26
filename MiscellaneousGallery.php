<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="Smoothbox-master/js/smoothbox.js"></script>
    <style type="text/css">
        .photo-link		{ padding:1px; margin:100px; border:1px solid #ccc; width:100px;}
        .photo-link:hover	{ border-color:#999; }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="container">
    <div id="main">
        <div id="navbar">
            <ul>

            </ul>
        </div>
        <div id="header">
            <div id="left_bar_header"><span class="title" >MEME</span><span class="title_dark">TIC</span>
                <p><b>The answer to your problem.</b></p>
            </div>

        </div>
        <div id="content">
            <div class="col-sm-12 text-center"><h1>Miscellaneous Memes</h1></div>
            <?php
            include 'GeneratePhotoGallery.php';
            $images_dir = 'Miscellaneous/';
            $thumbs_dir = 'Miscellaneous-thumb/';
            $thumbs_width = 100;
            $images_per_row = 3;
            $image_files = get_files($images_dir);
            if (count($image_files)) {
                $index = 0;
                foreach ($image_files as $index => $file) {
                    $index++;
                    $thumbnail_image = $thumbs_dir . $file;
                    if (!file_exists($thumbnail_image)) {
                        $extension = get_file_extension($thumbnail_image);
                        if ($extension) {
                            make_thumb($images_dir . $file, $thumbnail_image, 200);
                        }
                    }
                    echo '<a href="', $images_dir . $file, '" class="photo-link smoothbox" rel="gallery"><img src="', $thumbnail_image, '" /></a>';
                    if ($index % $images_per_row == 0) {
                        echo '<div class="clear"></div>';
                    }
                }
                echo '<div class="clear"></div>';
            }
            else {
                echo '<p>There are no images in this gallery.</p>';
            }

            ?>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div></div>
<div class = "col-sm-12">
    <div id="footer">
        <div style="text-align: left; width:100%;">
            <div class="text-center" id="footer_right">©2017 All Rights Reserved&nbsp; • &nbsp;Jengles, Inc.</div>
        </div>
    </div>
</div>
</div></div>


</body>
</html>

