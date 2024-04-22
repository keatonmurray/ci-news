<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\News;

class FrontController extends BaseController
{

    public function index()
    {   
        $model = model(News::class);
        $this->data['news'] = $model->findAll();

        return $this->renderView('pages/index');
    }

    public function create()
    {   
        return $this->renderView('pages/create');
    }

    public function store()
    {
        $model = new News;

        $validate = $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);

        if ($validate) {
            $postData = [
                'fname' => $this->request->getPost('fname'),
                'lname' => $this->request->getPost('lname'),
                'title' => $this->request->getPost('title'),
                'body' => $this->request->getPost('body')
            ];

            $model->insert($postData);
            return redirect()->to('/')->with('success', 'Post created successfully.');
        } else {
            return redirect()->back();
        }
    }

    public function show(string $id)
    {
        $model = model(News::class);
        $this->data['news'] = $model->find($id);

        return $this->renderView('pages/show');
    }

    public function edit(string $id)
    {   
        $model = model(News::class);
        $this->data['news'] = $model->find($id);

        return $this->renderView('pages/edit');
    }

    public function update()
    {

    }

    public function remove()
    {
        
    }
}
