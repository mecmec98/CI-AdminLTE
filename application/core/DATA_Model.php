<?php

trait DATA_Model_validator {
    private function is_insert_valid(){
        return true;
    }
    private function is_update_valid(){
        return true;
    }
    private function is_remove_valid(){
        return true;
    }
    private function is_find_valid(){
        return true;
    }
}
abstract class DATA_Model extends CI_Model{
    public $table_name = 'default_table_name';
    use DATA_Model_validator;
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($data){
        
    }
    public function update($id,$data){
        
    }
    public function remove ($id){
        
    }
    public function get($id='',$limit='',$offset=''){
        if(!empty($id)){
            
        }else{
            
        }
    }
    public function get_all(){
        
    }
    public function find($data){
        
    }
}
?>
