<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Repository\News\NewsInterface;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    // Manage News by Admin Portal
    protected $news;

    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
    }

    public function index()
    {
        $newses = $this->news->getAllNewses();

        // Show News
        if (View::exists('admin.news.index')) {
            return view('admin.news.index', compact('newses'));
        }
    }

    // Add News in DB
    public function create()
    {
        // Create News
        if (View::exists('admin.news.create')) {
            return view('admin.news.create');
        } else {
            return view('errors.404');
        }
    }

    public function store(StoreNewsRequest $request)
    {
        // Store News
        $this->news->storeNews($request->validated());
        return redirect()->route('newses.index')->with('success', __('message.news-success'));
    }

    public function edit($id)
    {
        $newses = $this->news->getNews($id);

        // Edit News
        if ($newses) {
            return view('admin.news.edit', compact('newses'));
        } else {
            return redirect()->route('newses.index')->with('error', __('message.news-error'));
        }
    }

    public function update(UpdateNewsRequest $request, $id)
    {
        // Update News
        $this->news->updateNews($request->validated(), $id);
        return redirect()->route('newses.index')->with('success', __('message.news-update'));
    }

    public function destroy($id)
    {
        // Delete News
        $this->news->deleteNews($id);
        return redirect()->route('newses.index')->with('error', __('message.news-delete'));
    }
}
