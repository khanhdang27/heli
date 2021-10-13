<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentSchedule;
use App\Models\User;
use Bavix\Wallet\Models\Transaction;
use Bavix\Wallet\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class WalletManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $wallets = User::with('wallet', 'roles')->whereHas('roles', function ($query){
            return $query->where('roles.id', 3);
        }
        )->paginate(9);
        return view('admin.wallet-manager.index',[
            'wallets' => $wallets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Wallet $wallet_manager
     * @return View
     */
    public function show(Wallet $wallet_manager)
    {
        $transactions = Transaction::where('wallet_id', $wallet_manager->id)->where('type', 'deposit')
            ->orderBy('created_at', 'desc')->paginate(9);
        $user = User::where('id', $wallet_manager->holder_id)->first();
        return \view('admin.wallet-manager.deposit-history', [
            'transactions' => $transactions,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Wallet  $wallet_manager
     * @return View
     */
    public function edit(Wallet $wallet_manager)
    {
        $user = User::where('id', $wallet_manager->holder_id)->first();
        return view('admin.wallet-manager.edit', [
            'wallet' =>$wallet_manager,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Wallet  $wallet_manager
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Wallet $wallet_manager)
    {
        $validate_request = $request->validate([
           'balance' => 'required|numeric|min:0'
        ]);
        DB::beginTransaction();
        try {
            $wallet_manager->update([
                'balance' =>$validate_request['balance']
            ]);
            DB::commit();
            return back()->with('success', 'Update success');
        } catch (\Throwable $th){
            DB::rollBack();
            return back()->withErrors('Update error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
