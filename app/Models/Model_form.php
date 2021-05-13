<?php 

namespace App\Models;
use CodeIgniter\Model;

class Model_form extends Model
{
    protected $table = 'pes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nazev', 'plemeno', 'pohlavi', 'barva'];
    
}