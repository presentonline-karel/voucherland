<?php
 
namespace App\Repositories;
 
use App\Models\User;
use App\Models\Voucher;
 
class VoucherRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Voucher::all()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}