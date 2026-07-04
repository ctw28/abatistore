<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function getData()
    {
        return Tags::orderBy('group')
            ->orderBy('name')
            ->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'group' => 'required',
            'name'  => 'required',
            'color' => 'nullable'
        ]);

        Tags::create($request->only([
            'group',
            'name',
            'color'
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Tag berhasil ditambahkan.'
        ]);
    }

    public function update(Request $request, $id)
    {
        $tag = Tags::findOrFail($id);

        $request->validate([
            'group' => 'required',
            'name'  => 'required',
            'color' => 'nullable'
        ]);

        $tag->update($request->only([
            'group',
            'name',
            'color'
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Tag berhasil diperbarui.'
        ]);
    }

    public function destroy($id)
    {
        Tags::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tag berhasil dihapus.'
        ]);
    }

    /**
     * Untuk dropdown / checkbox di form produk
     */
    public function grouped()
    {
        $groups = Tags::orderBy('group')
            ->orderBy('name')
            ->get()
            ->groupBy('group')
            ->map(function ($items, $group) {
                return [
                    'group' => ucfirst($group),
                    'tags'  => $items->values()
                ];
            })
            ->values();

        return response()->json($groups);
    }
}