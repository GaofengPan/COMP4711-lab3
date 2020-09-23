<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Administrator
 */
class Student {
    function __construct() { 
        $this->surname = ''; 
        $this->first_name = ''; 
        $this->status = array(); 
        $this->emails = array(); 
        $this->grades = array(); 
    }
    function add_email($which,$address) { $this->emails[$which] = $address; } 
    function add_grade($grade) { $this->grades[] = $grade; }
    function add_status($which,$status){
        $this->status[$which] = $status;  
    }
    function average() { 
        $total = 0; 
        foreach ($this->grades as $value) 
            $total += $value; 
        return $total / count($this->grades);  
    }
    function toString() { 
        $result = '<table border="1"><tr><td style="background-color:#ccc"><strong>'.$this->first_name . ' ' . $this->surname. ' ';
        $result .= ' ('.$this->average().")</strong></td>\n";
        foreach($this->status as $which=>$what)
            $result .='<tr><td>'. $which . ': '. $what. "\n</td></tr>";
        foreach($this->emails as $which=>$what) 
            $result .= '<tr><td>'.$which . ': '. $what. "\n</td></tr>";
            $result .= "\n</tr></table>";
        return '<pre>'.$result.'</pre>'; 
        
    } 
}