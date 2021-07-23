<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Spatie\Newsletter\NewsletterFacade;
class UserSubscribeController extends Controller
{
    public function listSubscribe()
    {
        $response = Http::withBasicAuth('phuoctrung135', '2e92b9bbb8a44fb710b469264f5a1233-us6')
            ->get('https://us6.api.mailchimp.com/3.0/lists/3dfe445c9f/members');
        $listMember = $response['members'];
        return view('admin.user-subscribe.index',[
            'listMember' => $listMember
        ]);
    }

    public function create()
    {
        return view('admin.user-subscribe.create');
    }
    public function  addSubscribe(Request $request)
    {
        $input = $request->all();
        try {
            if (!empty($input['email'])){
                if (!(NewsletterFacade::isSubscribed($input['email']))){
                    NewsletterFacade::subscribe($input['email']);
                }
                return back()->with('success','Subscribed');
            }
        } catch (Throwable $th) {
            return back()->with('errors', 'Can not subscribe');
        }
    }

    public function  unsubscribe(Request $request)
    {
        $input = $request->all();
        if (!empty($input['email'])){
            NewsletterFacade::unsubscribe($input['email']);
        }
        return back()->with('success','Unsubscribed');
    }
}
