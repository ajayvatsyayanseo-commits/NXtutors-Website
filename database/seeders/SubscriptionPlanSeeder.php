<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'plan_type' => 'student',
                'plan_name' => 'Student Free',
                'price' => 0,
                'duration_days' => 30,
                'ai_credits' => 90,
                'contact_limit' => 0,
                'lead_limit' => 0,
                'features' => [
                    'Browse tutor listings',
                    'Limited profile preview',
                    '3 AI doubt questions per day',
                    'No direct contact details',
                    'Limited AI tutor match preview',
                    'Priority: No',
                ],
                'status' => 1,
                'sort_order' => 1,
            ],
            [
                'plan_type' => 'student',
                'plan_name' => 'Student Basic',
                'price' => 199,
                'duration_days' => 30,
                'ai_credits' => 150,
                'contact_limit' => 10,
                'lead_limit' => 0,
                'features' => [
                    'Full tutor profile access',
                    '10 tutor contact/inquiry credits per month',
                    '150 AI messages per month',
                    '2 study plans per month',
                    '5 practice tests per month',
                    'Priority: Standard',
                ],
                'status' => 1,
                'sort_order' => 2,
            ],
            [
                'plan_type' => 'student',
                'plan_name' => 'Student Plus',
                'price' => 399,
                'duration_days' => 30,
                'ai_credits' => 500,
                'contact_limit' => 25,
                'lead_limit' => 0,
                'features' => [
                    '25 tutor contact/inquiry credits per month',
                    '500 AI messages per month',
                    '6 study plans per month',
                    '15 practice tests per month',
                    'Saved tutors',
                    'Better AI tutor match',
                    'Priority inquiry tag',
                ],
                'status' => 1,
                'sort_order' => 3,
            ],
            [
                'plan_type' => 'student',
                'plan_name' => 'Student Premium',
                'price' => 699,
                'duration_days' => 30,
                'ai_credits' => 1500,
                'contact_limit' => 60,
                'lead_limit' => 0,
                'features' => [
                    '60 tutor contact/inquiry credits per month',
                    '1500 AI messages per month',
                    'Unlimited saved tutors',
                    'Parent-style progress summary',
                    'Highest AI tutor matching support',
                    'High priority',
                ],
                'status' => 1,
                'sort_order' => 4,
            ],
            [
                'plan_type' => 'tutor',
                'plan_name' => 'Tutor Free',
                'price' => 0,
                'duration_days' => 30,
                'ai_credits' => 30,
                'contact_limit' => 0,
                'lead_limit' => 3,
                'features' => [
                    'Basic profile',
                    'Limited subjects/classes',
                    'Profile visible after approval',
                    'AI profile preview',
                    'No premium badge',
                    'Very limited leads',
                    'Boost Level: None',
                ],
                'status' => 1,
                'sort_order' => 1,
            ],
            [
                'plan_type' => 'tutor',
                'plan_name' => 'Tutor Pro',
                'price' => 499,
                'duration_days' => 30,
                'ai_credits' => 300,
                'contact_limit' => 0,
                'lead_limit' => 30,
                'features' => [
                    'Active profile listing',
                    '30 lead views per month',
                    'AI profile builder',
                    'Reply templates',
                    'Lesson plan generator',
                    'Worksheet generator',
                    'More subjects/classes',
                    'Boost Level: Medium',
                ],
                'status' => 1,
                'sort_order' => 2,
            ],
            [
                'plan_type' => 'tutor',
                'plan_name' => 'Tutor Premium',
                'price' => 999,
                'duration_days' => 30,
                'ai_credits' => 900,
                'contact_limit' => 0,
                'lead_limit' => 80,
                'features' => [
                    '80 lead views per month',
                    'Premium badge',
                    'Higher ranking',
                    'AI lead assistant',
                    'AI analytics',
                    'Demo class scripts',
                    'Priority notifications',
                    'Boost Level: High',
                ],
                'status' => 1,
                'sort_order' => 3,
            ],
            [
                'plan_type' => 'tutor',
                'plan_name' => 'Tutor Featured',
                'price' => 1999,
                'duration_days' => 30,
                'ai_credits' => 2500,
                'contact_limit' => 0,
                'lead_limit' => 200,
                'features' => [
                    '200 lead views per month',
                    'Featured listing slots',
                    'Strongest profile boost',
                    'Top city/subject visibility where available',
                    'Advanced analytics',
                    'Priority support',
                    'Boost Level: Highest',
                ],
                'status' => 1,
                'sort_order' => 4,
            ],
        ];

        foreach ($plans as $plan) {
            SubscriptionPlan::updateOrCreate(
                [
                    'plan_type' => $plan['plan_type'],
                    'plan_name' => $plan['plan_name'],
                ],
                $plan
            );
        }
    }
}