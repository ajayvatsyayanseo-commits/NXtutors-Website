<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Support;

use App\Models\Register;

/**
 * Who is asking, in the only terms the dashboard cares about.
 *
 * The legacy login stores a string `user_id` in the session, not a numeric PK,
 * and every business table joins on that string. This object carries it so no
 * controller has to remember which of the two identifiers a given table uses.
 */
final class DashboardIdentity
{
    public function __construct(
        public readonly string $userId,
        public readonly string $role,          // student|tutor
        public readonly Register $register,
    ) {
    }

    public static function fromRegister(Register $register): self
    {
        return new self(
            (string) $register->user_id,
            $register->join_as === 'teacher' ? 'tutor' : 'student',
            $register,
        );
    }

    public function isTutor(): bool
    {
        return $this->role === 'tutor';
    }

    public function isStudent(): bool
    {
        return $this->role === 'student';
    }

    /**
     * The display shape the dashboard header needs, with nothing sensitive in it.
     */
    public function toArray(): array
    {
        $r = $this->register;

        return [
            'user_id' => $this->userId,
            'role' => $this->role,
            'name' => $r->name,
            'email' => $r->email,
            'phone' => $r->phone,
            'avatar' => $r->avatar,
            'city' => $r->city,
            'district' => $r->district,
            'state' => $r->state,
            'pincode' => $r->pincode,
            'address' => $r->address,
            'gender' => $r->gender,
            'dob' => $r->dob,
            'user_type' => $r->user_type,
            'for_class' => $r->for_class,
            'class_type' => $r->class_type,
            'budget' => $r->budget,
            'experience' => $r->experience,
            'education' => $r->education,
            'other_education' => $r->other_education,
            'degree' => $r->degree,
            'profile' => $r->profile,
            'profile_desc' => $r->profile_desc,
            'pro_desc' => $r->pro_desc,
            'document_type' => $r->document_type,
            'document_number' => $r->document_number,
            'status' => $r->status,
            'joined_on' => $r->date,
        ];
    }
}
