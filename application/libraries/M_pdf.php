<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// libreria actualizada con un error en el servidor
// require_once __DIR__ . './vendor/autoload.php';

 require_once __DIR__ . './vendor-mpdf/autoload.php';
 
class M_pdf {
 
    public $param;
    public $pdf;
 
    public function __construct($param = '"en-GB-x","A4","","",10,10,10,10,6,3')
    {
        $this->param =$param;
        $this->pdf = new \Mpdf\Mpdf();
    }
}