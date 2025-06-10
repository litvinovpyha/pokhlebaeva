<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use App\Rules\PhoneNumber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class CallbackController extends Controller
{
    public function show(): View
    {
        return view('callback');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'phone' => 'required|phone:KZ',
                'about' => 'string|nullable',
            ],
            [
                'phone.phone' => 'Введите корректный номер телефона',
            ]
        );
        $callback = new Callback();
        $callback->name = $validated['name'];
        $callback->phone = $validated['phone'];


        $callback->about = $validated['about'] ?? '---';



        $callback->save();
        $token = env('TELEGRAM_BOT_TOKEN');
        $chat_id = env('TELEGRAM_CHAT_ID');

        $message = "📞 <b>Новая заявка</b>\n"
            . "👤 <b>Имя:</b> {$callback->name}\n"
            . "📱 <b>Телефон:</b> <a href=\"tel:{$callback->phone}\">{$callback->phone}</a>\n"
            . "📝 <b>Комментарий:</b> {$callback->about}";

        Http::withOptions(['verify' => false])->post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'HTML',
        ]);


        return redirect()->route('callback')->with('success', 'Заявка отправлена!');
    }


}
