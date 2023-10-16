<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Comment;

class CheckCommentAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $comment = Comment::find($request->id);
        if ($comment->user_id !== auth()->user()->id) {// herausfinden Welche userId gerade angemeldet ist.
            abort(403,"unautorisiert Zugriff");
        }
        return $next($request);
    }
}
