<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Mockery\Exception;

class ThreadController extends Controller
{
    private $thread;

    /**
     * @param $thread
     */
    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = $this->thread->paginate(15);

        return view('thread.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->thread->create($request->all());

            dd('Tópico criado com sucesso');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('thread.edit', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $thread = $this->thread->find($id);
        return view('thread.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $thread = $this->thread->find($id);
            $thread->update($request->all());

            dd('Tópico Atualizado com sucesso');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $thread = $this->thread->find($id);
            $thread->delete();

            dd('Tópico Remocido com sucesso');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
