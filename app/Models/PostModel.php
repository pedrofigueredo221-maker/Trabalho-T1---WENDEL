<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['titulo', 'conteudo'];

    protected $validationRules = [
        'titulo' => 'required|max_length[150]',
        'conteudo' => 'required'
    ];
}
