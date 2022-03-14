<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\Frontend\Auth\UserRepository;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route(home_route());
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        abort_unless(config('access.registration'), 404);
        $str = "SUSHEELSAHOO_abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*()";
        $password = $this->get_password($str, 8);

        return view('frontend.auth.register', compact('password'));
    }

    public function get_password($str, $len = 0)
    {

        // Variable $pass to store password
        $pass = "";

        // Variable $str_length to store
        // length of the given string
        $str_length = strlen($str);

        // Check if the $len is not provided
        // or $len is greater than $str_length
        // then assign $str_length to $len
        if ($len == 0 || $len > $str_length) {
            $len = $str_length;
        }

        // Iterate $len times so that the
        // resulting string's length is
        // equal to $len
        for ($i = 0; $i < $len; $i++) {

            // Concatenate random character
            // from $str with $pass
            $pass .= $str[rand(0, $str_length)];
        }
        return $pass;
    }


    // Print password of length 5 from
    // the given string


    /**
     * @param RegisterRequest $request
     *
     * @throws \Throwable
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(RegisterRequest $request)
    {

        abort_unless(config('access.registration'), 404);
        $postData = $request->all();
        $param = array(
            'first_name'    => $postData['first_name'],
            'last_name'     => $postData['last_name'],
            'email'         => $postData['email'],
            'mobile'        => $postData['mobile'],
            'password'      => $postData['password'],
            'Membership_Type' => $postData['Membership_Type'],
            'category'      => $postData['category'],
            'select_year'   => $postData['select_year'],
            'UserType'      => $postData['UserType'],
        );
        $user = $this->userRepository->create($param);

        // If the user must confirm their email or their account requires approval,
        // create the account but don't log them in.
        if (config('access.users.confirm_email') || config('access.users.requires_approval')) {
            event(new UserRegistered($user));

            return redirect($this->redirectPath())->withFlashSuccess(
                config('access.users.requires_approval') ?
                    __('exceptions.frontend.auth.confirmation.created_pending') :
                    __('exceptions.frontend.auth.confirmation.created_confirm')
            );
        }

        auth()->login($user);

        event(new UserRegistered($user));

        return redirect($this->redirectPath());
    }
    public function mail()
    {
        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('susheelcs24@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
            $message->from('susheelcs24@gmail.com', 'Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
        die;
    }
}
