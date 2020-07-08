<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_common extends CI_Model 
{
	public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }
    
    public function extension_check_photo($ext) {
    	if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='JPG' && $ext!='PNG' && $ext!='JPEG' && $ext!='GIF' ) {
    		return false;
    	} else {
    		return true;
    	}
    }
    public function get_language_data()
    {
        $query = $this->db->query("SELECT * from tbl_language");
        return $query->result_array();
    }

    public function image_handler($source_image,$destination,$tn_w = 100,$tn_h = 100,$quality = 80) {
        
        $info = getimagesize($source_image);
        $imgtype = image_type_to_mime_type($info[2]);

        switch ($imgtype) {
            case 'image/jpeg':
                $source = imagecreatefromjpeg($source_image);
                break;
            case 'image/gif':
                $source = imagecreatefromgif($source_image);
                break;
            case 'image/png':
                $source = imagecreatefrompng($source_image);
                break;
            default:
                die('Invalid image type.');
        }

        $src_w = imagesx($source);
        $src_h = imagesy($source);
        $src_ratio = $src_w/$src_h;

        if ($tn_w/$tn_h > $src_ratio) {
            $new_h = $tn_w/$src_ratio;
            $new_w = $tn_w;
        } else {
            $new_w = $tn_h*$src_ratio;
            $new_h = $tn_h;
        }
        $x_mid = $new_w/2;
        $y_mid = $new_h/2;

        $newpic = imagecreatetruecolor(round($new_w), round($new_h));
        imagecopyresampled($newpic, $source, 0, 0, 0, 0, $new_w, $new_h, $src_w, $src_h);
        $final = imagecreatetruecolor($tn_w, $tn_h);
        imagecopyresampled($final, $newpic, 0, 0, ($x_mid-($tn_w/2)), ($y_mid-($tn_h/2)), $tn_w, $tn_h, $tn_w, $tn_h);
        if(Imagejpeg($final,$destination,$quality)) {
            return true;
        }
        return false;
    }
}