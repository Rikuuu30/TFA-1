<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username'  => 'admin.mara',
                'full_name' => 'Mara Villanueva',
                'role'      => 'Administrator',
                'shift'     => 'Opening',
                'status'    => 'Active',
                'email'     => 'mara.v@zensupply.example',
                'access'    => 'Full system',
                'last_login' => 'Today, 8:42 AM',
            ],
            [
                'username'  => 'cashier.ken',
                'full_name' => 'Kenneth Ramos',
                'role'      => 'Cashier',
                'shift'     => 'Opening',
                'status'    => 'Active',
                'email'     => 'kenneth.r@zensupply.example',
                'access'    => 'Sales & refunds',
                'last_login' => 'Today, 8:51 AM',
            ],
            [
                'username'  => 'sales.ana',
                'full_name' => 'Ana Mendoza',
                'role'      => 'Sales Associate',
                'shift'     => 'Midday',
                'status'    => 'Active',
                'email'     => 'ana.m@zensupply.example',
                'access'    => 'Sales only',
                'last_login' => 'Today, 10:03 AM',
            ],
            [
                'username'  => 'stock.jules',
                'full_name' => 'Julian Flores',
                'role'      => 'Inventory Clerk',
                'shift'     => 'Opening',
                'status'    => 'Active',
                'email'     => 'julian.f@zensupply.example',
                'access'    => 'Inventory',
                'last_login' => 'Today, 7:58 AM',
            ],
            [
                'username'  => 'manager.bea',
                'full_name' => 'Beatrice Sy',
                'role'      => 'Store Manager',
                'shift'     => 'Flexible',
                'status'    => 'Active',
                'email'     => 'beatrice.s@zensupply.example',
                'access'    => 'Management',
                'last_login' => 'Yesterday, 6:16 PM',
            ],
            [
                'username'  => 'sales.paolo',
                'full_name' => 'Paolo Navarro',
                'role'      => 'Sales Associate',
                'shift'     => 'Closing',
                'status'    => 'Inactive',
                'email'     => 'paolo.n@zensupply.example',
                'access'    => 'Sales only',
                'last_login' => 'Sep 18, 4:37 PM',
            ],
        ];

        return view('users/index', [
            'pageTitle'  => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}
