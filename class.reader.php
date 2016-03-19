<?php
/** 
* Reader - Processes file json data
*
*  Author: James Hudnall
*  Version 1.0 
*  
*/
class Reader {
/* Parse data from file */
     function Parser($file_source, $file_target) {
            $rh = fopen($file_source, 'rb');
            $wh = fopen($file_target, 'wb');
         if ($rh===false || $wh===false) {
        // error reading or opening file
           return true;
        }
        while (!feof($rh)) {
            if (fwrite($wh, fread($rh, 1024)) === FALSE) {
                   // 'Download error: Cannot write to file ('.$file_target.')';
                   return true;
               }
        }
        fclose($rh);
        fclose($wh);
        // No error
        return false;
     }
    /* process data pulled */
    function Process($row = NULL) {
        $json = $row;
        var_dump(json_decode($json));

        $values = array(
         array(
    'Field'=>addslashes($Field),    
    'Data'=>addslashes($Data)
    ));

    /*** insert the array of values ***/
    $crud->dbInsert('formdata', $values);
	 header("location:".ABCD_HOST);
        return true;
    }
 }
?>