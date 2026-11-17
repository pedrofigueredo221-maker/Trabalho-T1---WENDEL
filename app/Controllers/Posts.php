<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Posts extends BaseController
{
    public function inicio()
    {
        $postModel = model('PostModel');
        $dados['posts'] = $postModel->orderBy('id', 'DESC')->findAll();
        return view('inicio', $dados);
    }

    public function visualizar($id)
    {
        $postModel = model('PostModel');
        $dados['post'] = $postModel->find($id);
        if (!$dados['post']) {
            throw PageNotFoundException::forPageNotFound();
        }
        return view('post', $dados);
    }

    public function index()
    {
        $postModel = model('PostModel');
        $dados['posts'] = $postModel->orderBy('id', 'DESC')->findAll();
        return view('posts', $dados);
    }

    public function inserir()
    {
        $dados = ['post' => null, 'msg' => ''];
        if ($this->request->is('post')) {
            $postModel = model('PostModel');
            if ($postModel->insert($this->request->getPost())) {
                return redirect()->to(site_url('painel/posts'));
            }
            $dados['msg'] = 'Preencha os campos corretamente.';
        }
        return view('posts_form', $dados);
    }

    public function editar($id)
    {
        $postModel = model('PostModel');
        $dados = ['post' => $postModel->find($id), 'msg' => ''];
        if (!$dados['post']) {
            throw PageNotFoundException::forPageNotFound();
        }
        if ($this->request->is('post')) {
            if ($postModel->update($id, $this->request->getPost())) {
                return redirect()->to(site_url('painel/posts'));
            }
            $dados['msg'] = 'Erro ao salvar publicação.';
        }
        return view('posts_form', $dados);
    }

    public function excluir($id)
    {
        $postModel = model('PostModel');
        $postModel->delete($id);
        return redirect()->to(site_url('painel/posts'));
    }
}
