<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Alyssa Reyes',
                'email'     => 'alyssa.reyes@example.com',
                'phone'     => '+63 917 204 1186',
                'style'     => 'Muay Thai',
                'status'    => 'Active',
                'tier'      => 'Gold',
                'orders'    => 18,
                'spent'     => '₱38,420',
                'last_order' => 'Oct 3, 2026',
                'joined'    => 'Jan 12, 2025',
            ],
            [
                'full_name' => 'Miguel Santos',
                'email'     => 'miguel.santos@example.com',
                'phone'     => '+63 995 481 3022',
                'style'     => 'Brazilian Jiu-Jitsu',
                'status'    => 'Active',
                'tier'      => 'Gold',
                'orders'    => 14,
                'spent'     => '₱52,180',
                'last_order' => 'Oct 3, 2026',
                'joined'    => 'Mar 8, 2025',
            ],
            [
                'full_name' => 'Sofia Lim',
                'email'     => 'sofia.lim@example.com',
                'phone'     => '+63 927 653 9401',
                'style'     => 'Karate',
                'status'    => 'Active',
                'tier'      => 'Silver',
                'orders'    => 9,
                'spent'     => '₱21,760',
                'last_order' => 'Oct 1, 2026',
                'joined'    => 'Jun 21, 2025',
            ],
            [
                'full_name' => 'Daniel Cruz',
                'email'     => 'daniel.cruz@example.com',
                'phone'     => '+63 916 875 2204',
                'style'     => 'Boxing',
                'status'    => 'Inactive',
                'tier'      => 'Member',
                'orders'    => 4,
                'spent'     => '₱7,980',
                'last_order' => 'Jul 18, 2026',
                'joined'    => 'Nov 2, 2025',
            ],
            [
                'full_name' => 'Isabella Tan',
                'email'     => 'isabella.tan@example.com',
                'phone'     => '+63 908 311 7654',
                'style'     => 'Taekwondo',
                'status'    => 'Active',
                'tier'      => 'Silver',
                'orders'    => 11,
                'spent'     => '₱29,540',
                'last_order' => 'Sep 29, 2026',
                'joined'    => 'Feb 14, 2025',
            ],
            [
                'full_name' => 'Noah Garcia',
                'email'     => 'noah.garcia@example.com',
                'phone'     => '+63 939 742 6018',
                'style'     => 'MMA',
                'status'    => 'Active',
                'tier'      => 'Member',
                'orders'    => 6,
                'spent'     => '₱16,230',
                'last_order' => 'Sep 27, 2026',
                'joined'    => 'Apr 30, 2026',
            ],
        ];

        return view('customers/index', [
            'pageTitle'  => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}
