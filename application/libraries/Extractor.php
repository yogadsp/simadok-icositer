<?php
// application/libraries/Extractor.php
class Extractor {
    private $CI = NULL;
    private $zip = NULL;
     
    public function __construct($params = array())
    {
        $this->CI =& get_instance();
        $this->zip = new ZipArchive;
    }
     
    public function extract($source_file, $dest_dir)
    {
        if ($this->zip->open($source_file) === TRUE) 
        {
            $this->zip->extractTo($dest_dir);
            $this->zip->close();
        }
    }
}
?>