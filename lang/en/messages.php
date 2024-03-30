<?php

return [
    'app_name' => 'Central Services',
    'welcome' => "You're logged in!",
    'auth' => [
        'actions' => [
            'button_login' => 'Log in',
            'button_register' => 'Register',
            'button_forgot_password' => 'Email Password Reset Link',
            'button_reset_password' => 'Reset Password',
            'button_verify_email' => 'Resend Verification Email',
            'button_confirm_password' => 'Confirm',
        ],
        'links' => [
            'login' => 'Already registered?',
            'logout' => 'Log Out',
            'forgot_password' => 'Forgot your password?',
            'reset_password' => 'Redefinir senha',
            'resend_verification' => 'Reenviar e-mail de verificação',
            'profile' => 'Profile',
        ],
        'response' => [
            'verify_email_response' => 'A new verification link has been sent to the email address you provided during registration.'
        ],
        'text' => [
            'forgot_password_text' => 'Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
            'verify_email_text' => 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.',
            'confirm_password_text' => 'This is a secure area of the application. Please confirm your password before continuing.',
        ],
    ],
    'labels' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Password Confirmation',
        'current_password' => 'Current Password',
        'new_password' => 'New Password',
        'new_password_confirmation' => 'New Password Confirmation',
        'remember' => 'Remember me',
        'preferred_language' => 'Preferred Language',
    ],
    'pages' => [
        'profile' => [
            'delete-user-form' => [
                'title' => 'Delete Account',
                'description' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.',
                'button' => 'Delete Account',
                'modal' => [
                    'title' => 'Are you sure you want to delete your account?',
                    'message' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.',
                    'button_cancel' => 'Cancel',
                    'button_confirm' => 'Delete Account',
                ],
            ],
            'update-language-form' => [
                'title' => 'Switch Language',
                'description' => 'Update your preferred language information.',
                'response' => [
                    'success' => 'Saved.',
                ],
            ],
            'update-password-form' => [
                'title' => 'Update Password',
                'description' => 'Ensure your account is using a long, random password to stay secure.',
                'button_confirm' => 'Save',
                'response' => [
                    'success' => 'Saved.',
                ],
            ],
            'update-profile-information-form' => [
                'title' => 'Profile Information',
                'description' => "Update your account's profile information and email address.",
                'button_confirm' => 'Save',
                'response' => [
                    'success' => [
                        'send_verification' => 'A new verification link has been sent to your email address.',
                        'saved' => 'Saved.'
                    ],
                    'error' => [
                        'title' => 'Your email address is unverified.',
                        'description' => 'Click here to re-send the verification email',
                    ],
                ],
            ],
        ],
    ],
    'sidebar' => [
        'global_items' => [
            'register' => 'Register',
            'to_view' => 'To view',
            'reports' => 'Reports',
            'search' => 'Search',
        ],
        'courses' => [
            'name' => 'Courses',
            'items' => [
                'curricular_structure' => 'Curricular Structure'
            ],
        ],
        'classes' => [
            'name'=> 'Classes',
            'items' => [
                'presence' => 'Presence',
                'grades' => 'Grades',
                'warnings' => 'Warnings',
            ],
        ],
        'people' => [
            'name' => 'People',
            'items' => [
                'coordinator' => [
                    'name' => 'Coordinator',
                    'items' => [
                        'courses' => 'Courses',
                    ],
                ],
                'students' => [
                    'name' => 'Students',
                    'items' => [
                        'documents' => 'Documents',
                        'historic' => 'Historic',
                    ],
                ],
                'teachers' => [
                    'name' => 'Teachers',
                    'items' => [
                        'classes' => 'Classes',
                    ],
                ],
            ],
        ],
        'administrative' => [
            'name' => 'Administrative',
            'items' => [
                'schedule' => 'Schedule',
                'leads' => 'Leads',
                'reports' => [
                    'name' => 'Reports',
                    'items' => [
                        'courses' => 'Courses',
                        'students' => 'Students',
                        'teachers' => 'Teachers',
                        'coordinators' => 'Coordinators',
                        'classes' => 'Classes',
                        'financial' => 'Financial',
                    ],
                ],
                'announcements' => 'Announcements',
                'documents' => [
                    'name' => 'Documents',
                    'items' => [
                        'declaration' => 'Declaration',
                        'historic' => 'Historic',
                        'certificates' => 'Certificates',
                    ],
                ],
            ],
        ],
        'financial' => [
            'name' => 'Financial',
            'items' => [
                'bills' => 'Bills to receive',
                'defaulters' => 'Defaulters',
                'nfse' => 'NFSe issuance',
                'bank_accounts' => 'Bank accounts',
                'negotiation' => 'Negotiation',
            ],
        ],
    ],
];
