<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Company;

class RegAccount extends Controller
{
    public function regaccount(Request $request) {
        $newaccount = new Company;
        $newaccount->name = $request->name;
        $newaccount->email = $request->email;
        $newaccount->address = $request->address;
        $newaccount->password = $request->password;
        $newaccount->save();

        return redirect('companies');
    }
}
