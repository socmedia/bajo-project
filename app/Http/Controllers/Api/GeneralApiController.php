<?php

namespace App\Http\Controllers\Api;

use App\Statics\Programs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class GeneralApiController extends Controller
{
    use Programs;

    public function analitycs()
    {
        $res = Http::get('https://www.googletagmanager.com/gtag/js?id=UA-178737039-1');
        return $res;
    }

    public function ytChannel()
    {
        $params = [
            'part' => 'snippet,contentDetails,statistics',
            'id' => config('api.key.yt_id'),
            'key' => config('api.key.yt_key')
        ];

        $res = $this->fetchYouTube('https://www.googleapis.com/youtube/v3/channels?part=' . $params['part'] . '&id=' . $params['id'] . '&key=' . $params['key']);

        $data = [
            'channelName' => $res['items'][0]['snippet']['localized']['title'],
            'subscribers' => $res['items'][0]['statistics']['subscriberCount'],
            'thumbnails' => $res['items'][0]['snippet']['thumbnails']['high']
        ];

        return $data;
    }

    public function ytSearch()
    {
        $params = [
            'part' => 'snippet',
            'max' => 5,
            'channelId' => config('api.key.yt_id'),
            'key' => config('api.key.yt_key')
        ];

        $res = $this->fetchYouTube('https://www.googleapis.com/youtube/v3/search?part=' . $params['part'] . '&maxResults=' . $params['max'] . '&channelId=' . $params['channelId'] . '&key=' . $params['key']);

        $data = [
            'channelName' => $res->items[0]->snippet->localized->title,
        ];

        return json_encode($data);
    }

    public function programs()
    {
        return response()->json($this->getAll());
    }

    public function showProgram($id)
    {
        return response()->json($this->getAll()[$id]);
    }

    protected function fetchYouTube($url)
    {
        return Http::get($url);
    }
}