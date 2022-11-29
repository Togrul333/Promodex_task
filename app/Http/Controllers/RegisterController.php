<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Lib\Repositories\CustomerRepository;

class RegisterController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->middleware('guest');
        $this->customerRepository = $customerRepository;
    }

    public function register()
    {
        $view_model = [
            'title' => 'Реєстрація',
        ];
        return view('register.index', $view_model);
    }

    public function registerPost(CustomerRequest $request)
    {
        $data = $request->validated();
        $this->customerRepository->save($data);

        return redirect()->route('notifications')->with('success', 'Вы успешно зарегистрировались');
    }

}
