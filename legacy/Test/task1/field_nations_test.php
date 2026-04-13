<?php

class FieldNationsTest extends ArrayObject {
    public $content=array();
    public function __construct($content = array()){
        $this->content[]=$content;
    }

    public function displayAsTable() {
        $table =  '<table border="1" style="display: table;margin: auto;width:100%">';
        $table .= '<tbody>';
        foreach ($this->content[0] as $key => $value) {

            $table .= '<tr>';
            $table .= '<th><h3>' . $key . '</h3></th>';
            $table .= '<td>' . $value . '</td>';
            $table .= '</tr>';
        }
        $table .= '</tbody>';
        $table .=  '</table>';
        return $table;
    }
}

$fieldTest = new FieldNationsTest(["Name"=>"Sakib","Position"=>"Software Engineer","Age"=>25]);

echo $fieldTest->displayAsTable();
?>


<?php   
//or
// class FieldNationsTest extends ArrayObject {

//     // inherits function from parent class
//     public function __set($name, $val) {
//         $this[$name] = $val;
//     }

//     public function displayAsTable() {
//         $table =  '<table>';
//         $table .= '<tbody>';    
//         $all_data = (array) $this;
//         foreach ($all_data as $key => $value) {
//             $table .= '<tr>';
//             $table .= '<th><h3>' . $key . '</h3></th>';
//             $table .= '<td>' . $value . '</td>';
//             $table .= '</tr>';
//         }    
//         $table .= '</tbody>';
//         $table .=  '</table>';    
//         return $table;
//     } 
// }

// $fieldTest = new FieldNationsTest();    
// $fieldTest->Name = 'John Doe'; 
// $fieldTest->Gender = 'Male'; 
// $fieldTest->Religion = 'Islam'; 
// $fieldTest->Prepared_For = 'ABC Org';

// echo $fieldTest->displayAsTable();    

?>

