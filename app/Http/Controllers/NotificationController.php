<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationRequest;
use App\Http\Requests\SimpleActionRequest;
use App\Lib\Repositories\NotificationRepository;

class NotificationController extends Controller
{
    private $notificationRepository;

    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    public function index()
    {
        $notifications = $this->notificationRepository->selectAll();
        $view_model = [
            'title' => 'уведомления',
            'notifications' => $notifications,
        ];
        return view('notifications.index', $view_model);
    }

    public function create()
    {
        $view_model = [
            'title' => 'Новое объявление',
        ];
        return view('notifications.create', $view_model);
    }

    public function store(NotificationRequest $request)
    {
        $data = $request->validated();
        $this->notificationRepository->insert($data);

        return redirect()->route('notifications')->with('info', 'уведомления создано !');
    }

    public function destroy(SimpleActionRequest $request)
    {
        $data = $request->validated();
        $this->notificationRepository->delete($data['id']);
        return redirect()->route('notifications')->with('info', 'уведомления удалены!');
    }

    public function changeStatus(SimpleActionRequest $request)
    {
        $data = $request->validated();
        $this->notificationRepository->change_status($data['id']);
        return redirect()->route('notifications')->with('info', 'Статус изменен!');
    }
}
