<?php
// echo 'zz';
// die;
echo header('Access-Control-Allow-Origin: http://xiangtan.suninpay.com:81'); /*php运行跨域*/
// echo 'zzz';
  class CropAvatar {
    private $src;
    private $data;
    private $file;
    private $base64;
    private $dst;
    private $type;
    private $extension;
    private $srcDir = 'img/upload';
    private $dstDir = 'img/avatar';
    private $msg;

    function __construct($src, $data, $file, $base64) {
      $this -> setSrc($src);
      $this -> setData($data);
      $this -> setFile($file);
      // echo 'z';
      $this -> setBase64($base64);
      $this -> crop($this -> src, $this -> dst, $this -> data);
    }

    private function setSrc($src) {
      if (!empty($src)) {
        $type = exif_imagetype($src);

        if ($type) {
          $this -> src = $src;
          $this -> type = $type;
          $this -> extension = image_type_to_extension($type);
          $this -> setDst();
        }
      }
    }

    private function setData($data) {
      if (!empty($data)) {
        $this -> data = json_decode(stripslashes($data));
      }
    }

    private function setFile($file) {
      // echo 'zzzz';
      $errorCode = $file['error'];

      if ($errorCode === UPLOAD_ERR_OK) {
        $type = exif_imagetype($file['tmp_name']);

        if ($type) {
          $dir = $this -> srcDir;

          if (!file_exists($dir)) {
            mkdir($dir, 0777);
          }

          $extension = image_type_to_extension($type);
          $src = $dir . '/' . date('YmdHis') . $extension;

          if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_JPEG || $type == IMAGETYPE_PNG) {

            if (file_exists($src)) {
              unlink($src);
            }

            $result = move_uploaded_file($file['tmp_name'], $src);

            if ($result) {
              $this -> src = $src;
              $this -> type = $type;
              $this -> extension = $extension;
              $this -> setDst();
            } else {
               $this -> msg = 'Failed to save file';
            }
          } else {
            $this -> msg = 'Please upload image with the following types: JPG, PNG, GIF';
          }
        } else {
          $this -> msg = 'Please upload image file';
        }
      } else {
        $this -> msg = $this -> codeToMessage($errorCode);
      }
    }

    private function setBase64($base64_string) {
      // echo 'ggg';
      // echo file_get_contents($base64_string);
// 参考http://php.net/manual/zh/function.base64-decode.php http://bbs.csdn.net/topics/350200170
$base64_arr = explode('base64,', $base64_string);
$fp   = fopen($base64_string, 'r');
$meta = stream_get_meta_data($fp);
// 打印 "text/plain"
// var_dump($meta);
// echo $meta['uri']; 还是包含有data:image/jpeg;base64,的字符串
// die;
// echo $meta['mediatype'];
// die;
$mediatype = $meta['mediatype'];
// die;
// $mediatype = $base64_arr[0];
// echo $mediatype;
$f_ext = ''; /*文件后缀*/
switch ($mediatype) { // 匹配文件后缀
  case 'image/jpeg':
    // code...
    $f_ext = '.jpg';
    break;
  
  default:
    # code...
    break;
}
// die;
$decode_string = base64_decode($base64_arr[1]);
// echo $decode_string;
// die;
$filename = 'test1.jpg' . $f_ext; // 文件名
// if (!file_exists($filename)) { // 如果文件存在，就不生成
if (1) {
  file_put_contents($filename, $decode_string); // 生成文件
  $this -> src = $filename;
  $this -> type = IMAGETYPE_JPEG;
  $this -> extension = '';
  $this -> setDst();
} else {
  echo $filename . 'exists!!!';
}
    }

    private function setDst() {
      $dir = $this -> dstDir;

      if (!file_exists($dir)) {
        // echo 'zzzzzzzz';
        if (mkdir($dir, 0777)) {
          echo 'create dir success';
        } else {
          echo 'i cant create dir';
        }
      } else {
        // echo 'xxxx';
      }

      $this -> dst = $dir . '/' . date('YmdHis') . '.png';
    }

    private function crop($src, $dst, $data) {
      if (!empty($src) && !empty($dst) && !empty($data)) {
        switch ($this -> type) {
          case IMAGETYPE_GIF:
            $src_img = imagecreatefromgif($src);
            break;

          case IMAGETYPE_JPEG:
            $src_img = imagecreatefromjpeg($src);
            break;

          case IMAGETYPE_PNG:
            $src_img = imagecreatefrompng($src);
            break;
        }

        if (!$src_img) {
          $this -> msg = "Failed to read the image file";
          return;
        }

        $size = getimagesize($src);
        $size_w = $size[0]; // natural width
        $size_h = $size[1]; // natural height

        $src_img_w = $size_w;
        $src_img_h = $size_h;

        $degrees = $data -> rotate;

        // Rotate the source image
        if (is_numeric($degrees) && $degrees != 0) {
          // PHP's degrees is opposite to CSS's degrees
          $new_img = imagerotate( $src_img, -$degrees, imagecolorallocatealpha($src_img, 0, 0, 0, 127) );

          imagedestroy($src_img);
          $src_img = $new_img;

          $deg = abs($degrees) % 180;
          $arc = ($deg > 90 ? (180 - $deg) : $deg) * M_PI / 180;

          $src_img_w = $size_w * cos($arc) + $size_h * sin($arc);
          $src_img_h = $size_w * sin($arc) + $size_h * cos($arc);

          // Fix rotated image miss 1px issue when degrees < 0
          $src_img_w -= 1;
          $src_img_h -= 1;
        }

        $tmp_img_w = $data -> width;
        $tmp_img_h = $data -> height;
        $dst_img_w = 220;
        $dst_img_h = 220;

        $src_x = $data -> x;
        $src_y = $data -> y;

        if ($src_x <= -$tmp_img_w || $src_x > $src_img_w) {
          $src_x = $src_w = $dst_x = $dst_w = 0;
        } else if ($src_x <= 0) {
          $dst_x = -$src_x;
          $src_x = 0;
          $src_w = $dst_w = min($src_img_w, $tmp_img_w + $src_x);
        } else if ($src_x <= $src_img_w) {
          $dst_x = 0;
          $src_w = $dst_w = min($tmp_img_w, $src_img_w - $src_x);
        }

        if ($src_w <= 0 || $src_y <= -$tmp_img_h || $src_y > $src_img_h) {
          $src_y = $src_h = $dst_y = $dst_h = 0;
        } else if ($src_y <= 0) {
          $dst_y = -$src_y;
          $src_y = 0;
          $src_h = $dst_h = min($src_img_h, $tmp_img_h + $src_y);
        } else if ($src_y <= $src_img_h) {
          $dst_y = 0;
          $src_h = $dst_h = min($tmp_img_h, $src_img_h - $src_y);
        }

        // Scale to destination position and size
        $ratio = $tmp_img_w / $dst_img_w;
        $dst_x /= $ratio;
        $dst_y /= $ratio;
        $dst_w /= $ratio;
        $dst_h /= $ratio;

        $dst_img = imagecreatetruecolor($dst_img_w, $dst_img_h);

        // Add transparent background to destination image
        imagefill($dst_img, 0, 0, imagecolorallocatealpha($dst_img, 0, 0, 0, 127));
        imagesavealpha($dst_img, true);

        $result = imagecopyresampled($dst_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

        if ($result) {
          if (!imagepng($dst_img, $dst)) {
            $this -> msg = "Failed to save the cropped image file";
          }
        } else {
          $this -> msg = "Failed to crop the image file";
        }

        imagedestroy($src_img);
        imagedestroy($dst_img);
      }
    }

    private function codeToMessage($code) {
      switch ($code) {
        case UPLOAD_ERR_INI_SIZE:
          $message = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
          break;

        case UPLOAD_ERR_FORM_SIZE:
          $message = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
          break;

        case UPLOAD_ERR_PARTIAL:
          $message = 'The uploaded file was only partially uploaded';
          break;

        case UPLOAD_ERR_NO_FILE:
          $message = 'No file was uploaded';
          break;

        case UPLOAD_ERR_NO_TMP_DIR:
          $message = 'Missing a temporary folder';
          break;

        case UPLOAD_ERR_CANT_WRITE:
          $message = 'Failed to write file to disk';
          break;

        case UPLOAD_ERR_EXTENSION:
          $message = 'File upload stopped by extension';
          break;

        default:
          $message = 'Unknown upload error';
      }

      return $message;
    }

    public function getResult() {
      return !empty($this -> data) ? $this -> dst : $this -> src;
    }

    public function getMsg() {
      return $this -> msg;
    }
  }

// echo 'z';
  $crop = new CropAvatar($_POST['avatar_src'], $_POST['avatar_data'], $_FILES['avatar_file'], $_POST['avatar_base64']);

  $response = array(
    'state'  => 200,
    'message' => $crop -> getMsg(),
    'result' => $crop -> getResult()
  );
// echo 'zz';
  echo json_encode($response);
?>
