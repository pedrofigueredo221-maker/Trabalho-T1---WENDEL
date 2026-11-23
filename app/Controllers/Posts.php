<?php

namespace App\Controllers;

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
        $dados['msg'] = '';

        if ($this->request->is('post')) {
            $postModel = model('PostModel');

            $post = [
                'titulo' => $this->request->getPost('titulo'),
                'conteudo' => $this->request->getPost('conteudo')
            ];

            if ($postModel->insert($post)) {
                return redirect()->to(site_url('painel/posts'));
            }

            $dados['msg'] = 'Preencha o título e o conteúdo.';
        }

        return view('posts_form', $dados);
    }

    public function editar($id)
    {
        $postModel = model('PostModel');
        $dados['post'] = $postModel->find($id);
        $dados['msg'] = '';

        if (!$dados['post']) {
            throw PageNotFoundException::forPageNotFound();
        }

        if ($this->request->is('post')) {
            $post = [
                'titulo' => $this->request->getPost('titulo'),
                'conteudo' => $this->request->getPost('conteudo')
            ];

            if ($postModel->update($id, $post)) {
                return redirect()->to(site_url('painel/posts'));
            }

            $dados['msg'] = 'Não foi possível salvar a publicação.';
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
