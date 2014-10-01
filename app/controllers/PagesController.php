<?php

class PagesController extends \BaseController {

    private $banners = false;

    function __construct()
    {
        if (Menu::whereSlug(Request::path())->count())
        {
            $this->banners = Menu::whereSlug(Request::path())->first()->banner;
        } else
        {
            $this->banners = false;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        $banners = $this->banners;
        $body = 'body goes here';
        $header = 'Header goes here';
        $tweets = Gtweet::get();
        $videos = Video::wherePin(true)->get();
//        if ($content = Content::whereTag('About us')->first())
//        {
//                $body = $content->body;
//                $header = $content->header;
//        }

        return View::make('pages.home')->with(compact('body', 'header', 'banners', 'tweets', 'videos'));
    }

    public function video()
    {
        $banners = $this->banners;
        $videos = Video::get();

        return View::make('pages.video')->with(compact('banners', 'videos'));
    }
    public function videoById($id)
    {
        $banners = $this->banners;
        $video = Video::find($id);
        return View::make('pages.videoById')->with(compact('banners', 'video'));
    }

    /**
     * Career
     * @return mixed
     */
    public function career()
    {
        $banners = $this->banners;

        $career = Career::first();

        return View::make('pages.career')->with(compact('career', 'banners'));
    }

    /**
     * Serice page
     */
    public function policy($id)
    {
        $banners = $this->banners;
        $policy = Content::find($id);

        return View::make('pages.policy')->with(compact('policy', 'banners'));
    }

    /**
     * show projects
     * @return mixed
     *         $userIds = $user->follows()->lists('followed_id');
     *
     * $userIds[] = $user->id;
     *
     * return Status::whereIn('user_id', $userIds)->latest()->get();
     */

    /**
     * show news
     * @return mixed
     */
    public function show_news()
    {
        $projects = Project::get();

        return View::make('pages.news')->with(compact('projects'));
    }

    public function show_news_by_id($id)
    {

        $project = Project::find($id);

        return View::make('pages.newsId')->with(compact('project'));
    }




}
