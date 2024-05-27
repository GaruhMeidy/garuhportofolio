<?php 
namespace App\Models;

use CodeIgniter\Model;

class BioModel extends Model
{
    protected $table = 'tbbio';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'hobby', 'email', 'address'];
}