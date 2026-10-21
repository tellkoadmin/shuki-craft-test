<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Handles the site's simple forms until the shop backend is built.
 * Each form is validated and the visitor is sent back with a confirmation;
 * nothing is emailed or saved yet (see the TODO on each method).
 */
class FormController extends Controller
{
    public function contact(Request $request): RedirectResponse
    {
        $request->validate([
            'your-name' => ['required', 'string', 'max:120'],
            'your-email' => ['required', 'email', 'max:190'],
            'your-subject' => ['nullable', 'string', 'max:190'],
            'your-message' => ['nullable', 'string', 'max:5000'],
        ]);

        // TODO: email the message to hi@shukicrafts.com
        return back()->with('status', 'Thank you for your message. We will get back to you soon.');
    }

    public function trackOrder(Request $request): RedirectResponse
    {
        $request->validate([
            'orderid' => ['required', 'string', 'max:40'],
            'order_email' => ['required', 'email'],
        ]);

        // TODO: look the order up once orders are stored
        return back()->withInput()->with('status', 'Order tracking will be available once the online shop is connected.');
    }

    public function newsletter(Request $request): RedirectResponse
    {
        $request->validate(['email' => ['required', 'email', 'max:190']]);

        // TODO: add the address to the newsletter list
        return back()->with('status', 'Thank you for subscribing.');
    }

    public function accountDetails(Request $request): RedirectResponse
    {
        // TODO: save to the customer's account
        return back()->with('status', 'Account details saved.');
    }

    public function accountAddress(Request $request): RedirectResponse
    {
        // TODO: save to the customer's account
        return back()->with('status', 'Address saved.');
    }

    public function lostPassword(Request $request): RedirectResponse
    {
        $request->validate(['user_login' => ['required', 'string', 'max:190']]);

        // TODO: send the reset link email
        return back()->with('status', 'If an account exists for that username or email, a password reset link will be sent.');
    }

    public function resetPassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password_1' => ['required', 'string', 'min:8'],
            'password_2' => ['required', 'same:password_1'],
        ], ['password_2.same' => 'The passwords do not match.']);

        // TODO: update the customer's password
        return redirect()->route('account')->with('status', 'Your password has been reset.');
    }
}
