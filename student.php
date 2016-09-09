<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author TianyangLiu
 */
class Student {
    
    // this is the constructor
    function _construct(){
        $this->surname    = '';
        $this->first_name = '';
        $this->emails     = array();
        $this->grades     = array();
    }
    
    // get students' email addresses
    function add_email($which, $email_address){
        $this->emails[$which] = $email_address;
    }
    
    // get students' grades
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    // calculate a student's average grades
    function average(){
        $total = 0;
        
        foreach($this->grades as $g){
            $total += $g;
        }
        
        return round($total / count($this->grades));
    }
    
    // output a student's info 
    function toString(){
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        
        foreach($this->emails as $which => $what){
            $result .= $which . ': ' . $what . "\n";
        }
        
        $result .= "\n";
        
        return '<pre>' . $result . '</pre>';
    }
}
