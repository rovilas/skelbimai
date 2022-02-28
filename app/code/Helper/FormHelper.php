<?php

namespace Helper;

class FormHelper
{
    private $form;

    public function __construct($action, $method)
    {
        $this->form = '<form action="'. BASE_URL . $action . '" method="' . $method . '">';
    }

    /**
     * $data3 = [
     * 'type' => 'email',
     * 'name' => 'email',
     * 'placeholder' => 'john@gmail.com'
     * ];
     */


//$data4 = [
//'type' => 'password',
//'name' => 'password',
//'placeholder' => '******'
//];
    // $this->form = '<form action="registration.php" method="POST">';
    public function input($data)
    {
        // <form action="registration.php" method="POST">
        $this->form .= '<input ';
        // <form action="registration.php" method="POST"><input
        foreach ($data as $attribute => $value) {
            // <form action="registration.php" method="POST"><input type="email" name="email"
            // placeholder="john@gmail.com";
            $this->form .= $attribute . '="' . $value . '" ';
        }
        $this->form .= ' ><br><br>';
        // <form action="registration.php" method="POST"><input type="email" name="email"
        // placeholder="john@gmail.com" ><input type="password" name="password" placeholder="*****";


    }

    public function textArea($name, $placeholder)
    {
        $this->form .= '<textarea name="' . $name . '">' . $placeholder . '</textarea>';
    }

    public function select($data)
    {
        $this->form .= '<select name="'.$data['name'].'">';
        foreach ($data['options'] as $key => $option){
            $this->form .= '<option';
            if(isset($data['selected'])){
                if($data['selected'] == $key){
                    $this->form .= ' selected ';
                }
            }

            // <option selected value="3">
            $this->form .= ' value="'.$key.'">'.$option.'</option>';
        }
        $this->form .= '</select>';
    }

    public function getForm()
    {
        // <form action="registration.php" method="POST"><input type="email" name="email"
        // placeholder="john@gmail.com" ><input type="password" name="password" placeholder="*****"></form>;

        $this->form .= '</form>';
        return $this->form;
    }
}