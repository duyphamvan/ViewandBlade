<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $all = [
            [
                'id' => '1',
                'Tasktitle' => 'Tao project',
                'Content' => 'Tao project Laravel',
                'Created' => '2019-02-19'
            ],
            [
                'id' => '2',
                'Tasktitle' => 'Tao migration',
                'Content' => 'Tao migration cho bang categories',
                'Created' => '2019-02-19'
            ],
            [
                'id' => '3',
                'Tasktitle' => 'Tao seeder',
                'Content' => 'Tao du lieu cho bang categories',
                'Created' => '2019-02-19'
            ],
            [
                'id' => '4',
                'Tasktitle' => 'Cau lenh if',
                'Content' => 'Cau lenh if trong Laravel',
                'Created' => '2019-02-19'
            ],
            [
                'id' => '5',
                'Tasktitle' => 'Vong lap foreach',
                'Content' => 'Tao vong lap trong Laravel',
                'Created' => '2019-02-19'
            ]
        ];
        return view('tasks.list', compact('all'));
    }
}
