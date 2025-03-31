<?php
namespace App\Models;

use CodeIgniter\Model;

class homepic extends Model
{
    protected $allowedFields = ['id', 'content', 'created'];

    protected $table = 'heropicture';

    public function getdata()
    {
        return $this->findAll();
    }

}
