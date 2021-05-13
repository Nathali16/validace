<?php

namespace App\Controllers;
use App\Models\Model_form;
use CodeIgniter\Controller;

class Form extends BaseController
{

    public function form() {
        return view('form');
    }
 
    public function validation() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'nazev'			=>	'required',
			'plemeno'		=>	'required|min_length[3]',
			'barva'	        =>	'required'
        ]);

        $Model_form = new Model_form();
 
        if (!$input) {
            echo view('form', [
                'validation' => $this->validator
            ]);
        } else {
            $Model_form->save([
                "nazev"     =>$this->request->getVar("nazev"),  
                "plemeno"  =>$this->request->getVar("plemeno"),
                "barva"     =>$this->request->getVar("barva"),
                "pohlavi"     =>$this->request->getVar("pohlavi") 
            ]);          

            return $this->response->redirect(site_url('Form/validation'));
        }
    }

}
