<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Word;

class WordController extends Controller
{
    public function create(Category $category)
    {
        return view('admin.words.create', compact('category'));
    }

    public function store(Category $category, Request $request)
    {
        $word = $category->words()->create([
            'content' => $request->word['content']
        ]);

        foreach($request->word['choices'] as $choices) {
            $word->answers()->create([
                'content' => $choices['content'],
                'is_correct' => isset($choices['correct']) ? true : false
            ]);
        }

        return redirect()->route('admin.categories.show', compact('category'));
    }
}
