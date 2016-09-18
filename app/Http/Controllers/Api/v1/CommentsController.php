<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\CommentsController as ParentController;

class CommentsController extends ParentController
{
    /**
     * @param \App\Article $article
     * @param $comment
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondCreated(\App\Article $article, $comment)
    {
        return response()->json([
            'success' => 'created'
        ], 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * @param \App\Comment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondUpdated(\App\Comment $comment)
    {
        return response()->json([
            'success' => 'updated'
        ], 200, [], JSON_PRETTY_PRINT);
    }
}